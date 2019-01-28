<template>
  <div class="carousel" id="carousel">
  <div class="container">
  <h1>Lĩnh vực sử dụng</h1>
  <swiper ref="mySwiper" :options="swiperOption">
    <swiper-slide v-for="(item, i) in list" :key="i">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-6 carousel__text">
          <h3>{{item.title}}</h3>
          <p>{{item.text}}</p>

          <div class="carousel__buttons">
            <router-link to="/register" :class="['btn', 'text-uppercase', 'btn__main', 'btn__main__readmore']">tìm hiểu thêm</router-link>
            <a
              class="btn text-uppercase btn__main btn__main__hotline"
              href="tel:0965277888"
            >HOTLINE: 0965 277 888</a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-6 carousel__image">
          <img :src="item.img" :alt="item.text">
        </div>
      </div>
    </swiper-slide>
    <div class="swiper-pagination" slot="pagination"></div>
    <div class="swiper-button-prev" slot="button-prev"></div>
    <div class="swiper-button-next" slot="button-next"></div>
  </swiper>
    </div>
  </div>
</template>

<script>
export default {
  name: "Carousel",
  data() {
    return {
      dialogVisible: false,
        swiperOption: {
            // watchOverflow:true,
            grabCursor:true,
            loop:true,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                watchOverflow:true,
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
            },
      list: [
        {
          title: "Thương mại điện tử, shop online",
          text:
            "Ngay sau khi đặt hàng trên website của Bạn, khách hàng nhận được cuộc gọi xác thực thông tin đơn hàng từ AI Call Center.",
          readMoreLink: "#",
          img: require("../../assets/carousel/e-commerce.svg")
        },
        {
          title: "Công ty dịch vụ tài chính",
          text:
            "AI Call Center có thể quảng cáo dịch vụ cho hàng nghìn người trong “nháy mắt”. Hệ thống nhận diện khách hàng tiềm năng qua phím bấm và thời lượng nghe.",
          readMoreLink: "#",
          img: require("../../assets/carousel/finance.svg")
        },
        {
          title: "Giao vận",
          text:
            "AI Call Center tự động gọi điện thông báo lịch trình giao hàng. Khách hàng có thể tuỳ chọn xác nhận, huỷ bằng phím bấm hoặc kết nối đến tổng đài viên nếu cần thiết.",
          readMoreLink: "#",
          img: require("../../assets/carousel/logistic.svg")
        },
        {
          title: "Sự kiện, booking, du lịch, ...",
          text:
            "Hàng nghìn cuộc gọi tự động quảng cáo sản phẩm giúp bạn nhận biết được khách hàng tiềm năng. Điều này giúp sàng lọc khách hàng và tăng tỷ lệ chốt sale.",
          readMoreLink: "#",
          img: require("../../assets/carousel/booking.svg")
        },
        {
          title: "Bảo hiểm",
          text:
            "Khách hàng có thể tra cứu thông tin bảo hiểm và các dịch vụ mình đã đăng ký 24/7. Các thông tin này đều được trả lời hoàn toàn tự động.",
          readMoreLink: "#",
          img: require("../../assets/carousel/insurance.svg")
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