<template>
  <q-page padding class="flex flex-center">
    <!-- content -->
     <div class="q-gutter-y-md text-center">
      <h1 class=" q-mt-lg text-center text-h5 text-weight-bolder text-grey-9">Register Form</h1>
    <div class="row q-col-gutter-sm   ">
      <div class=col-6>
        <q-input  color='light-blue-8' rounded outlined  v-model="name" label="Name"></q-input>
      </div>
       <div class=col-6>
        <q-input suffix="@gmail.com" rounded outlined v-model="email" label="Email"></q-input>
      </div>
      <div class=col-6>
        <q-input  :type="isPwd ? 'password':'text'" rounded outlined v-model="password" label="Password">
          <template v-slot:append>
          <q-icon
            :name="isPwd ? 'visibility_off' : 'visibility'"
            class="cursor-pointer"
            @click="isPwd = !isPwd"
          />
        </template>
        </q-input>
      </div>
       <div class=col-6>
        <q-input type="password" rounded outlined v-model="confirmpassword" label="Confirm Password"></q-input>
      </div>
    </div>
    <q-btn @click="register" icon="person_add"  rounded color='purple' >Register</q-btn>
     </div>
    
  </q-page>
</template>

<script setup>
import { Notify } from 'quasar';
import {api} from 'src/boot/axios';
import {ref} from 'vue';
const name = ref('');
const email = ref('');
const password = ref('');
const confirmpassword = ref('');
const isPwd = ref(true);
function register(){
  if (password.value === confirmpassword.value){
  api.post('/api/test' , {
    name : name.value ,
    email : email.value ,
    password : password.value 
})
.then((r)=>{
  console.log(r.data);
 
  });
  }else{
    Notify.create({
      type: 'Negative', 
      message: 'password does not match',
      icon : "person_add",
    });
  }
}

</script>
