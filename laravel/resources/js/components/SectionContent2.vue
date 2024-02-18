<template>
   <div class="section-content-two">
      <div class="section-two-wrap">
         <div class="content-left-one">
            <h1>We are always here for your backup.</h1>
            <p>We share common trends and strategies for creating & improving your rental income.</p>
         </div>
         <div class="content-left-two">
            <div class="left-first">
               <img src="../../images/mainpage-015.png" alt="lf-icon">
               <h3>Noise Free Locations</h3>
               <p>With lots of unique blocks, you can easily build a page without coding. </p>
            </div>
            <div class="left-second">
               <img src="../../images/mainpage-015.png" alt="lf-icon">
               <h3>24/7 Hour Support</h3>
               <p>With lots of unique blocks, you can easily build a page without coding. </p>
            </div>
         </div>
         <div class="content-faq">
            <div class="faq-item-1">
               <h3 @click="toggleTheExplanation1">How to setup Shade Pro?<i ref="faqItem1I" class="fa fa-light fa-angle-right fa-2xs"></i></h3>
               <p ref="faqItem1P">With lots of unique blocks, you can easily build a page with coding. Build your next landing page. Integer ut obe ryn. Sed feugiat vitae turpis a porta.</p>
            </div>
            <div class="faq-item-2">
               <h3 @click="toggleTheExplanation2">Can I use Shade Pro for my clients?<i ref="faqItem2I" class="fa fa-angle-right"></i></h3>
               <p ref="faqItem2P">With lots of unique blocks, you can easily build a page with coding. Build your next landing page. Integer ut obe ryn. Sed feugiat vitae turpis a porta.</p>
            </div>
            <div class="faq-item-3">
               <h3 @click="toggleTheExplanation3">How often do you release update?<i ref="faqItem3I" class="fa fa-angle-right"></i></h3>
               <p ref="faqItem3P">With lots of unique blocks, you can easily build a page with coding. Build your next landing page. Integer ut obe ryn. Sed feugiat vitae turpis a porta.</p>
            </div>
            <div class="faq-item-4">
               <h3 @click="toggleTheExplanation4">How can I access to old version?<i ref="faqItem4I" class="fa fa-angle-right"></i></h3>
               <p ref="faqItem4P">With lots of unique blocks, you can easily build a page with coding. Build your next landing page. Integer ut obe ryn. Sed feugiat vitae turpis a porta.</p>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   data(){
      return{
         counter_002: 0,
         counter_003: 0,
         counter_004: 0,
         counter_005: 0,
      }
   },
   methods: {
      toggleTheExplanation1(){
         if(this.counter_002 == 0){
            this.$refs.faqItem1P.style.display = 'block', 
            this.$refs.faqItem2P.style.display = 'none', 
            this.$refs.faqItem3P.style.display = 'none', 
            this.$refs.faqItem4P.style.display = 'none',
            this.$refs.faqItem1I.style.transform = 'rotate(90deg)',
            this.$refs.faqItem2I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem3I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem4I.style.transform = 'rotate(0deg)',
            this.counter_002++
            this.counter_003 = 0
            this.counter_004 = 0
            this.counter_005 = 0
            //if(this.$refs.faqItem2P.style.display == 'none') counter_003 = 0
            //else if(this.$refs.faqItem3P.style.display == 'none') counter_004 = 0
            //else if(this.$refs.faqItem4P.style.display == 'none') counter_005 = 0
         }
         else if(this.counter_002 == 1) this.$refs.faqItem1I.style.transform = 'rotate(0deg)', this.$refs.faqItem1P.style.display = 'none', this.counter_002--
      },
      toggleTheExplanation2(){
         if(this.counter_003 == 0){
            this.$refs.faqItem2P.style.display = 'block',
            this.$refs.faqItem1P.style.display = 'none', 
            this.$refs.faqItem3P.style.display = 'none', 
            this.$refs.faqItem4P.style.display = 'none',
            this.$refs.faqItem2I.style.transform = 'rotate(90deg)',
            this.$refs.faqItem1I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem3I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem4I.style.transform = 'rotate(0deg)',
            this.counter_003++
            this.counter_002 = 0
            this.counter_004 = 0
            this.counter_005 = 0
         }
         //else if(this.$refs.faqItem1P.style.display == 'none') counter_002 = 0
         //else if(this.$refs.faqItem3P.style.display == 'none') counter_004 = 0
         //else if(this.$refs.faqItem4P.style.display == 'none') counter_005 = 0
         else if(this.counter_003 == 1) this.$refs.faqItem2I.style.transform = 'rotate(0deg)', this.$refs.faqItem2P.style.display = 'none', this.counter_003--
      },
      toggleTheExplanation3(){
         if(this.counter_004 == 0){
            this.$refs.faqItem3P.style.display = 'block',
            this.$refs.faqItem2P.style.display = 'none', 
            this.$refs.faqItem1P.style.display = 'none', 
            this.$refs.faqItem4P.style.display = 'none',
            this.$refs.faqItem3I.style.transform = 'rotate(90deg)',
            this.$refs.faqItem2I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem1I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem4I.style.transform = 'rotate(0deg)',
            this.counter_004++
            this.counter_003 = 0
            this.counter_002 = 0
            this.counter_005 = 0
         }
         //else if(this.$refs.faqItem2P.style.display == 'none') counter_003 = 0
         //else if(this.$refs.faqItem1P.style.display == 'none') counter_002 = 0
         //else if(this.$refs.faqItem4P.style.display == 'none') counter_005 = 0
         else if(this.counter_004 == 1) this.$refs.faqItem3I.style.transform = 'rotate(0deg)', this.$refs.faqItem3P.style.display = 'none', this.counter_004--
      },
      toggleTheExplanation4(){
         if(this.counter_005 == 0){
            this.$refs.faqItem4P.style.display = 'block',
            this.$refs.faqItem2P.style.display = 'none', 
            this.$refs.faqItem3P.style.display = 'none', 
            this.$refs.faqItem1P.style.display = 'none',
            this.$refs.faqItem4I.style.transform = 'rotate(90deg)',
            this.$refs.faqItem2I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem3I.style.transform = 'rotate(0deg)',
            this.$refs.faqItem1I.style.transform = 'rotate(0deg)',
            this.counter_005++
            this.counter_003 = 0
            this.counter_004 = 0
            this.counter_002 = 0
         }
         //else if(this.$refs.faqItem2P.style.display == 'none') counter_003 = 0
         //else if(this.$refs.faqItem3P.style.display == 'none') counter_004 = 0
         //else if(this.$refs.faqItem1P.style.display == 'none') counter_002 = 0
         else if(this.counter_005 == 1) this.$refs.faqItem4I.style.transform = 'rotate(0deg)', this.$refs.faqItem4P.style.display = 'none', this.counter_005--
      },
   }
}
</script>

