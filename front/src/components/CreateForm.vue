<script setup>

import { ref } from 'vue'

let props = defineProps({
    createForm: Boolean
})

let title = ref('')
let count = ref(1)
let source = ref('Склад')
let laser = ref(0)
let welding = ref(0)
let assymbling = ref(0)
let electr = ref(0)

let options = [
    {value: 'Склад',        title: 'склад' },
    {value: 'Производство', title: 'поизводство' },
]

let emit = defineEmits(['addItem', 'toggleCreateForm'])

function addItem(){
    let item = {
        title: title.value,
        source: source.value,
        count: count.value,
        laser: laser.value,
        welding: welding.value,
        assymbly: assymbling.value,
        electr: electr.value
    }

    fetch('http://127.0.0.1:8000/api/items', {
        method: "POST",
        headers: {  "Content-Type": "application/json" },
        body: JSON.stringify(item)
    })
    .then(response => response.json())
    .then(data => emit('addItem', data) )
}

</script>

<template>
<div v-if="createForm" @click="emit('toggleCreateForm', false)" class='overlay'>
    <form @click.stop='' @submit.prevent="addItem" class="form" >
        <h2>Создать новый объект</h2>
        <div class='coloms'>
            <div class="left">

                <input 
                    v-model="title" 
                    type="text"  
                    placeholder="Наименование"
                ><br>
                Количество: <input 
                    min="1" 
                    v-model="count"
                    type="number"
                ><br>
                <select v-model="source">
                    <option 
                        :value ="option.value"    
                        v-for  ="option in options"  
                        :key   ="option.value"   
                    >
                        {{ option.title}}
                    </option>
                </select>
            </div>
        
            <div>
                Лазер  <input v-model="laser"      type="number"><br>
                Сварка <input v-model="welding"    type="number"><br>
                Сборка <input v-model="assymbling" type="number"><br>
                Электр <input v-model="electr"     type="number">
            </div> 
        </div> 
        <button type="submit">Добавить</button>
        <span @click="emit('toggleCreateForm', false)" class="close">&#215;</span>
    </form>
</div>
</template>

<style>

.form{
    background: #1B263C;
    width: 80%; 
    padding: 30px 20px;
    color: #fff;
    font-family: 'GilroyR';
    font-size: 20px;
    border-radius: 18px;
    position: relative;
}

.form h2{
    font-family: 'GilroySB';
    font-size: 24px;
    font-weight: 400;
    line-height: 28.8px;
    text-align: center;
    color: #fff;
    margin-bottom: 30px;
}

.coloms{
    display: flex;
    justify-content: space-between;
}

.form input{
    margin-bottom: 10px;
    height: 35px;
    border-radius: 10px;
    padding: 6px 12px;
}

.form input[type='number']{
    max-width: 70px;
}

.form button{
    display: block;
    margin: 0 auto;
    background-color: #54CC2A;
    border: none;
    border-radius: 8px;
    padding: 12px 18px;
    font-family: 'InterSB';
    font-size: 24px;
    font-weight: 400;
    line-height: 28.8px;
    text-align: center;
    color: #fff;
}

.close{
    position: absolute;
    top: 0;
    right: 10px;
    color: #E12D2C;
    font-size: 50px;
    font-family: 'GilroyB';
    cursor: pointer;
}

</style>