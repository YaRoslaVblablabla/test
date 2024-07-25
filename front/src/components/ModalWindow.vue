<script setup>

let props = defineProps({
    modal: Boolean,
    modalTitle: String
})

let emit = defineEmits('toggleModal')

</script>

<template>

<div v-if="modal" class="overlay" @click="emit('toggleModal', false, '')">
    <div @click.stop="" class="modal" >
        <img src="../assets/img/modalImg.jpeg">
        <p>{{ modalTitle }}</p>   
        <span @click="emit('toggleModal', false, '')" class="close">&#215;</span>
    </div>
</div>

</template>


<style scoped>

.modal{
    background-color: #D9D9D9;
    border-radius: 8px;
    padding: 40px 50px 20px;
    position: relative;
    cursor: auto;
    font-family: 'GilroySB';
    font-size: 14px;
    font-weight: 600;
    line-height: 16.94px;
    text-align: left;
}

.close{
    position: absolute;
    top: 20px;
    right: 10px;
    color: #E12D2C;
    font-size: 50px;
    font-family: 'GilroyB';
    cursor: pointer;
}

.modal img{
    max-width: 900px;
    max-height: 500px;
    height: auto;
    margin-bottom: 25px;
}

</style>