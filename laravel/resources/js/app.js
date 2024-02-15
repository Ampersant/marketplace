import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import MarketplaceMain from './components/MarketplaceMain.vue'

const app = createApp({
   components: {
      MarketplaceMain,
   }
})
app.mount('#app')
