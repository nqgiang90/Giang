<template>
<div class="intro" id="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="intro__content">
          <h2>VBEE AI Call Center</h2>
          <p>VBEE AI Call Center là giải pháp tích hợp vào các hệ thống tổng đài. Giải pháp chủ động giải quyết khối lượng lớn cuộc gọi có kịch bản trong thời gian ngắn. Hệ thống tổng đài sẽ hoạt động năng suất hơn, hiệu quả hơn và tiết kiệm chi phí.</p>
          <a href="#" class="btn btn-normal btn-white">Đăng ký sử dụng</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="intro__video">
          <youtube :video-id="videoId" ref="youtube"></youtube>
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
      videoId: 'zfuWn6rn2Zw'
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