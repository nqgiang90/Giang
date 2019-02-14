<template>
  <div class="footer">
    <div class="box-info-footer container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <h3>Tính năng</h3>
          <p>Xây dựng chiến dịch tự động</p>
          <p>Kịch bản đa lớp & cá nhân hóa</p>
          <p>Giọng nói trí tuệ nhân tạo sinh ra từ văn bản</p>
          <p>Báo cáo thống kê, phân tích chi tiết thời gian thực</p>
          <p>Xử lý số liệu</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h3>Lĩnh vực sử dụng</h3>
          <div class="row">
            <div class="col-md-6">
              <p>Thương mại điện tử, shop online</p>
              <p>Công ty dịch vụ tài chính</p>
              <p>Logistic</p>
              <p>Kinh doanh bất động sản</p>
              <p>Bảo hiểm</p>
            </div>
            <div class="col-md-6 col-sm-12">
              <p>Sức khỏe, y tế</p>
              <p>Sự kiện, booking, du lịch</p>
              <p>Nhà hàng ẩm thực</p>
              <p>Dịch vụ tiện ích, truyền hình giải trí</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 col-12">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-6 box-case-study" style="padding: 0;">
              <h3>CASE STUDY</h3>
              <p>Shopee</p>
              <p>Haravan</p>
              <p>Ford Việt Nam</p>
              <p>VGS Media</p>
            </div>
            <div class="col-lg-4 col-md-6 col-6 box-more-info" style="padding: 0">
              <h3>Báo giá</h3>
              <h3>blog</h3>
              <h3>liên hệ</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box_call">
      <a href="tel:0965277888">
        <img src="../../assets/footer/call_btn.png" alt=""/>
      </a>
    </div>
    <div class="container">
      <div class="footer-bottom">
        <ul class="nav justify-content-end footer-bottom__navbar">
            <b-nav-item v-scroll-to="'#values'">Giá trị</b-nav-item>
            <b-nav-item v-scroll-to="'#feature'">Tính năng</b-nav-item>
            <b-nav-item v-scroll-to="'#carousel'">Lĩnh vực</b-nav-item>
            <b-nav-item v-scroll-to="'#partners'">Đối tác</b-nav-item>
        </ul>
        <ul class="nav justify-content-end footer-bottom__social__nav">
          <li class="nav-item" v-for="(item, i) in navSocialLinks" :key="i">
            <a class="nav-link" :href="item.url">
              {{item.text}}
            </a>
          </li>
        </ul>
        <img class="footer__logo" src="../../assets/footer/footer-logo.svg" alt="footer logo"/>
      </div>
    </div>
  </div>
</template>

<script>
import f from '../../assets/footer/f.png';
import w from '../../assets/footer/w.png';
import ins from '../../assets/footer/in.png';
import be from '../../assets/footer/be.png';
import y from '../../assets/footer/y.png';
export default {
  data() {
    return {
      footerNavBar: [
        {
          text: 'Giá trị',
          url: '#values'
        },
        {
          text: 'Tính năng',
          url: '#features'
        },
        {
          text: 'Lĩnh vực',
          url: '#carousel'
        },
        {
          text: 'Đối tác',
          url: '#partners'
        }
      ],
      navTopItems: [
        {
          text: "Hỗ trợ",
          url: "#"
        },
        {
          text: "Tình trạng API",
          url: "#"
        },
        {
          text: "0965 277 888",
          url: "tel:0965277888",
          span: "phone"
        }
      ],
      navBottomItems: [
        {
          text: "Điều khoản sử dụng",
          url: "#"
        },
        {
          text: "Chính sách Quyền riêng tư",
          url: "#"
        },
        {
          text: "Trường hợp cho phép sử dụng",
          url: "#"
        },
        {
          text: "Thông tin về bảo mật",
          url: "#"
        },
        {
          text: "Chính sách Quyền sở hữu",
          url: "#"
        }
      ],
      navSocialLinks: [
        {
          text: "y",
          url: "#",
          img: y
        },
        {
          text: "in",
          url: "#",
          img: ins
        },
        {
          text: "be",
          url: "#",
          img: be
        },
        {
          text: "f",
          url: "#",
          img: f
        },
        {
          text: "w",
          url: "#",
          img: w
        },
      ],
    }
  },
  name: "Footer"
};
</script>

<style scoped lang="scss">
@import "./footer.scss";
</style>
