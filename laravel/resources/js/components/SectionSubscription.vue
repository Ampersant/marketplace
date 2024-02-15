<template>
  <div class="subscription-wrapper">
      <h1>Get latest updates</h1>
      <p class="some-text">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
      <input type="email" name="email" id="" class="email-form" placeholder="Enter your email">
      <input type="submit" class="subs-btn search-btn" value="Subscribe">
      <p class="privacy-warning">We&apos;ll never share your details with third parties. <br> View our Privacy Policy for more info.</p>
  </div>
</template>

<script>
export default {

}
</script>

<style>
   .subscription-wrapper{
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      color: #161C2D;
      text-align: center;
      margin-bottom: 10em;
   }
   .subscription-wrapper .some-text{
      line-height: 1.5em;
      margin: 1em auto;
      width: 80%;
      font-family: Roboto-Light;
   }
   .subscription-wrapper .email-form{
      padding: 15px;
      border-radius: .5em;
      margin: 3em auto 0 auto;
      width: 60%;
      outline: none;
      border: 1px solid lightgrey;
   }
   .subscription-wrapper .subs-btn{
      margin: 1em auto;
      width: 60%;
      padding: 15px;
   }
   .subscription-wrapper h1{
      margin-top: 4em;
   }
   .subscription-wrapper .privacy-warning{
      font-family: Roboto-Light;
      line-height: 1.8em;
      font-size: .8em;
   }
   .subscription-wrapper h1, .subscription-wrapper .some-text, .subscription-wrapper .email-form, .subscription-wrapper .subs-btn, .subscription-wrapper .privacy-warning{
      grid-column: 5 / span 4;
   }
</style>