import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import MarketplaceMain from './components/MarketplaceMain.vue'
import Feature from './components/Feature.vue'

const app = createApp({
   components: {
      MarketplaceMain,
      Feature,
   }
})
app.mount('#app')
