<template>
   <div class="section-content-wrapper">
      <div class="sct-cnt-wrap">
         <div class="text-content-wrap">
            <h1>Work around very <br> talanted people</h1>
            <p>With lots of unique blocks, you can easily build <br> a page easily without any codings</p>
         </div>
         <div class="image-one-wrap"><img class="img-one" src="../../images/mainpage-009.png" alt=""></div>
         <div class="image-two-wrap"><img class="img-two" src="../../images/mainpage-010.png" alt=""></div>
      </div>
   </div>
</template>

<script>
export default {

}
</script>

<style>
   .section-content-wrapper{
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      color: #161C2D;
      font-family: Roboto-Regular;
      padding-top: 8em;
      background: url(../../images/mainpage-011.png);
      background-repeat: no-repeat;
      background-size: 100% 65%;
   }
   .sct-cnt-wrap{
      grid-column: 3 / span 8;
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto auto;
   }
   .text-content-wrap{
      grid-column: span 1;
      grid-row: span 1;
   }
   .text-content-wrap p{
      margin: 2em 0 4em 0;
   }
   .image-one-wrap{
      grid-column: 1 / span 1;
      grid-row: 2 / span 1;
   }
   .image-one-wrap .img-one{
      width: 27em;
      border-radius: 1rem;
   }
   .image-two-wrap{
      grid-column: 2 / span 1;
      grid-row: span 2;
   }
   .image-two-wrap .img-two{
      width: 27em;
      border-radius: 1rem;
   }
</style>