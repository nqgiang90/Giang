<template>
  <div class="carousel" id="carousel">
    <b-container> 
      <h1>Lĩnh vực sử dụng</h1>
      <Slider
        animation="fade"
        v-model="sliderValue"
        :duration="5000"
        :speed="1000"
        :autoplay=false
        :height="'500px'"
      >
        <SliderItem
          v-for="(i, index) in list"
          :key="index"
          @click="changeIndex(index);"
          :style="i"
        >
          <b-row>
            <b-col md="7" class="carousel__content">
              <h3 class="carousel__heading text-uppercase font-weight-bold">{{i.title}}</h3>
              <p>{{i.text}}</p>
              <div class="carousel__buttons">
                <button class="btn text-uppercase btn__main btn__main__readmore">tìm hiểu thêm</button>
                <a class="btn text-uppercase btn__main btn__main__hotline" href="tel:0965277888">HOTLINE: 0965 277 888</a>
              </div>
            </b-col>
            <b-col md="5" class="carousel__img">
              <img :src="i.img" :alt="i.title"/>
            </b-col>
          </b-row>  
        </SliderItem>
      </Slider>
    </b-container>
  </div>
</template>

<script>
import { Slider, SliderItem } from "vue-easy-slider";

export default {
  name: "Carousel",
  components: {
    Slider,
    SliderItem
  },
  data() {
    return {
      list: [
        {
          title: 'Thương mại điện tử, shop online',
          text: 'Ngay sau khi đặt hàng trên website của Bạn, khách hàng nhận được cuộc gọi xác thực thông tin đơn hàng từ AI Call Center.',
          readMoreLink: '#' ,
          img: require('../../assets/carousel/e-commerce.png')
        },
        {
          title: 'Công ty dịch vụ tài chính',
          text: 'AI Call Center có thể quảng cáo dịch vụ cho hàng nghìn người trong “nháy mắt”. Hệ thống nhận diện khách hàng tiềm năng qua phím bấm và thời lượng nghe.',
          readMoreLink: '#',
          img: require('../../assets/carousel/finance.png')
        },
        {
          title: 'Logistic',
          text: 'AI Call Center tự động gọi điện thông báo lịch trình giao hàng. Khách hàng có thể tuỳ chọn xác nhận, huỷ bằng phím bấm hoặc kết nối đến tổng đài viên nếu cần thiết.',
          readMoreLink: '#',
          img: require('../../assets/carousel/logistic.png')
        },
        {
          title: 'Sự kiện, booking, du lịch, ...',
          text: 'Hàng nghìn cuộc gọi tự động quảng cáo sản phẩm giúp bạn nhận biết được khách hàng tiềm năng. Điều này giúp sàng lọc khách hàng và tăng tỷ lệ chốt sale.',
          readMoreLink: '#',
          img: require('../../assets/carousel/booking.png')
        },
        {
          title: 'Bảo hiểm',
          text: 'Khách hàng có thể tra cứu thông tin bảo hiểm và các dịch vụ mình đã đăng ký 24/7. Các thông tin này đều được trả lời hoàn toàn tự động.',
          readMoreLink: '#',
          img: require('../../assets/carousel/insurance.png')
        }
      ],
      sliderValue: 0
    };
  },
  methods: {
    changeIndex(index) {
      this.sliderValue = index;
    }
  }
};
</script>

<style scoped lang="scss">
  @import './carousel.scss';
</style>