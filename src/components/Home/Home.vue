<template>
    <div class="home--page">
        <Intro />
        <Values />
        <Feature />
        <Carousel />
        <Partners />
         <Price />
        <!-- <Footer />  -->
    </div>
</template>
<script>
import Intro from '../Intro/Intro.vue';
import Values from '../Values/Values.vue';
import Feature from '../Feature/Feature.vue';
import Carousel from '../Carousel/Carousel.vue';
import Partners from '../Partners/Partners.vue';
import Price from '../Price/Price.vue';

export default {
    name: "home",
    components: {
        Intro,
        Values,
        Feature,
        Carousel,
        Partners,
        Price,
        // Footer
    }
}
</script>
