<template>
   <div class="fc-wrapper">
      <div class="sl-location">
         <label for="cars1"><img src="../../images/mainpage-003.png" alt="img1" class="loc-im"></label>
            <select name="cars" id="cars1" class="location-form">
               <option value="df-option">Select Location</option>
               <option value="deutschland">Deutschland</option>
               <option value="osterreich">Österreich</option>
               <option value="schweiz">Schweiz</option>
               <option value="uk">UK</option>
            </select>
      </div>
      <div class="sl-date">
         <label for="cars2"><img src="../../images/mainpage-004.png" alt="img2" class="dat-im"></label>
            <input type="date" value="Select Date" name="cars" id="cars2" class="date-form">
      </div>
      <input type="submit" class="search-btn" value="Search">
   </div>
</template>

<script>
export default {

}
</script>

<style>
   .fc-wrapper{
      background: #fff;
      color: #000;
      font-family: Roboto-Regular;
      display: grid;
      grid-template-columns: repeat(3, 200px);
      padding: 30px;
      margin-top: 40px;
      justify-content: center;
      column-gap: 10px;
      border-radius: .5rem;
   }
   .sl-location .location-form, .sl-date .date-form{
      padding: 10px 30px;
      color: #000;
      border-top: 1px solid lightgray;
      border-bottom: 1px solid lightgray;
      border-right: 1px solid lightgray;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
      appearance: none;
      height: 40px;
      width: calc(100% - 40px);
      font-family: Roboto-Regular;
   }
   .sl-location, .sl-date{
      display: flex;
   }
   .sl-location, .sl-date, .search-btn{
      border-radius: 0.25rem;
   }
   .sl-location label .loc-im, .sl-date label .dat-im{
      height: 40px;
      width: 40px;
   }
   .sl-location label, .sl-date label{
      display: inline-block;
      height: 40px;
      width: 40px;
      border-top: 1px solid lightgray;
      border-bottom: 1px solid lightgray;
      border-left: 1px solid lightgray;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
   }
   .search-btn{
      padding: 10px 20px;
      background: #473BF0;
      cursor: pointer;
      font-family: Roboto-Regular;
      color: #fff;
   }
</style>