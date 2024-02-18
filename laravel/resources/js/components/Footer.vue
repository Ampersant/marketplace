<template>
   <div class="footer-wrapper">
      <hr>
      <div class="footer-main"><FooterMain /></div>
      <hr>
      <div class="footer-copyright"><FooterCopyright /></div>
   </div>
</template>

<script>
import FooterCopyright from './FooterCopyright.vue';
import FooterMain from './FooterMain.vue';

export default {
   name: 'Footer',
   components: {
      FooterCopyright,
      FooterMain
   }
}
</script>

<style>
   .footer-wrapper{
      padding: 0 15vw;
      overflow-x: hidden;
   }
   hr{
      height: 1px;
      background: #161c2d35;
      width: 100vw;
      margin-left: -15vw;
   }
</style>