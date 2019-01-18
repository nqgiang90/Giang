<template>
  <div class="header">
    <div class="container">
      <b-navbar toggleable="md" :fixed="'top'">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <router-link to="/" class="navbar-brand"><img src="../../assets/logo.png" alt="AI Call logo"><span>VBEE</span> AI Call Center</router-link>
        <!-- <b-navbar-brand href="/">
          <img src="../../assets/logo.png" alt="AI Call logo">
          <span>AI</span> Call Center
        </b-navbar-brand> -->

        <b-collapse is-nav id="nav_collapse">
          <b-navbar-nav class="mx-auto"> 
            <b-nav-item v-scroll-to="'#values'">Giá trị</b-nav-item>
            <b-nav-item v-scroll-to="'#feature'">Tính năng</b-nav-item>
            <b-nav-item v-scroll-to="'#carousel'">Lĩnh vực</b-nav-item>
            <b-nav-item v-scroll-to="'#partners'">Đối tác</b-nav-item>
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
            <!-- <Slide width="100">
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
            </Slide> -->
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
  }
};
</script>

<style scoped lang="scss">
@import "./header.scss";
@import "./header_responsive.scss";
</style>