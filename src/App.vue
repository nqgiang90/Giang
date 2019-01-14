<template>
  <div id="app">
    <Header />
    <Intro />
    <Values />
    <Feature />
    <Carousel />
    <Partners />
    <Price />
    <Footer />
  </div>
</template>

<script>
import Header from './components/Header/Header.vue';
import Intro from './components/Intro/Intro.vue';
import Values from './components/Values/Values.vue';
import Feature from './components/Feature/Feature.vue';
import Carousel from './components/Carousel/Carousel.vue';
import Partners from './components/Partners/Partners.vue';
import Price from './components/Price/Price.vue';
import Footer from './components/Footer/Footer.vue';

export default {
  name: 'app',
  components: {
    Header,
    Intro,
    Values,
    Feature,
    Carousel,
    Partners,
    Price,
    Footer
  }
}
</script>

<style lang="scss">
@import './app.scss';
</style>
