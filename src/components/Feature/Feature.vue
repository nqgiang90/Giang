<template>
  <div class="feature" id="feature">
    <div class="container">
      <div class="row" v-responsive.sm.xs>
        <div class="col-sm-12 feature__mobile__items" v-for="(item, i) in items" :key="i">
          <h3 class="mt-0">{{item.title}}</h3>
          <img class="img-fluid" :src="item.img" :alt="item.title">
          <div v-if="i === 0">
              <p>Tải lên danh sách khách hàng, xây dựng kịch bản cuộc gọi và bắt đầu chiến dịch gọi & trả lời tự động trong vòng 5 phút.</p>
              <ul>
                <li>- Tương tác qua phím bấm: ghi nhận phản hồi.</li>
                <li>- Trả lời tự động theo kịch bản: xác thực, tra cứu,..</li>
                <li>- Tự động chuyển hướng: đến tổng đài viên khi khách hàng yêu cầu.</li>
                <li>- Không giới hạn cuộc gọi ra: hàng nghìn cuộc gọi được thực hiện tự động theo kế hoạch.</li>
                <li>- Cấu hình chiến dịch: hotline gọi ra, số line gọi, chi phí tối đa, gọi lại khi thất bại, thời gian, thời điểm gọi linh hoạt.</li>
              </ul>
            </div>
             <div v-if="i === 1">
              <ul>
                <li>- Tạo phím bấm đa lớp tự động: giúp tạo các kịch bản gọi thoại thông minh và mức độ tự động hoá cao.</li>
                <li>- Cuộc gọi cá nhân hoá: mỗi khách hàng sẽ nhận thông điệp riêng biệt (tên, mặt hàng, thời gian, địa chỉ..)</li>
                <li>- Trích xuất thông tin khách hàng: từ file excel tải lên.</li>
              </ul>
            </div>
            <div v-else-if="i === 2">
              <ul>
                <li>- Tạo nội dung lời thoại bằng văn bản tự động: VBEE Text To Speech, không cần thu âm, mỗi khách hàng một lời thoại riêng biệt.</li>
                <li>- Giọng nói đa dạng giới tính và vùng miền: Nam, nữ miền Bắc, miền Nam.</li>
                <li>- Chèn nhạc nền trong lời thoại.</li>
                <li>- Tạo âm thanh, lời thoại chuyển hướng: khi bấm phím giúp nâng cao trải nghiệm khách hàng.</li>
              </ul>
            </div>
            <div v-else-if="i === 3">
              <ul>
                <li>- Báo cáo thời gian thực: cập nhật liên tục, tự động.</li>
                <li>- Báo cáo đầy đủ & chi tiết:</li>
                <li> -- Trạng thái cuộc gọi</li>
                <li> -- Thời điểm nhận cuộc gọi</li>
                <li> -- Thời lượng gọi</li>
                <li> -- Thông tin khách hàng</li>
                <li> -- Phím khách hàng đã bấm</li>
                <li>Người dùng có thể xem lịch sử chi tiết cuộc gọi của từng số điện thoại.</li>
                <li>- Đánh giá hiệu quả chiến dịch: Tối ưu hoá chiến dịch</li>
              </ul>
            </div>
            <div v-else-if="i === 4">
              <ul>
                <li><span class="font-weight-bold">Nếu Bạn đã có tổng đài:</span> AI Call Center dễ dàng kết nối, tích hợp vào hệ thống tổng đài của Bạn.</li>
                <li><span class="font-weight-bold">Nếu Bạn chưa có tổng đài:</span> hãy sử dụng AI Call Center bằng việc tạo tài khoản tại www.aicallcenter.vn.</li>
              </ul>
            </div>
        </div>
      </div>
      <div class="row" v-for="(item, i) in items" :key="i" v-responsive.md.lg.xl>
        <template v-if="(isEvenNumber(i))">
          <div class="col-md-5 box-img">
            <img class="img-fluid" :src="item.img" :alt="item.title">
          </div>
          <div class="col-md-7">
            <div class="media">
              <img class="mr-3" :src="item.icon_img" :alt="item.title">
              <div class="media-body align-self-center">
                <h3 class="mt-0">{{item.title}}</h3>
              </div>
            </div>
            <div v-if="i === 0">
              <p>Tải lên danh sách khách hàng, xây dựng kịch bản cuộc gọi và bắt đầu chiến dịch gọi & trả lời tự động trong vòng 5 phút.</p>
              <ul>
                <li>- Tương tác qua phím bấm: ghi nhận phản hồi.</li>
                <li>- Trả lời tự động theo kịch bản: xác thực, tra cứu,..</li>
                <li>- Tự động chuyển hướng: đến tổng đài viên khi khách hàng yêu cầu.</li>
                <li>- Không giới hạn cuộc gọi ra: hàng nghìn cuộc gọi được thực hiện tự động theo kế hoạch.</li>
                <li>- Cấu hình chiến dịch: hotline gọi ra, số line gọi, chi phí tối đa, gọi lại khi thất bại, thời gian, thời điểm gọi linh hoạt.</li>
              </ul>
            </div>
            <div v-else-if="i === 2">
              <ul>
                <li>- Tạo nội dung lời thoại bằng văn bản tự động: VBEE Text To Speech, không cần thu âm, mỗi khách hàng một lời thoại riêng biệt.</li>
                <li>- Giọng nói đa dạng giới tính và vùng miền: Nam, nữ miền Bắc, miền Nam.</li>
                <li>- Chèn nhạc nền trong lời thoại.</li>
                <li>- Tạo âm thanh, lời thoại chuyển hướng: khi bấm phím giúp nâng cao trải nghiệm khách hàng.</li>
              </ul>
            </div>
            <div v-else-if="i === 4">
              <ul>
                <li><span class="font-weight-bold">Nếu Bạn đã có tổng đài:</span> AI Call Center dễ dàng kết nối, tích hợp vào hệ thống tổng đài của Bạn.</li>
                <li><span class="font-weight-bold">Nếu Bạn chưa có tổng đài:</span> hãy sử dụng AI Call Center bằng việc tạo tài khoản tại www.aicallcenter.vn.</li>
              </ul>
            </div>
            <div class="feature__buttons">
              <router-link to="/register" :class="['btn', 'text-uppercase', 'btn__main', 'btn__main__readmore']">tìm hiểu thêm</router-link>
              <a class="btn text-uppercase btn__main btn__main__hotline" href="tel:0965277888">HOTLINE: 0965 277 888</a>
            </div>
          </div>
        </template>
        <template v-else>
          <div class="col-md-7">
            <div class="media">
              <img class="mr-3" :src="item.icon_img" :alt="item.title">
              <div class="media-body align-self-center">
                <h3 class="mt-0">{{item.title}}</h3>
              </div>
            </div>
            <div v-if="i === 1">
              <ul>
                <li>- Tạo phím bấm đa lớp tự động: giúp tạo các kịch bản gọi thoại thông minh và mức độ tự động hoá cao.</li>
                <li>- Cuộc gọi cá nhân hoá: mỗi khách hàng sẽ nhận thông điệp riêng biệt (tên, mặt hàng, thời gian, địa chỉ..)</li>
                <li>- Trích xuất thông tin khách hàng: từ file excel tải lên.</li>
              </ul>
            </div>
            <div v-else-if="i === 3">
              <ul>
                <li>- Báo cáo thời gian thực: cập nhật liên tục, tự động.</li>
                <li>- Báo cáo đầy đủ & chi tiết:</li>
                <li> -- Trạng thái cuộc gọi</li>
                <li> -- Thời điểm nhận cuộc gọi</li>
                <li> -- Thời lượng gọi</li>
                <li> -- Thông tin khách hàng</li>
                <li> -- Phím khách hàng đã bấm</li>
                <li>Người dùng có thể xem lịch sử chi tiết cuộc gọi của từng số điện thoại.</li>
                <li>- Đánh giá hiệu quả chiến dịch: Tối ưu hoá chiến dịch</li>
              </ul>
            </div>
            <div class="feature__buttons">
              <router-link to="/register" :class="['btn', 'text-uppercase', 'btn__main', 'btn__main__readmore']">tìm hiểu thêm</router-link>
              <a class="btn text-uppercase btn__main btn__main__hotline" href="tel:0965277888">HOTLINE: 0965 277 888</a>
            </div>
          </div>
          <div class="col-md-5 box-img">
            <img class="img-fluid" :src="item.img" :alt="item.title">
          </div>
        </template>

        <div class="line"></div>
      </div>
    </div>
  </div>
