<template>
<div class="intro" id="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="intro__content">
          <h2>AI Call Center</h2>
          <p>AI Call Center là tổng đài thông minh, giúp Bạn giải quyết khối lượng lớn cuộc gọi có kịch bản trong thời gian ngắn. Hệ thống tổng đài của Bạn sẽ hoạt động hiệu quả hơn và tiết kiệm chi phí.
          </p>
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