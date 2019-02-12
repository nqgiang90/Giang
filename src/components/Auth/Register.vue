<template>
  <div class="register">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 register__section">
          <h1>{{heading_text}}</h1>
          <h3>{{heading_sub_text}}</h3>
          <div class="success" v-if="showSuccess">
              <p class="text-success">{{success_message}}</p>
              <p><a href="https://cp.aicallcenter.vn/dang-nhap">Click vào đây để đăng nhập</a></p>
          </div>
          <div class="register__box" v-if="show_register">
            
            <b-form @submit="onSubmit" @reset="onReset" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>

            <b-form-group
              id="tenTongDai"
              label="Tên tổng đài:"
              label-for="name_tongdai"
            >
              <b-form-input
                id="name_tongdai"
                type="text"
                v-model="form.name_tongdai"
                required
                placeholder="Tên tổng đài"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="tenCongTy"
              label="Tên công ty:"
              label-for="name_congty"
            >
              <b-form-input
                id="name_congty"
                type="text"
                v-model="form.name_congty"
                required
                placeholder="Tên công ty"
              ></b-form-input>
            </b-form-group>
            <b-form-group id="fullName" label="Tên của bạn:" label-for="fullName">
              <b-form-input
                id="fullName"
                type="text"
                v-model="form.name"
                required
                placeholder="Tên của bạn"
              ></b-form-input>
            </b-form-group>
            <b-form-group
              id="email"
              label="Địa chỉ Email:"
              label-for="email"
            >
              <b-form-input
                id="emailAddress"
                type="email"
                v-model="form.email"
                required
                placeholder="Địa chỉ mail"
              ></b-form-input>
            </b-form-group>
            <b-form-group
              id="sdt"
              label="Số điện thoại:"
              label-for="phone"
            >
              <b-form-input
                id="phone"
                type="text"
                v-model="form.phone"
                required
                placeholder="Số điện thoại"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="password"
              label="Mật khẩu:"
              label-for="password"
            >
            <b-form-input
                id="password"
                type="password"
                v-model="form.password"
                required
                placeholder="Mật khẩu"
                name="up"
              ></b-form-input>
            </b-form-group>
            
            <b-form-group
              id="password2"
              label="Nhập lại mật khẩu:"
              label-for="password2"
            >
            <b-form-input
                id="password2"
                type="password"
                required
                placeholder="Mật khẩu"
                name="up2"
              ></b-form-input>
            </b-form-group>
           <div class="error" v-if="showErrors">
              <ul v-if="showErrors">
                <li v-for="(item, i) in errs" :key="i">{{item}}</li>
              </ul>
            </div>
            <b-button type="submit" class="btn_register">Đăng ký</b-button>
          </b-form>
          </div>

          <div class="otp__box" v-if="show_otp">
            <b-form @submit="onOtpSubmit" @reset="onOtpReset">    
              <p>Chúng tôi sẽ gọi điện đến số thuê bao <b>{{form.phone}}</b> của bạn để đọc mã xác nhận (OTP), bạn vui lòng nghe máy.</p>
              <p><span>Chưa nhận được? <a href="" @click.prevent="resendOTP()">Gửi lại</a></span></p>
              <p class="otp_retry text-center" v-if="show_text_retry">Hệ thống đã thực hiện cuộc gọi để gửi lại bạn mã OTP mới !</p>
              <b-form-input
                  id="otp_code"
                  type="text"
                  v-model="form.otp_code"
                  required
                  placeholder="Nhập mã OTP"
              ></b-form-input>
              <span class="otp_errors" v-if="showOtpError">{{otp_error}}</span>
              <div class="btn_submit_otp_wrap">
                <b-button type="submit" class="btn_submit_otp">Xác nhận</b-button>
              </div>
            </b-form>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
          <img src="../../assets/register/robo.png" alt="" class="img-fluid"/>
        </div>
        
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "Register",
  data() {
    return {
      heading_text: "Đăng ký AI Call Center",
      heading_sub_text: "Trải nghiệm tổng đài tự động",
      success_message: "Cám ơn bạn đã đăng ký sử dụng AI Call Center, Bộ phận chăm sóc khách hàng của chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.",
      show_register: true,
      show_otp: false,

      form: {
        email: "",
        name: "",
        phone: "",
        name_congty: "",
        name_tongdai: "",
        user_id: 0,
        otp_code: "",
        password: "",
      },
      show: true,
      showErrors: false,
      showSuccess: false,
      errs: [],
      otp_error: '',
      showOtpError: false,
      show_text_retry: false,
      };
  },
  methods: {
    onSubmit(evt) {
      let me = this;
      evt.preventDefault();
      axios.post('ajaxfile.php', {
        request: 2,
        tongdai: this.form.name_tongdai,
        congty: this.form.name_congty,
        name: this.form.name,
        email: this.form.email,
        phone: this.form.phone,
        password: this.form.password
      })
      .then(function (response) {
        if(response.data.hasOwnProperty('err')) {
          me.showErrors = true;
          me.errs = [];
          me.errs.push(...response.data.err);
        } else {
          me.showErrors = false;
          me.show_register = false;
          me.heading_text = "Chỉ còn một bước nữa!";
          me.heading_sub_text = "Bảo mật của bạn là ưu tiên của chúng tôi";
          me.show_otp = true;
        }
      })
    },
    onReset(evt) {
      evt.preventDefault();
      /* Reset our form values */
      this.form.email = "";
      this.form.name = "";
      this.form.name_congty = "";
      this.form.name_tongdai = "";
      this.form.phone = "";
      this.form.password = "";
      this.form.checked = [];
      /* Trick to reset/clear native browser form validation state */
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
    onOtpSubmit(evt) {
      let me = this;
      evt.preventDefault();
      axios.post('ajaxfile.php', {
        request: 3,
        otp_code: parseInt(this.form.otp_code),
        tongdai: this.form.name_tongdai,
        congty: this.form.name_congty,
        name: this.form.name,
        email: this.form.email,
        phone: this.form.phone,
        password: this.form.password
      })
      .then(function (response) {
        if(response.data === 0) {
          me.showOtpError = true;
          me.show_text_retry = false;
          me.otp_error = 'Mã OTP không đúng !';
        } else if(response.data === 3) {
          me.showOtpError = true;
          me.show_text_retry = false;
          me.otp_error = 'Mã OTP đã hết hạn !';
        } else if(response.data === 1) {
          me.showOtpError = false;
          me.show_text_retry = false;
          me.otp_error = '';
          me.show_otp= false;
          me.heading_text= "Đăng ký AI Call Center";
          me.heading_sub_text= "Trải nghiệm tổng đài tự động";
          me.showSuccess=true;
          
        }
      })
    },
    onOtpReset(evt) {
      evt.preventDefault();
      /* Reset our form values */
      this.form.otp_code = "";
      /* Trick to reset/clear native browser form validation state */
      this.showOtpError = false
    },
    resendOTP(evt) {
      let me = this;
      axios.post('ajaxfile.php', {
        request: 4,
        tongdai: this.form.name_tongdai,
        congty: this.form.name_congty,
        name: this.form.name,
        email: this.form.email,
        phone: this.form.phone,
        password: this.form.password
      })
      .then(function (response) {
        if(response.data === 0) {
          me.showOtpError = true;
          me.show_text_retry = false;
          me.otp_error = 'Bạn cần chờ 1 phút giữa mỗi lần yêu cầu gửi lại mã OTP.';
        }
        else if(response.data === 2) {
          me.showOtpError = true;
          me.show_text_retry = false;
          me.otp_error = 'Có lỗi xảy ra khi gửi mã OTP, bạn vui lòng thử lại sau vài phút';
        }
        else if(response.data === 1) {
          me.showOtpError = false;
          me.show_text_retry = true;
        }
      })
    }
  }
};
</script>

<style scoped lang="scss">
@import './register.scss';
</style>