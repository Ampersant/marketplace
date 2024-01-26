import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import ExampleComponent from './components/ExampleComponent.vue'

const app = createApp({
   components: {
      ExampleComponent,
   }
})
app.mount('#app')