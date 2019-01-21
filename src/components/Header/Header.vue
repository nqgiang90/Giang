<template>
  <div class="header">
    <div class="container">
      <b-navbar toggleable="md" :fixed="'top'">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <router-link to="/" class="navbar-brand"><img src="../../assets/logo.svg" alt="AI Call logo"><span>VBEE</span> AI Call Center</router-link>

        <b-collapse is-nav id="nav_collapse">
          <b-navbar-nav class="mx-auto"> 
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <router-link to="/#values" v-scroll-to="'#values'" :class="['nav-link']">Giá trị</router-link>
              </li>
              <li class="nav-item">
               <router-link to="/#feature" v-scroll-to="'#feature'" :class="['nav-link']">Tính năng</router-link>
              </li>
              <li class="nav-item">
               <router-link to="/#carousel" v-scroll-to="'#carousel'" :class="['nav-link']">Lĩnh vực</router-link>
              </li>
              <li class="nav-item">
               <router-link to="/#partners" v-scroll-to="'#partners'" :class="['nav-link']">Đối tác</router-link>
              </li>
            </ul>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto navbar__useraction">    
            <router-link to="register">Đăng ký</router-link>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
     <Slide width="130" noOverlay>
      <a id="giatri" v-scroll-to="'#values'">
        <span>Giá trị</span>
      </a>
      <a id="tinhnang" v-scroll-to="'#feature'">
        <span>Tính năng</span>
      </a>
      <a id="lihvuc" v-scroll-to="'#carousel'">
        <span>Lĩnh vực</span>
      </a>
      <a id="doitac" v-scroll-to="'#partners'">
        <span>Đối tác</span>
      </a>
    </Slide>
    <div class="mobile_navbar">
        <div class="row">
          <div class="col">
            <Slide width="100">
              <a id="giatri" v-scroll-to="'#values'">
                <span>Giá trị</span>
              </a>
              <a id="tinhnang" v-scroll-to="'#feature'">
                <span>Tính năng</span>
              </a>
              <a id="lihvuc" v-scroll-to="'#carousel'">
                <span>Lĩnh vực</span>
              </a>
              <a id="doitac" v-scroll-to="'#partners'">
                <span>Đối tác</span>
              </a>
            </Slide>
          </div>
          <div class="col">   
              <router-link to="/" class="navbar-brand mx-auto"><img src="../../assets/logo.png" alt="AI Call logo"></router-link>
          </div>

          <div class="col">
            <div class="navbar__useraction">
            <router-link to="register">Đăng ký</router-link>
            </div>
          </div>
        </div>
        
    </div>
  </div>
  <!-- navbar-1.vue -->

</template>

<script>
import { Slide } from 'vue-burger-menu';
export default {
  name: "Header",
  components: {
    Slide
  },
  data() {
    return {
      routePath : this.$route.path
    }
  }

};
</script>

<style scoped lang="scss">
@import "./header.scss";
@import "./header_responsive.scss";
</style>