<template>
<div class="intro" id="intro">
  <div class="container">
    <div class="row">
      <div class="el-col-sm-12 el-col-xs-24 left-intro">
        <div class="intro__content">
          <h2>VBEE AI Call Center</h2>
          <p>Vbee AI Call Center là giải pháp gọi ra ngoài tự động (outbound, voice broadcasting) dựa trên giọng nói trí tuệ nhân tạo Vbee), dễ dàng tích hợp vào các hệ thống tổng đài. Cho phép khách hàng tự  tạo chiến dịch gọi tự động theo kịch bản nhanh chóng, khác xa với các giải pháp thủ công trước đây.</p>
          <router-link to="/register" :class="['btn', 'btn-normal', 'btn-white']">Đăng ký sử dụng</router-link>
        </div>
      </div>
      <div class="el-col-sm-12 el-col-xs-24 right-intro">
        <div class="intro_video">
          <youtube :video-id="videoId" ref="youtube" style="width: 100%"></youtube>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      videoId: 'wCO-ZpoPyhw'
    }
  },
  computed: {
    player() {
      return this.$refs.youtube.player
    }
  },
  name: "Intro"
};
</script>

<style scoped lang="scss">
@import "./intro.scss";
</style>