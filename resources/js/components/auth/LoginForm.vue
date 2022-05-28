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
      <password-input v-model="password" />
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
    }
  }
};

mounted: {
  console.log('Login component');
}
</script>
