<template>
  <div class="footer">
    <img class="footer__logo" src="../../assets/footer/footer-logo.png" alt="footer logo"/>
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col" v-for="(item, index) in items" :key="index">
            <h3>{{item.heading}}</h3>
            <ul>
              <li v-for="(link, i) in item.links" :key="i">
                <a :href="link.url">{{link.text}}</a>
              </li>
            </ul>
          </div>
        </div>

        <ul class="nav justify-content-end footer-top__nav">
          <li class="nav-item" v-for="(item, i) in navTopItems" :key="i">
            <a class="nav-link" :href="item.url" v-if="item.span !== 'phone'">{{item.text}}</a>
            <a class="nav-link footer-top__nav__phone" :href="item.url" v-else>{{item.text}}</a>
          </li>
        </ul>
      </div>
      <div class="footer-bottom">
        <ul class="nav justify-content-end footer-bottom__nav">
          <li class="nav-item" v-for="(item, i) in navBottomItems" :key="i">
            <a class="nav-link" :href="item.url">{{item.text}}</a>
          </li>
        </ul>
        <ul class="nav justify-content-end footer-bottom__social__nav">
          <li class="nav-item" v-for="(item, i) in navSocialLinks" :key="i">
            <a class="nav-link" :href="item.url">
              <!-- <img :src="item.img" :alt="item.text" /> -->
              {{item.text}}
            </a>
          </li>
        </ul>
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
      items: [
        {
          heading: "Tính năng",
          links: [
            {
              text: "Tổng đài AI",
              url: "#"
            },
            {
              text: "Vbee on-premises",
              url: "#"
            },
            {
              text: "Vbee Cloud",
              url: "#"
            },
            {
              text: "VAIS Vietnamese Speech to text",
              url: "#"
            },
            {
              text: "Xử lý số liệu",
              url: "#"
            }
          ]
        },
        {
          heading: "lĩnh vực sử dụng",
          links: [
            {
              text: "API Vbee Text to speech",
              url: "#"
            },
            {
              text: "API báo nói",
              url: "#"
            },
            {
              text: "API sách nói",
              url: "#"
            },
            {
              text: "API thời tiết",
              url: "#"
            },
            {
              text: "API tổng đài AI",
              url: "#"
            },
            {
              text: "API VAIS Speech to text",
              url: "#"
            },
            {
              text: "API xác thực qua voice",
              url: "#"
            }
          ]
        },
        {
          heading: "Use case",
          links: [
            {
              text: "Thương mại điện tử",
              url: "#"
            },
            {
              text: "Vận tải",
              url: "#"
            },
            {
              text: "Tổng đài tự động",
              url: "#"
            },
            {
              text: "Ngân hàng",
              url: "#"
            },
            {
              text: "Giáo án điện tử",
              url: "#"
            },
            {
              text: "Nội dung tự động",
              url: "#"
            }
          ]
        },
        {
          heading: "Báo giá",
          links: [
            {
              text: "Cổ đông sáng lập",
              url: "#"
            },
            {
              text: "Giới thiệu Vbee",
              url: "#"
            },
            {
              text: "Vbee Profile",
              url: "#"
            },
            {
              text: "Báo chí & Cộng đồng",
              url: "#"
            }
          ]
        },
        {
          heading: "Blog",
          links: [
            {
              text: "Tiêu điểm Vbee",
              url: "#"
            },
            {
              text: "Text to speech",
              url: "#"
            },
            {
              text: "Góc lập trình",
              url: "#"
            }
          ]
        },
        {
          heading: "Liên hệ",
          links: [
            {
              text: "Tiêu điểm Vbee",
              url: "#"
            },
            {
              text: "Text to speech",
              url: "#"
            },
            {
              text: "Góc lập trình",
              url: "#"
            }
          ]
        }
      ]
    };
  },
  name: "Footer"
};
</script>

<style scoped lang="scss">
@import "./footer.scss";
</style>