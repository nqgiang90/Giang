<template>
  <div class="footer">
    <div class="box_call">
      <a href="tel:0965277888">
        <img src="../../assets/footer/call_btn.png" alt=""/>
      </a>
    </div>
    <div class="container">
      <!-- <div class="footer-top">
        <ul class="nav justify-content-end footer-bottom__navbar">
            <b-nav-item v-scroll-to="'#values'">Giá trị</b-nav-item>
            <b-nav-item v-scroll-to="'#feature'">Tính năng</b-nav-item>
            <b-nav-item v-scroll-to="'#carousel'">Lĩnh vực</b-nav-item>
            <b-nav-item v-scroll-to="'#partners'">Case study</b-nav-item>
        </ul>

        <ul class="nav justify-content-end footer-top__nav">
          <li class="nav-item" v-for="(item, i) in navTopItems" :key="i">
            <a class="nav-link" :href="item.url" v-if="item.span !== 'phone'">{{item.text}}</a>
            <a class="nav-link footer-top__nav__phone" :href="item.url" v-else>{{item.text}}</a>
          </li>
        </ul>
      </div> -->
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
              <!-- <img :src="item.img" :alt="item.text" /> -->
              {{item.text}}
            </a>
          </li>
        </ul>
        <img class="footer__logo" src="../../assets/footer/footer-logo.png" alt="footer logo"/>
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