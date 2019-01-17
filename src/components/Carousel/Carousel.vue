<template>
  <div class="carousel" id="carousel">
    <b-container>
      <h1>Lĩnh vực sử dụng</h1>
      <el-carousel height="500px" :autoplay="false" :interval="5000">
        <el-carousel-item v-for="(item, i) in list" :key="i">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 carousel__content">
              <h3>{{item.title}}</h3>
              <p>{{item.text}}</p>

              <div class="carousel__buttons">
                <button class="btn text-uppercase btn__main btn__main__readmore">tìm hiểu thêm</button>
                <a
                  class="btn text-uppercase btn__main btn__main__hotline"
                  href="tel:0965277888"
                >HOTLINE: 0965 277 888</a>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 carousel__img">
              <img :src="item.img" :alt="item.text">
            </div>
          </div>
        </el-carousel-item>
      </el-carousel>
    </b-container>
  </div>
</template>

<script>
export default {
  name: "Carousel",
  data() {
    return {
      dialogVisible: false,
      list: [
        {
          title: "Thương mại điện tử, shop online",
          text:
            "Ngay sau khi đặt hàng trên website của Bạn, khách hàng nhận được cuộc gọi xác thực thông tin đơn hàng từ AI Call Center.",
          readMoreLink: "#",
          img: require("../../assets/carousel/e-commerce.png")
        },
        {
          title: "Công ty dịch vụ tài chính",
          text:
            "AI Call Center có thể quảng cáo dịch vụ cho hàng nghìn người trong “nháy mắt”. Hệ thống nhận diện khách hàng tiềm năng qua phím bấm và thời lượng nghe.",
          readMoreLink: "#",
          img: require("../../assets/carousel/finance.png")
        },
        {
          title: "Logistic",
          text:
            "AI Call Center tự động gọi điện thông báo lịch trình giao hàng. Khách hàng có thể tuỳ chọn xác nhận, huỷ bằng phím bấm hoặc kết nối đến tổng đài viên nếu cần thiết.",
          readMoreLink: "#",
          img: require("../../assets/carousel/logistic.png")
        },
        {
          title: "Sự kiện, booking, du lịch, ...",
          text:
            "Hàng nghìn cuộc gọi tự động quảng cáo sản phẩm giúp bạn nhận biết được khách hàng tiềm năng. Điều này giúp sàng lọc khách hàng và tăng tỷ lệ chốt sale.",
          readMoreLink: "#",
          img: require("../../assets/carousel/booking.png")
        },
        {
          title: "Bảo hiểm",
          text:
            "Khách hàng có thể tra cứu thông tin bảo hiểm và các dịch vụ mình đã đăng ký 24/7. Các thông tin này đều được trả lời hoàn toàn tự động.",
          readMoreLink: "#",
          img: require("../../assets/carousel/insurance.png")
        }
      ],
      sliderValue: 0
    };
  }
};
</script>

<style scoped lang="scss">
@import "./carousel.scss";
</style>