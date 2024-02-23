<template>
  
  <div class="section-facts"><SectionFacts /></div>
  <div class="section-locations"><SectionLocations /></div>
  <div class="section-content-1"><SectionContent1 /></div>
  <div class="section-features"><SectionFeatures /></div>
  <div class="section-content-2"><SectionContent2 /></div>
  <div class="section-subscription"><SectionSubscription /></div>
</template>

<script>
import SectionFacts from './SectionFacts.vue';
import SectionLocations from './SectionLocations.vue';
import SectionContent1 from './SectionContent1.vue';
import SectionFeatures from './SectionFeatures.vue';
import SectionContent2 from './SectionContent2.vue';
import SectionSubscription from './SectionSubscription.vue';

export default {
   name: 'Section',
   components: {
      SectionFacts,
      SectionLocations,
      SectionContent1,
      SectionFeatures,
      SectionContent2,
      SectionSubscription
   }
}
</script>

<style>

</style>