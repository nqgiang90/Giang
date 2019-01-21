<template>
<div class="values" id="values">
  <div class="container">
    <h1>Giá trị</h1>
    <div class="row values__content values__content--mobile" v-responsive.sm.xs>
       <div v-for="(item, index) in items" v-bind:key="index" class="col-sm-12 mb-5">
         <img class="mr-3 img-fluid d-block mx-auto mb-4" :src="item.img" :alt="item.title">
         <div class="values__content__text">
           <h5>{{item.title}}</h5>
           {{item.text}}
         </div>
       </div>
    </div>
    <div class="row values__content" v-responsive.md.lg.xl>
      <div v-for="(item, index) in items" v-bind:key="index" class="col-sm-12 col-md-6">
        <div class="media">
          <img class="mr-3 img-fluid" :src="item.img" :alt="item.title">
          <div class="media-body">
            <h5>{{item.title}}</h5>
            {{item.text}}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <a href="tel:0965277888" class="btn btn-normal">HOTLINE: 0965 277 888</a>
      </div>
    </div>
  </div>

  <div class="line"></div>
</div>
</template>

<script>

export default {
  data() {
    return {
      items: [
        { 
          title: 'Marketing tự động', 
          text: 'Chiến dịch marketing của bạn sẽ tiếp cận hàng nghìn người trong “nháy mắt”.', 
          img: require("../../assets/values/auto-marketing.svg")
        },
        { 
          title: 'Cắt giảm 50% nhân viên tổng đài', 
          text: 'Các cuộc gọi được tự động hoá. Giảm số lượng tổng đài viên.', 
          img: require("../../assets/values/decrease-people.svg")
        },
        { 
          title: 'Bán hàng tự động', 
          text: 'Auto Telesale, Auto Up Sale, Auto Cross Sale. Mỗi khách hàng sẽ tiếp nhận thông điệp riêng dựa trên cơ sở dữ liệu khách hàng.', 
          img: require("../../assets/values/auto-sell.svg")
        },
        { 
          title: 'Tăng doanh thu bán hàng', 
          text: 'Tiếp cận khách hàng quy mô lớn, tự động và nhận biết khách hàng tiềm năng. Tăng tỷ lệ chốt Sale.', 
          img: require("../../assets/values/increase-revenue.svg")
        },
        { 
          title: 'CSKH tự động', 
          text: 'Chủ động gọi ra khảo sát chất lượng dịch vụ. Tự động trả lời các yêu cầu theo kịch bản.', 
          img: require("../../assets/values/auto-customer-care.svg")
        },
        { 
          title: 'Nâng cao chất lượng dịch vụ', 
          text: 'Chất lượng đồng đều, Giảm thiếu sai sót, đáp ứng nhanh. Thống kê, báo cáo, phân tích chi tiết.', 
          img: require("../../assets/values/improve-standard.svg")
        }
      ]
    }
  },
  name: "Values"
};
</script>

<style scoped lang="scss">
@import "./values.scss";
</style>