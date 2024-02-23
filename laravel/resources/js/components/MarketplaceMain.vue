<template>
   <div class="test-case"></div>
   <div class="main-header"><Header /></div>
   <div class="main-section"><Section /></div>
   <div class="main-footer"><Footer /></div>
</template>

<script>
import Header from '../components/Header.vue'
import Section from './Section.vue'
import Footer from './Footer.vue'

export default {
   name: 'MarketplaceMain',
   components: {
      Header, Section, Footer
   }
}

</script>

<style scoped>
   .main-header{
      background: url(../../images/mainpage-001.png);
      background-size: cover;
      min-height: 100vh;
   }
   .main-section{
      font-family: Roboto-Regular;
   }
</style>