<template>
<div class="price" id="price">
  <div class="container">
    <h1>Báo giá</h1>
    <div class="row box-content-price">
      <div class="box-content el-col-lg-4 el-col-md-7 el-col-sm-7  el-col-xs-24" v-for="(item, i) in items" :key="i">
        <div class="price__col">
          <img :src="item.img" :alt="item.title" class="img-fluid d-block mx-auto"/>
          <h3 class="text-center">{{item.title}}</h3>
          <ul>
            <li class="price__col__price"><p>{{item.price}}</p>
              <p>{{item.extent_pr}}</p>
            </li>
            <li class="price__col__maxCall price__col__has__bottomLine"><p>{{item.max_call}}</p></li>
            <li class="price__col__setupCost price__col__has__bottomLine"><p>{{item.setup_cost}}</p></li>
            <li class="price__col__paySix price__col__has__bottomLine"><p>{{item.pay_six}} <br> <span>khi trả trước 6 tháng</span></p></li>
            <li class="price__col__payTwelve"><p>{{item.pay_twelve}} <br> <span>khi trả trước 12 tháng</span></p></li>
          </ul>
        </div>
        <div class="button-center">
          <a :href="item.link_buy" class="btn text-uppercase btn__buy btn__buy--orange">mua ngay</a>
        </div>
      </div>
    </div>

  </div>
  <div class="btn-register-trial">
    <!--<button class="btn text-uppercase btn__main btn__main__register ">Đăng ký dùng thử</button>-->
    <router-link to="register" :class="['btn', 'text-uppercase', 'btn__main', 'btn__main__register']">Đăng ký dùng thử</router-link>
    <a class="btn text-uppercase btn__main btn__main__hotline1 " href="tel:0965277888">HOTLINE: 0965 277 888</a>
  </div>
</div>
</template>

<script>
import micro_img from '../../assets/price/micro.png';
import basic_img from '../../assets/price/basic.png';
import advance_img from '../../assets/price/advance.png';
import plus_img from '../../assets/price/plus.png';
import premium_img from '../../assets/price/premium.png';

export default {
  data() {
    return {
      items: [
        {
          img: micro_img,
          title: 'GÓI Micro',
          price: '650.000 VNĐ/ tháng',
            extent_pr:'phí duy trì',
          max_call: 'Tối đa 1.000 cuộc gọi/tháng',
          setup_cost: 'Phí cài đặt 1 lần: 500.000 VNĐ',
          pay_six: 'Miễn phí cài đặt + khuyến mãi thêm 1 tháng',
          pay_twelve: 'Miễn phí cài đặt + khuyến mãi thêm 2 tháng',
          link_buy: 'https://cp.aicallcenter.vn/'
        },
        {
          img: basic_img,
          title: 'GÓI Basic',
          price: '3.100.000 VNĐ/ tháng',
            extent_pr:'phí duy trì',
          max_call: 'Tối đa 5.000 cuộc gọi/tháng ',
          setup_cost: 'Phí cài đặt 1 lần: 500.000 VNĐ',
          pay_six: 'Miễn phí cài đặt + khuyến mãi thêm 1 tháng',
          pay_twelve: 'Miễn phí cài đặt + khuyến mãi thêm 2 tháng',
          link_buy: 'https://cp.aicallcenter.vn/'
        },
        {
          img: plus_img,
          title: 'GÓI plus',
          price: '5.900.000 VNĐ/ tháng ',
            extent_pr:'phí duy trì',
          max_call: 'Tối đa 10.000 cuộc gọi/tháng',
          setup_cost: 'Phí cài đặt 1 lần: 500.000 VNĐ',
          pay_six: 'Miễn phí cài đặt + khuyến mãi thêm 1 tháng',
          pay_twelve: 'Miễn phí cài đặt + khuyến mãi thêm 2 tháng',
          link_buy: 'https://cp.aicallcenter.vn/'
        },
        {
          img: advance_img,
          title: 'GÓI advance',
          price: '11.200.000 VNĐ/ tháng ',
            extent_pr:'phí duy trì',
          max_call: 'Tối đa 20.000 cuộc gọi/tháng',
          setup_cost: 'Phí cài đặt 1 lần: 500.000 VNĐ',
          pay_six: 'Miễn phí cài đặt + khuyến mãi thêm 1 tháng',
          pay_twelve: 'Miễn phí cài đặt + khuyến mãi thêm 2 tháng',
          link_buy: 'https://cp.aicallcenter.vn/'
        },
        {
          img: premium_img,
          title: 'GÓI premium',
          price: 'Giá liên hệ',
            extent_pr:'',
          max_call: 'Tối đa > 20.000 cuộc gọi',
          setup_cost: 'Phí cài đặt 1 lần: 500.000 VNĐ',
          pay_six: 'Miễn phí cài đặt + khuyến mãi thêm 1 tháng',
          pay_twelve: 'Miễn phí cài đặt + khuyến mãi thêm 2 tháng',
          link_buy: 'https://cp.aicallcenter.vn/'
        }
      ]
    }
  },
  name: "Price"
};
</script>

<style scoped lang="scss">
@import "./price.scss";
</style>
