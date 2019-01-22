<template>
  <div class="header">
    <b-navbar toggleable="lg" fixed="top" :class='["header__navbar"]'>
      <b-container>
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <router-link to="/" class="navbar-brand"><img src="../../assets/logo.svg" alt="AI Call logo"><span>VBEE</span> AI Call Center</router-link>

        <b-collapse is-nav id="nav_collapse">

          <b-navbar-nav class="mx-auto">
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
          </b-navbar-nav>

          <b-nav-form right :class="['navbar__form', 'justify-content-center']">
            <a href="https://cp.aicallcenter.vn/">Đăng nhập</a>
            <router-link to="register" :class="['btn', 'navbar__form__btn__register', 'nav-link']">Đăng ký</router-link>
          </b-nav-form>

        </b-collapse>
      </b-container>
    </b-navbar>
  </div>
  <!-- navbar-1.vue -->
</template>

<script>
export default {
  name: "Header",
  components: {
    
  }
};
</script>

<style scoped lang="scss">
@import "./header.scss";
</style>