<style>
   .section-content-two{
      background: #161C2D;
      color: #fff;
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      column-gap: 1em;
   }
   .section-content-two p{
      font-family: Roboto-Light;
   }
   .section-two-wrap{
      grid-column: 3 / span 8;
      display: grid;
      grid-template-columns: 1fr 45vw;
      grid-template-rows: repeat(2, auto);
      margin: 8em 0;
   }
   .content-left-one{
      grid-column: span 1;
   }
   .content-left-one p{
      margin: 2em 0 4em;
   }
   .content-left-two{
      grid-column: span 1;
      grid-row: 2;
   }
   .left-first, .left-second{
      display: grid;
      grid-template-columns: auto 1fr;
      grid-template-rows: auto 1fr;
   }
   .left-first img, .left-second img{
      grid-row: span 2;
      width: 25px;
      margin-right: 1em;
   }
   .left-first h3, .left-second h3{
      margin-bottom: 1em;
   }
   .left-first p, .left-second p{
      margin-bottom: 2em;
   }
   .content-faq{
      background: #fff;
      color: #161C2D;
      grid-column: 2 / span 1;
      grid-row: span 2;
      padding: 2em;
      border-radius: 1em;
      border-top: 5px solid #68D585;
      margin-left: 10em;
   }
   .content-faq i{
      font-size: 1.2em;
      transform: rotateX('180deg');
   }
   .content-faq h3{
      margin: 1em 0;
      display: flex;
      justify-content: space-between;
      cursor: pointer;
   }
   .content-faq p{
      padding-bottom: 2em;
   }
   .faq-item-1, .faq-item-2 p, .faq-item-3 p, .faq-item-4 p{
      line-height: 1.6em;
   }
   .faq-item-1 p, .faq-item-2 p, .faq-item-3 p, .faq-item-4 p{
      display: none;
   }
   .faq-item-1, .faq-item-2, .faq-item-3, .faq-item-4{
      border-bottom: 1px solid lightgrey;
   }
</style>