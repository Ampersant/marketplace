import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import Marketplace from './components/Marketplace.vue'

const app = createApp({
   components: {
      Marketplace,
   }
})
app.mount('#app')