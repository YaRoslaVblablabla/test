<script setup>
import { onMounted,watch, ref } from 'vue'

let list    = ref([])
let secondList = ref([])
let emit = defineEmits('toggleModal', 'toggleCreateForm')
let fullTime = ref(0)
let props = defineProps({
    newItem: Object
})

watch(() => props.newItem, (first, second) => {
    fetchData()
})

function countFulltime(){
    let time = 0
    secondList.value.forEach(item => {
        let subitemsTime = 0

        if(item.subitems !== undefined){
            item.subitems.forEach(el => {
                subitemsTime += el.count * (el.laser +el.welding + el.assembly +el.electr) * item.count
                time += subitemsTime
            })
        }

        time += item.count * ( item.laser + item.welding + item.assembly + item.electr )
    })

    fullTime.value = time
}

function goTop(id){
    console.log(id)
    let index1 = secondList.value.indexOf(secondList.value.find(item => item.id === id))
    if(index1 > 0){
        let index2 = index1 -1;
        [secondList.value[index1], secondList.value[index2]] = [secondList.value[index2], secondList.value[index1]];
    }
    
    list.value = []
    secondList.value.forEach(item => {
        list.value.push(item)
        if(item.subitems.length > 0){
            list.value.push(...item.subitems) 
            item.bottomArrow = true
        }
    })
}


function goBottom(id){
    console.log(id)
    let index1 = secondList.value.indexOf(secondList.value.find(item => item.id === id))
    if(index1 < secondList.value.length){
        let index2 = index1 + 1;
        [secondList.value[index1], secondList.value[index2]] = [secondList.value[index2], secondList.value[index1]];
    }

    list.value = []
    secondList.value.forEach(item => {
        list.value.push(item)
        if(item.subitems.length > 0){
            list.value.push(...item.subitems) 
            item.bottomArrow = true
        }
    })
}


function changeCount(id, count){
    secondList.value.forEach(item => item.id === id ? item.count = count : false)
    countFulltime()
}

async function fetchData(){
    let resp = await fetch('http://127.0.0.1:8000/api/items')
    let data = await resp.json()

    list.value = []
    countFulltime()
    secondList.value = data.data
    
    secondList.value.forEach(item => {
        list.value.push(item)
        if(item.subitems.length > 0){
            list.value.push(...item.subitems) 
            item.bottomArrow = true
        }
    })
}

function emptyString(value){
    return value === 0 ? '' : value
}

function toggleSubitem(id){
    let subitems = document.querySelectorAll(`#item${id}`)
    subitems.forEach(item =>  item.classList.toggle('hide') )
}

function deleteItem(id){
    fetch(`http://127.0.0.1:8000/api/items/${id}`, { method: "DELETE" })
    .then( response => response.json())
    .then( data => data == id ? fetchData() : alert('Что-то пошло не так') )
}

onMounted(
    async function(){
        let resp = await fetch('http://127.0.0.1:8000/api/items')
        let data = await resp.json()

        list.value = []
        secondList.value = data.data
        countFulltime()
        data.data.forEach(item => {
            list.value.push(item)
            if(item.subitems.length > 0){
                list.value.push(...item.subitems) 
                item.bottomArrow = true
            }
        })
    }
)

</script>

<template>

<div class="bg">
    <div class="d-table">

        <div class="d-tr row1">

            <div class="d-td">Наименование</div>
            <div class="d-td">Кол-во</div>
            <div class="d-td">Источник</div>
            <div class="d-td">Лазер</div>
            <div class="d-td">Сварка</div>
            <div class="d-td">Сборка</div>
            <div class="d-td">Электр</div>
            <div class="d-td"></div>

        </div>

        <div 
            v-for="item in list" 
            class="d-tr"
            :id="item.item_id ? `item${item.item_id}` : 'item'"
            :class="item.item_id === undefined ? 'item' : 'subitem hide' "
        >
            <div  class="d-td" @click="toggleSubitem(item.id)">
                {{ item.title }} 
                <i v-if="item.bottomArrow === true" class="down"></i>
            </div>

            <div class="d-td">
                <input 
                    v-if="item.item_id === undefined"
                    min="0" 
                    max="30"
                    type='number'
                    
                    
                    v-model="item.count"
                    @input="changeCount(item.id, item.count)"
                >
                <span v-else>{{ item.count }}</span>
            </div>

            <div class="d-td">{{ item.source   }}</div>
            <div class="d-td">{{ emptyString(item.laser)    }}</div>
            <div class="d-td">{{ emptyString(item.welding)  }}</div>
            <div class="d-td">{{ emptyString(item.assembly) }}</div>
            <div class="d-td">{{ emptyString(item.electr)   }}</div>
            <div class="d-td">

                <div v-if="item.item_id === undefined" class="icons">
                    <div @click="emit('toggleModal', true, item.title)" class="icon search">
                        <img src="../assets/img/icon_search.png">
                    </div>
                    <div @click="deleteItem(item.id)" class="icon trash">
                        <img src="../assets/img/icon_trash.png">
                    </div>
                </div>

            </div>

            <div 
                v-if="item.item_id === undefined " 
                class="d-td arrows"
            >
                <div @click="goTop(item.id)"    class="triangle triangle-top"></div>
                <div @click="goBottom(item.id)" class="triangle triangle-bottom"></div>
            </div>

        </div>

    </div>
    <div class="last__line">
        <button @click="emit('toggleCreateForm', true)" class='btn-add'>
            Добавить
            <div class="circle">
                <div class="plus_two"></div>
            </div>
        </button>
        <p class='last__line-p'>Трудоемкость, мин<span>{{ fullTime }}</span></p>
    </div>
