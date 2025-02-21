<template>
  <q-page padding class="q-gutter-y-md">
    <!-- content -->
    <h1 class=" q-mt-lg text-center text-h5 text-weight-bolder text-grey-9">Register Form</h1>
    <div class="row q-col-gutter-sm   ">
      <div class=col-6>
        <q-input class="R15" color='light-blue-8' outlined  v-model="name" label="Name"></q-input>
      </div>
       <div class=col-6>
        <q-input outlined v-model="email" label="Email"></q-input>
      </div>
      <div class=col-6>
        <q-input outlined v-model="password" label="Password"></q-input>
      </div>
       <div class=col-6>
        <q-input outlined v-model="confirmpassword" label="Confirm Password"></q-input>
      </div>
    </div>
    <q-btn color='primary' class="full-width ">Register</q-btn>
  </q-page>
</template>

<script setup>
//
</script>
