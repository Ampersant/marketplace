<template>
  <div class="header-item">
    <div class="list-button">
      <div ref="listButtonWrapper" class="list-button-wrapper">
        <div @click="listButtonWrap" class="list-button-wrap">
          <div ref="ln1" class="ln-1 ln-it"></div>
          <div ref="ln2" class="ln-2 ln-it"></div>
          <div ref="ln3" class="ln-3 ln-it"></div>
        </div>
      </div>
      <div ref="listWrapper" class="list-wrapper">
        <HeaderListWrapper />
      </div>
    </div>
    <div class="logo-wrapper">
      <p class="text-logo">Пузата хата</p>
    </div>
    <div class="autorisation-wrapper">
      <a href="/login" class="autorisation-button"> Go Ahead!</a>
    </div>
  </div>
  <div class="header-content"><HeaderContent /></div>
</template>

<script>
import HeaderContent from './HeaderContent.vue'
import HeaderListWrapper from './HeaderListWrapper.vue'

export default {
  name: 'Header',
  components: { HeaderContent, HeaderListWrapper },
  data(){
    return{
      counter_001: 0,
    }
  },
  methods: {
    listButtonWrap(){
      if(this.counter_001 == 0){
        this.$refs.listWrapper.style.transform = 'translateX(0px)'
        this.$refs.ln1.style.background = 'grey'
        this.$refs.ln2.style.opacity = '0'
        this.$refs.ln3.style.background = 'grey'
        this.$refs.ln1.style.transform = 'rotate(405deg) translateY(13px)'
        this.$refs.ln3.style.transform = 'rotate(-405deg) translateY(-13px)'
        this.$refs.listWrapper.style.transition = 'transform .5s cubic-bezier(0,1,1,1)'
        this.counter_001++
      }
      else if(this.counter_001 == 1){
        this.$refs.listWrapper.style.transform = 'translateX(-2000px)'
        this.$refs.ln1.style.background = 'white'
        this.$refs.ln2.style.opacity = '1'
        this.$refs.ln3.style.background = 'white'
        this.$refs.ln1.style.transform = 'rotate(0) translateY(0)'
        this.$refs.ln3.style.transform = 'rotate(0) translateY(0)'
        this.$refs.listWrapper.style.transition = 'transform .6s cubic-bezier(1,1,1,0)'
        this.counter_001--
      }
      else{
        alert('loh')
      }
    }
  }
}
</script>

<style scoped>
  .header-item{
    padding: 15px;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
  }
  .list-button{
    grid-column: span 4;
    position: relative;
  }
  .logo-wrapper{
    grid-column: span 4;
    text-align: center;
  }
  .autorisation-wrapper{
    grid-column: span 4;
    text-align: end;
    padding-right: 30px;
  }
  .list-button-wrap{
    display: block;
    width: 100px;
    height: 40px;
    cursor: pointer;
    padding: 7.5px 7.5px 7.5px 22.5px;
  }
  .ln-it{
    height: 5px;
    width: 40px;
    background: #fff;
    border-radius: 1rem;
    margin: 4px;
  }
  .text-logo{
    font-family: Roboto-Regular;
    font-size: 1.8em;
    color: #fff;
  }
  .autorisation-button{
    display: inline-block;
    font-family: Roboto-Regular;
    font-size: 1.4em;
    color: #fff;
    padding: 5px 15px;
    border: 3px solid #fafafa;
    /*border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
    border-image-repeat: round;
    border-image-slice: 1;*/
    border-radius: 10px;  
    cursor: pointer;
    text-decoration: none;
  }
  .list-button-wrapper{
    width: 20vw;
    margin-left: -15px;
    margin-top: -15px;
    padding-top: 15px;
    position: relative;
    z-index: 2;
  }
  .list-wrapper{
    transform: translateX(-2000px);
    /*transition: transform 1s cubic-bezier(0,1.13,1,.99);*/
    position: absolute;
  }
  .ln-1, .ln-3{
    transition: 1s ease;
  }
</style>