</template>

<script>
// import f from '../../assets/footer/f.png';
export default {
  data() {
    return {
      items: [
        {
          title: "Xây dựng chiến dịch tự động",
          img: require("../../assets/feature/campaign-build-img.svg"),
          icon_img: require("../../assets/feature/campaign-build.svg"),
          readMoreLink: "#"
        },
        {
          title: "Kịch bản đa lớp & cá nhân hoá",
          img: require("../../assets/feature/planning-img.svg"),
          icon_img: require("../../assets/feature/planning.svg"),
          readMoreLink: "#"
        },
        {
          title: "Giọng nói trí tuệ nhân tạo được sinh ra từ văn bản",
          img: require("../../assets/feature/speech-text-img.svg"),
          icon_img: require("../../assets/feature/speech-text.svg"),
          readMoreLink: "#"
        },
        {
          title: "Báo cáo thống kê, phân tích chi tiết theo thời gian thực",
          img: require("../../assets/feature/report3.svg"),
          icon_img: require("../../assets/feature/report.svg"),
          readMoreLink: "#"
        },
        {
          title: "Dễ dàng triển khai và sử dụng",
          img: require("../../assets/feature/deploy-img.svg"),
          icon_img: require("../../assets/feature/deploy.svg"),
          readMoreLink: "#"
        }
      ]
    };
  },
  methods: {
    isEvenNumber: function(num) {
      return num % 2 == 0;
    }
  },
  name: "Feature"
};
</script>

<style scoped lang="scss">
@import "./feature.scss";
</style>