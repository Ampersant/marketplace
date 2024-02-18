<template>
   <div class="popular-locations-wrapper">
      <div class="popular-locations-texts">
         <h1>Popular locations</h1>
         <p>With lots of unique blocks, you can easily build a page, esaily without any codings</p>
      </div>
      <div class="seats-wrapper">
         <div class="seat-wrap-one">
            <div class="img-wr"><img src="../../images/mainpage-006.png" alt="mp1"></div>
            <h3>Beauview</h3>
            <p>37 seats</p>
         </div>
         <div class="seat-wrap-two">
            <div class="img-wr"><img src="../../images/mainpage-007.png" alt="mp2"></div>
            <h3>Haleyborough</h3>
            <p>12 seats</p>
         </div>
         <div class="seat-wrap-three">
            <div class="img-wr"><img src="../../images/mainpage-008.png" alt="mp3"></div>
            <h3>Jeromyshire</h3>
            <p>28 seats</p>
         </div>
      </div>
   </div>
</template>

<script>
export default {

}
</script>

<style>
   .popular-locations-wrapper{
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      color: #161C2D;
      margin-bottom: 10em;
   }
   .popular-locations-texts p{
      margin: 1em 0;
   }
   .popular-locations-texts{
      grid-column: 5 / span 4;
      text-align: center;
   }
   .seats-wrapper{
      grid-column: 3 / span 8;
      display: grid;
      grid-template-columns: 1em 3fr 1em 3fr 1em 3fr 1em;
      text-align: center;
      margin-top: 4em;
   }
   .seat-wrap-one{
      grid-column: 2 / span 1;
   }
   .seat-wrap-two{
      grid-column: 4 / span 1;
   }
   .seat-wrap-three{
      grid-column: 6 / span 1;
   }
   .seat-wrap-one .img-wr{
      box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
      transition: box-shadow .5s;
      width: 15em;
      height: 20em;
      margin: 0 auto 1.5em auto;
      border-radius: .5rem;
      overflow: hidden;
   }
   .seat-wrap-one .img-wr img{
      width: 15em;
      height: 20em;
      transition: transform .5s;
   }
   .seat-wrap-one .img-wr img:hover{
      transform: scale(1.03);
   }
   .seat-wrap-one .img-wr:hover{
      box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
   }
   .seat-wrap-two img{
      width: 15em;
      height: 20em;
      transition: transform .5s;
   }
   .seat-wrap-two img:hover{
      transform: scale(1.03);
   }
   .seat-wrap-two .img-wr{
      width: 15em;
      height: 20em;
      margin: 0 auto 1.5em auto;
      overflow: hidden;
      border-radius: .5rem;
      box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
      transition: box-shadow .5s;
   }
   .seat-wrap-two .img-wr:hover{
      box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
   }
   .seat-wrap-three img{
      width: 15em;
      height: 20em;
      transition: transform .5s;
      margin: 0 auto 1.5em auto;
   }
   .seat-wrap-three img:hover{
      transform: scale(1.03);
   }
   .seat-wrap-three .img-wr{
      width: 15em;
      height: 20em;
      margin: 0 auto 1.5em auto;
      overflow: hidden;
      border-radius: .5rem;
      transition: box-shadow .5s;
      box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
   }
   .seat-wrap-three .img-wr:hover{
      box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
   }
</style>