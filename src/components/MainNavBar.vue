<template>
  <div class="mainNavBar">
    <b-navbar toggleable="md" type="dark" variant="info">
      <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

      <b-collapse is-nav id="nav_collapse">

        <b-navbar-nav class="mr-auto navbar-links">
          <b-nav-item href="#">Gía trị</b-nav-item>
          <b-nav-item href="#">Tính năng</b-nav-item>
          <b-nav-item href="#">Lĩnh vực</b-nav-item>
          <b-nav-item href="#">Case study</b-nav-item>
          <b-nav-item href="#">Báo giá</b-nav-item>
          <b-nav-item href="#">HDSD</b-nav-item>
          <b-nav-item href="#">Blog</b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {
  name: 'MainNavBar'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.mainNavBar {
  .bg-info {
    background-color: #fff !important;
  }

  .navbar {
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-links {
    li.nav-item {
      padding-left: 12px;
      padding-right: 12px;
      &:last-child {
        margin-right: 0;
      }

      a {
        @extend .font-roboto;
        @include fontSize(18px);
        padding-top: 30px;
        padding-bottom: 28px;
        color: #040404;
      }

      &:hover {
        background-color: #ffdcb0;
        border-bottom: 2px solid #040404;

        a {
          color: #040404;
        }
      }
    }
  }
}

</style>
