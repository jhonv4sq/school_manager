<template>
  <div>
    <div class="flex flex-col mb-3">
      <label class="uppercase text-gray-700 text-xs font-bold mb-2"
        >Correo electronico</label>
      <email-input v-model="email" />
    </div>
    <div class="flex flex-col mb-3">
      <label class="uppercase text-gray-700 text-xs font-bold mb-2"
        >Contraseña</label>
        <!-- <font-awesome-icon icon="fa-eye-slash" id="slash" /> -->
      <div class="relative flex justify-end items-center">
        <password-input v-model="password" />
        <font-awesome-icon :icon="eye" id="eye" @click.prevent="show()" class="absolute cursor-pointer mr-2 opacity-60 hover:opacity-80"/>
      </div>
    </div>
    <div
      class="inline-flex items-center cursor-pointer appearance-none focus:outline-none mb-3"
    >
      <t-checkbox />
      <span class="ml-2 text-sm font-semibold text-gray-700"
        >Mantener credenciales</span
      >
    </div>
    <div class="mb-2">
      <t-button>Iniciar sesión</t-button>
    </div>
  </div>
</template>

<script>
import Vue from 'vue';
import VueTailwind from 'vue-tailwind';
import loginSettings from '../settings/loginSettings';

const settings = loginSettings['fields'][0];

Vue.use(VueTailwind, settings);

export default {
  name: 'LoginForm',
  data() {
    return {
      email: '',
      password: '',
      eye: 'fa-eye',

    }
  },
  methods:{
    show() {
      let input = document.getElementById('password');
      switch(input.type){
        case 'password':
          input.type = 'text';
          this.eye = 'fa-eye-slash';
          break;
        case 'text':
          input.type = 'password';
          this.eye = 'fa-eye';
          break;
      }
    }
  }
};

mounted: {
  console.log('Login component');
}
</script>
