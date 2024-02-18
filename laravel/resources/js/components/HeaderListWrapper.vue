<template>
  <ul class="tgl-list">
   <li class="ls-it-1 ls-items"><a href="#">Demos</a></li>
   <li class="ls-it-2 ls-items"><a href="#">Pages</a></li>
   <li class="ls-it-3 ls-items"><a href="#">Support</a></li>
   <li class="ls-it-4 ls-items"><a href="#">Contact</a></li>
  </ul>
</template>

<script>
export default {

}
</script>

<style>
   .tgl-list{
      min-height: 105vh;
      width: 20vw;
      background: #fafafa;
      margin-left: -15px;
      padding-top: 80px;
      margin-top: -60px;
   }
   .ls-items{
      list-style: none;
   }
   .ls-items a{
      text-decoration: none;
      color: grey;
      font-family: Roboto-Regular;
      display: block;
      padding: 10px 20px;
      font-size: 1.3em;
      transition: padding 1s ease, background 1s ease;
   }
   .ls-items a:hover{
      padding: 10px 25px;
      background: rgb(228, 228, 228);
   }
</style>