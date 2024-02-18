<template>
  <div class="content-wrapper">
   <div class="content-wrap">
      <div class="hd-wrapper">
         <h3>
         Shared space in your
      </h3>
      <h1>
         Rent desk space in a shared office environment
      </h1>
      </div>
      <div class="form-content"><HeaderFormContent /></div>
      <p>Take virtual tour of our spaces</p>
      <img src="../../images/mainpage-005.png" alt="hh" class="nxt-cr-btn">
   </div>
  </div>
</template>

<script>
import HeaderFormContent from './HeaderFormContent.vue';

export default {
   name: 'HeaderContent',
   components: {
      HeaderFormContent
   }
}
</script>

<style>
   .content-wrapper{
      font-family: Roboto-Regular;
      color: #fff;
      text-align: center;
      padding-top: 150px;
   }
   .content-wrap{
      display: grid;
      grid-template-columns: repeat(12, 1fr);
   }
   .content-wrap p{
      grid-column: 4 / span 6;
      text-align: center;
      margin: 40px 0 130px 0;
   }
   .content-wrap .nxt-cr-btn{
      grid-column: 4 / span 6;
      margin: 20px auto;
      width: 50px;
      cursor: pointer;
   }
   .hd-wrapper{
      grid-column: 5 / span 4;
   }
   .content-wrap h3{
      color: #68D585;
      padding-bottom: 25px;
   }
   .content-wrap h1{
      font-size: 2.5em;
   }
   .form-content{
      grid-column: 4 / span 6;
   }

</style>