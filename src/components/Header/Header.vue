<template>
  <div class="header">
    <div class="container">
      <b-navbar toggleable="md" :fixed="'top'">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-navbar-brand href="#" v-scroll-to="'#intro'">
          <img src="../../assets/logo.png" alt="AI Call logo">
          <span>AI</span> Call Center
        </b-navbar-brand>

        <b-collapse is-nav id="nav_collapse">
          <b-navbar-nav class="mx-auto">
            <b-nav-item v-scroll-to="'#values'">Giá trị</b-nav-item>
            <b-nav-item v-scroll-to="'#feature'">Tính năng</b-nav-item>
            <b-nav-item v-scroll-to="'#carousel'">Lĩnh vực</b-nav-item>
            <b-nav-item v-scroll-to="'#partners'">Case study</b-nav-item>
            <b-nav-item v-scroll-to="'#price'">Báo giá</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto navbar__useraction">
            <a href="#">Đăng nhập</a>
            <b-button class="btn__main">Đăng ký</b-button>
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