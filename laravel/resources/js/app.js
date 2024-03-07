import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import MarketplaceMain from './components/MarketplaceMain.vue'
import AutorisationPage from './components/AutorisationPage.vue'

const app = createApp({
   components: {
      MarketplaceMain, AutorisationPage,
   }
})
app.mount('#app')