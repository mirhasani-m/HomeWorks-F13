<template>
  <q-page class="flex flex-center">
<q-input rounded outlined  v-model="msg" class = "full-width" color = "purple-5" />
<q-btn @click="showAlert" label = "Register" color= "blue-6" rounded size="md" />
<ul>
  <li v-for="(item , index )in array " :key="'item-' +index"> {{item}} </li>
</ul>
  </q-page>
</template>

<script setup>
import  {ref} from 'vue'
const msg = ref('Hello World!')
const array = ref([1,2,3,4,5])
function showAlert(){
  alert(msg.value)
}
</script>
