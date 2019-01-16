<template>
  <div class="header">
    <div class="container">
      <b-navbar toggleable="md" :fixed="'top'">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <router-link to="/" class="navbar-brand"><img src="../../assets/logo.png" alt="AI Call logo"><span>AI</span> Call Center</router-link>
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
  </div>
  <!-- navbar-1.vue -->
</template>

<script>
export default {
  name: "Header"
};
</script>

<style scoped lang="scss">
@import "./header.scss";
</style>