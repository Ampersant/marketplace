<template>
   <div class="main-wrapper-bg">
      <div class="autorisation-main-wrapper">
         <div class="log-btn-wrap" @click="autToggle(0)" ref="logBtn">
            <p class="log-btn">Log in</p>
         </div>
         <div class="reg-btn-wrap" @click="autToggle(1)" ref="regBtn">
            <p class="reg-btn">Sign up</p>
         </div>
         <div class="log-field-wrap" ref="logField">
            <div class="log-field">
               <h1>Log in</h1>
               <div class="log-form-wrapper">
                  <form action="/authenticate"  method="post">
                     <input type="hidden" name="_token" :value="csrfToken">
                     <input type="text" name="email" placeholder="Email" id="usr-name">
                     <span class="pass-field-floating">
                        <input type="password" name="password" id="pwd-name" placeholder="Password">
                        <label for="pwd-name">Show</label>
                     </span>
                     <input type="submit" value="Login!" class="sbmt-btn">
                     <div class="or-wrap"></div>
                  </form>
                  <a href="#" class="forgot-pass-link">Forgot password?</a>
                  <div class="or-wrap">
                     <div class="or-line-wrap">
                        <span class="third-party-join-line"></span>
                        <span class="third-party-join-or-span">or</span>
                     </div>
                     <div class="social-networks">
                        <a href="#" class="sc-nt-tw"><img src="../../images/mainpage-017.png" alt=""></a>
                        <a href="#" class="sc-nt-fb"><img src="../../images/mainpage-016.png" alt=""></a>
                        <a href="#" class="sc-nt-gl"><img src="../../images/mainpage-018.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="reg-field-wrap" ref="regField">
            <div class="reg-field">
               <h1>Sign up</h1>
               <div class="reg-form-wrapper">
                  <form action="/store" method="post">
                     <input type="hidden" name="_token" :value="csrfToken">
                     <!-- Email -->
                     <input type="email" name="email" id="users-eml" placeholder="Enter your E-Mail">
                     <!-- Login/Username -->
                     <input type="text" name="username" placeholder="Username" id="usr-name">
                     <!-- Password -->
                     <span class="pass-field-floating">
                        <input type="password" name="password" id="pwd-name" placeholder="Password">
                        <label for="pwd-name">Show</label>
                     </span>
                     <!-- Repeat password -->
                     <input type="password" name="rep-pwd" id="rep-pwd" placeholder="Repeat your password">
                     <!-- Permision to send smth on sharing the email adress, sending infos and so on -->
                     <div class="perm-wrapper">
                        <input type="checkbox" name="permition-to-do-smth" id="perm-chbx"><label for="perm-chbx">Yes; NNNN may use and share my email to enable personalized advertising with third parties (e.g. Google, Twitch) and to send me info about new releases, updates, events, or other content.</label>
                     </div>
                     <input type="submit" value="Explore!" class="sbmt-btn">
                     <div class="or-wrap"></div>
                  </form>
                  <a href="#" class="forgot-pass-link">Forgot password?</a>
                  <div class="or-wrap">
                     <div class="or-line-wrap">
                        <span class="third-party-join-line"></span>
                        <span class="third-party-join-or-span">or</span>
                     </div>
                     <div class="social-networks">
                        <a href="#" class="sc-nt-tw"><img src="../../images/mainpage-017.png" alt="tw-icon"></a>
                        <a href="#" class="sc-nt-fb"><img src="../../images/mainpage-016.png" alt="fb-icon"></a>
                        <a href="#" class="sc-nt-gl"><img src="../../images/mainpage-018.png" alt="gl-icon"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
import { ref } from 'vue';

export default {
   props: ['sendLogin', 'storeRegistr', 'csrftoken'],
   data() {
      return {
         csrfToken: this.csrftoken,
         sendLogin: this.sendLogin,
         storeRegistr: this.storeRegistr,
      }
   },
   methods: {
      autToggle(ix){
         let logBtn = this.$refs.logBtn
         let regBtn = this.$refs.regBtn
         let logField = this.$refs.logField
         let regField = this.$refs.regField
         if(ix == 0){
            logBtn.style.background = '#ffffff30'
            logField.style.display = 'block'
            regField.style.display = 'none'
            regBtn.style.background = '#ffffff10'
            logBtn.style.cursor = 'default'
            regBtn.style.cursor = 'pointer'
         }
         else if(ix == 1){
            regBtn.style.background = '#ffffff30'
            regField.style.display = 'block'
            logField.style.display = 'none'
            logBtn.style.background = '#ffffff10'
            regBtn.style.cursor = 'default'
            logBtn.style.cursor = 'pointer'
         }
      }
   }
}
</script>

