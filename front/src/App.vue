<script setup>
import Header      from './components/Header.vue';
import Breadcrumbs from './components/Breadcrumbs.vue';
import MainBlock   from './components/MainBlock.vue';
import TableBlock  from './components/TableBlock.vue';
import ModalWindow from './components/ModalWindow.vue';
import CreateForm  from './components/CreateForm.vue'

import { ref } from 'vue'

let modal      = ref(false)
let modalTitle = ref('')
let createForm = ref(false)
let newItem    = ref(null)

function toggleCreateForm(value){
  createForm.value = value
  document.querySelector('body').classList.toggle('hidden')
}

function addItem(data){
  toggleCreateForm(false)
  newItem.value = data
}


function toggleModal(value, title){
  modal.value = value
  modalTitle.value = title
  document.querySelector('body').classList.toggle('hidden')
}

</script>

<template>
  
  
  <div class="wrapper">

    <Header />

    <div class="container">
      <Breadcrumbs />
      <MainBlock />
      <TableBlock 
        @toggleModal      = "toggleModal"
        @toggleCreateForm = "toggleCreateForm"
        :newItem          = "newItem"
      />
    </div>

  </div>

  <ModalWindow 
    :modal       = "modal" 
    :modalTitle  = "modalTitle" 
    @toggleModal = "toggleModal" 
  />

  <CreateForm 
    :createForm       = "createForm"
    @toggleCreateForm = "toggleCreateForm"
    @addItem          = "addItem"
  />

</template>
