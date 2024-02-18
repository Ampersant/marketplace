<template>
   <div class="section-facts-wrapper">
      <div class="fact-one">
         <h1>{{obg.factOneHeader}}</h1>
         <p>Office are avalible on different countries</p>
      </div>
      <div class="fact-two">
         <h1>238</h1>
         <p>Seats are avalible right now with dedicated support</p>
      </div>
      <div class="fact-three">
         <h1>1,395</h1>
         <p>People are using our co-work spaces right now</p>
      </div>
   </div>
</template>

<script>

export default {
   data(){
      return{
         obg: {
            factOneHeader: '06',
         }
      }
   }
}
</script>

<style>
   .section-facts-wrapper{
      display: grid;
      grid-template-columns: repeat(3, 15vw);
      text-align: center;
      justify-content: center;
      margin: 8rem 0 7rem 0;
      gap: 0 100px;
   }
   .fact-one{
      grid-column: span 1;
   }
   .fact-one h1{
      padding-bottom: 0.7em;
      color: #161C2D;
   }
   .fact-two{
      grid-column: span 1;
   }
   .fact-two h1{
      padding-bottom: 0.7em;
      color: #161C2D;
   }
   .fact-three{
      grid-column: span 1;
   }
   .fact-three h1{
      padding-bottom: 0.7em;
      color: #161C2D;
   }
   .fact-one p, .fact-two p, .fact-three p{
      color: #161C2D;
   }
</style>
