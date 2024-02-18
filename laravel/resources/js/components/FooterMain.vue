<template>
  <div class="footer-main-wrapper">
      <div class="footer-company">
         <ul class="company-group">
            <li class="group-item"><a href="#">Company</a></li>
            <li class="group-item"><a href="#">About us</a></li>
            <li class="group-item"><a href="#">Contact us</a></li>
            <li class="group-item"><a href="#">Careers</a></li>
            <li class="group-item"><a href="#">Press</a></li>
         </ul>
      </div>
      <div class="footer-product">
         <ul class="product-group">
            <li class="group-item"><a href="#">Product</a></li>
            <li class="group-item"><a href="#">Features</a></li>
            <li class="group-item"><a href="#">Pricing</a></li>
            <li class="group-item"><a href="#">News</a></li>
            <li class="group-item"><a href="#">Help desk</a></li>
            <li class="group-item"><a href="#">Support</a></li>
         </ul>
      </div>
      <div class="footer-services">
         <ul class="services-group">
            <li class="group-item"><a href="#">Services</a></li>
            <li class="group-item"><a href="#">Digital Marketing</a></li>
            <li class="group-item"><a href="#">Content Writing</a></li>
            <li class="group-item"><a href="#">SEO for Business</a></li>
            <li class="group-item"><a href="#">UI Design</a></li>
         </ul>
      </div>
      <div class="footer-legal">
         <ul class="legal-group">
            <li class="group-item"><a href="#">Legal</a></li>
            <li class="group-item"><a href="#">Privacy Policy</a></li>
            <li class="group-item"><a href="#">Terms & Conditions</a></li>
            <li class="group-item"><a href="#">Return Policy</a></li>
         </ul>
      </div>
      <div class="footer-contact">
         <ul class="contact-group">
            <li class="group-item"><a href="#">Contact us</a></li>
            <li class="group-item"><a href="#">support@brainwave.io</a></li>
            <li class="group-item"><a href="#">+133-394-3439-1435</a></li>
         </ul>
      </div>
   </div>
</template>

<script>
export default {

}
</script>

<style>
   .footer-main-wrapper{
      display: flex;
      justify-content: space-between;
      color: #161C2D;
      margin: 5em 0;
   }
   .footer-main-wrapper li{
      list-style: none;
   }
   .footer-main-wrapper a{
      text-decoration: none;
      color: #161C2D;
      font-family: Roboto-Light;
      display: block;
      line-height: 2em;
   }
   .footer-main-wrapper ul li:nth-child(1) a{
      display: block;
      line-height: 3.5em;
      opacity: .8;
   }
   .footer-contact ul li:not(:nth-child(1)) a{
      color: blue;
      cursor: pointer;
   }
</style>