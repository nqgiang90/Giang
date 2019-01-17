<template>
<div class="intro" id="intro">
  <div class="container">
    <div class="row">
      <div class="el-col-sm-12 el-col-xs-24 left-intro">
        <div class="intro__content">
          <h2>VBEE AI Call Center</h2>
          <p>VBEE AI Call Center là giải pháp tích hợp vào các hệ thống tổng đài. Giải pháp chủ động giải quyết khối lượng lớn cuộc gọi có kịch bản trong thời gian ngắn. Hệ thống tổng đài sẽ hoạt động năng suất hơn, hiệu quả hơn và tiết kiệm chi phí.</p>
          <a href="#" class="btn btn-normal btn-white">Đăng ký sử dụng</a>
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