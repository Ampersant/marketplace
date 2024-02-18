<template>
  <div class="features-wrapper">
      <div class="features-wrap">
         <div class="feature-one-wrap">
            <img src="../../images/mainpage-012.png" alt="mp12">
            <h3>Dedicated Desk</h3>
            <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
         </div>
         <div class="feature-two-wrap">
            <img src="../../images/mainpage-013.png" alt="mp13">
            <h3>High Speed Internet</h3>
            <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
         </div>
         <div class="feature-three-wrap">
            <img src="../../images/mainpage-014.png" alt="mp14">
            <h3>Unlimited Coffee</h3>
            <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
         </div>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
   .features-wrapper{
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      font-family: Roboto-Regular;
      color: #161C2D;
      margin: 8em 0;
   }
   .features-wrap{
      grid-column: 3 / span 8;
      display: grid;
      grid-template-columns: repeat(3, auto);
      column-gap: 1em;
   }
   .feature-one-wrap, .feature-two-wrap, .feature-three-wrap{
      display: grid;
      grid-template-columns: repeat(2, auto);
      grid-template-rows: repeat(2, auto);
   }
   .feature-one-wrap img, .feature-two-wrap img, .feature-three-wrap img{
      grid-column: 1;
      grid-row: span 2;
      width: 45px;
      height: 45px;
      margin-right: 1em;
   }
   .feature-one-wrap h3, .feature-two-wrap h3, .feature-three-wrap h3{
      margin-bottom: 1em;
   }
</style>