<style>
   .main-wrapper-bg{
      margin:0;
      padding:0;
      background: #2980b9 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
      -webkit-animation: 10s linear 0s normal none infinite animate;
      -moz-animation: 10s linear 0s normal none infinite animate;
      -ms-animation: 10s linear 0s normal none infinite animate;
      -o-animation: 10s linear 0s normal none infinite animate;
      animation: 10s linear 0s normal none infinite animate;
      min-height: 100vh;
      font-family: Roboto-Regular;
      font-weight: bold;
      overflow: hidden;
}

.autorisation-main-wrapper{
   display: grid;
   grid-template-columns: repeat(11, 1fr);
   grid-template-rows: repeat(2, 1fr);
   min-height: 100vh;
   padding: 50px 0;
}

.log-btn-wrap{
   color: #fff;
   font-size: 2.5vw;
   display: flex;
   align-items: center;
   justify-content: 	center;
   transition: background .4s ease;
   cursor: pointer;
   grid-column: 2 / span 3;
   border-top-left-radius: 1.5vw;
   background: #ffffff30;
   border-bottom: 2px solid #b2b4d757;
}

.reg-btn-wrap{
   color: #fff;
   font-size: 2.5vw;
   display: flex;
   align-items: center;
   justify-content: 	center;
   transition: background .4s ease;
   cursor: pointer;
   grid-column: 2 / span 3;
   grid-row: 2;
   border-bottom-left-radius: 1.5vw;
   background: #ffffff10;
   border-top: 2px solid #b2b4d757;
}

.reg-field-wrap{
   grid-column: span 6;
   grid-row: span 2;
   display: none;
}

.log-field-wrap{
   grid-column: span 6;
   grid-row: span 2;
   
}

.log-field, .reg-field{
   background: #fff;
   min-height: 100%;
   border-top-right-radius: 1.5vw;
   border-bottom-right-radius: 1.5vw;
   padding: 2vw;
   color: #161C2D;
   text-align: center;
   display: flex;
   flex-direction: column;
   justify-content: center;
}

.log-field #pwd-name, .log-field #usr-name, .reg-field #pwd-name, .reg-field #users-eml, .reg-field #rep-pwd, .reg-field #usr-name{
   padding: 10px 20px 10px 5px;
   width: 25vw;
   border-radius: .3em;
   color: #161C2D;
   border: 1px solid #161C2D50;
}

.log-field .sbmt-btn, .reg-field .sbmt-btn{
   padding: 10px 0;
   font-size: 1.2em;
   background: #161C2D;
   width: 25vw;
   border-radius: .8em;
   color: #fff;
   cursor: pointer;
}

.log-field form, .reg-field form{
   display: flex;
   flex-direction: column;
   align-items: center;
}

.log-field form .pass-field-floating, .reg-field form .pass-field-floating{
   position: relative;
}
.log-field form .pass-field-floating label, .reg-field form .pass-field-floating label{
   position: absolute;
   top: 19px;
   right: 10px;
   cursor: pointer;
}

.log-field form input, .reg-field form input{
   margin: 10px 0;
}

.log-field h1, .reg-field h1{
   margin-bottom: 1em;
}

.log-field .forgot-pass-link, .reg-field .forgot-pass-link{
   text-decoration: none;
   font-size: 1.1em;
   display: block;
   margin: 10px 0;
}

.or-line-wrap{
   display: flex;
   justify-content: center;
   margin: 25px;
   position: relative;
}

.or-line-wrap .third-party-join-line{
   border: 1px solid darkgray;
   height: 1px;
   width: 350px;
}

.or-line-wrap .third-party-join-or-span{
   background: #fff;
   position: absolute;
   padding: 10px;
   top: -20px;
}

.or-wrap .social-networks a img{
   width: 30px;
   margin: 0 10px;
}

.reg-field-wrap .reg-field .perm-wrapper{
   width: 40vw;
}

.reg-field-wrap .reg-field .perm-wrapper input{
   margin: 5px;
}

@-webkit-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-moz-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-ms-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-o-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
</style>