</div>

</template>

<style scoped>

.bg{
    background-color: #fff;
    padding: 24px 20px 46px 28px;
    margin-top: 32px;
}

.add-btn{
    font-family: 'GilroyR';
    font-size: 14px;
    font-weight: 400;
    line-height: 16.8px;
    border: 1px solid #54CC2A;
    border-radius: 8px;
    display: flex;
    gap: 4px;
    max-width: 106px;
    height: 33px;
    justify-content: space-between;
    align-items: center;
    padding: 0 9.25px 0 8px;
    cursor: pointer;
}

.d-table{
    display: table;
    width: 100%;
    border-collapse: collapse;
}

.d-tr{
    display: table-row;
    padding: 0 16px 0 20px;
    position: relative;
}

.d-td{
    display: table-cell;
    text-align: le;
    border: none;
    height: 57px;
    vertical-align: middle;
    margin-bottom: 10px;
    font-family: 'InterR';
    font-size: 12px;
    font-weight: 400;
    line-height: 14.52px;
    text-align: left;
}

.d-td:first-child{
    padding-left: 20px;
    border-radius: 8px 0 0 8px;
}

.d-td:last-child{
    padding-right: 16px;
    border-radius: 0 8px 8px 0;
}

.item .d-td{
    background-color: #F8FAFC;
    
}

.subitem .d-td{
    border-top: 1px solid #D9D9D9;
    border-bottom: 1px solid #D9D9D9;
    border-radius: 18px 0 0 18px;
}

.subitem .d-td:first-child{
    border-left: 1px solid #D9D9D9;
}

.subitem .d-td:last-child{
    border-right: 1px solid #D9D9D9;
    border-radius: 0 8px 8px 0;
}

.hide{
    display: none
}

.icon{
    width: 24px;
    height: 24px;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer
}

.search{
    background-color: #7843E9;
}

.trash{
    background-color: #E12D2C;
}

.icons{
    display: flex;
    gap: 4px;
}

i{
  border: solid #828282;
  border-width: 0 1.5px 1.5px 0;
  display: inline-block;
  padding: 3px;
  cursor: pointer;
}

.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}

.d-td input{
    border: 1px solid #ADADAD;
    border-radius: 4px;
    height: 24px;
    width:  24px;
}

.d-td input::-webkit-outer-spin-button,
.d-td input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; 
}

.arrows{
    position: absolute;
    left: -20px;
    top: 10px;
}

.triangle{
    width: 0;
    height: 0;
    border-left:  7px solid transparent;
    border-right: 7px solid transparent;
    cursor: pointer;
}

.triangle-top {
    border-bottom: 15px solid #7843E9;
    margin-bottom: 3px;
}

.triangle-bottom {
    border-top: 15px solid #7843E9;
}

#item:nth-child(2) .triangle-top{
    border-bottom: 15px solid #C4ABFB;
}

#item:last-child .triangle.triangle-bottom{
    border-top: 15px solid #C4ABFB;
}

.row1{
    font-family: 'GilroyB';
    font-size: 14px;
    font-weight: 700;
    line-height: 17.33px;
    text-align: left;
}

.last__line{
    display:flex;
    justify-content: space-between;
    margin-top: 24px;
}

.last__line .btn-add{
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #54CC2a;
    border-radius: 8px;
    display: flex;
    gap: 4px;
    align-items: center;
    height: 33px;
    padding: 0px 9.25px 0 8px;
    font-family: 'GilroyR';
    font-size: 14px;
    font-weight: 400;
    line-height: 16.8px;
    text-align: left;
}

.last__line-p{
    font-family: 'InterSB';
    font-size: 14px;
    font-weight: 600;
    line-height: 16.94px;
    text-align: left;
}

.last__line span{
    margin-left: 63px;
}

.plus_two {
    width: 19.5px;
    height: 19.5px;
    border-radius: 50%;
    background: #54CC2A;
}

.plus_two:before {
  content: "+";
  display: flex; 
  flex-direction: row; 
  align-items: center; 
  justify-content: center;
  height: 22px; 
  width: 19px;
  font-size: 18px; 
  line-height: 10px; 
  text-align: center; 
  color: #fff;
}

</style>