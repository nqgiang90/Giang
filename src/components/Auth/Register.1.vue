<template>
  <div class="register">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 otp__box" v-if="0">
          <h1>Chỉ còn một bước nữa!</h1>
          <h3>Bảo mật của bạn là ưu tiên của chúng tôi</h3>
          <b-form @submit="onOtpSubmit" @reset="onOtpReset">
            <p>Chúng tôi vừa gửi mã xác nhận (OTP) tới số thuê bao của bạn, vui lòng nhập dưới đây.</p>
            <p><span>Chưa nhận được? <a href="#">Gửi lại</a></span></p>
            <b-form-input
                id="otp_code"
                type="text"
                v-model="form_otp.otp_code"
                required
                placeholder="Nhập mã OTP"
            ></b-form-input>
            <span class="otp_errors" v-if="showOtpErrors">Mã OTP không đúng</span>
            <div class="btn_submit_otp_wrap">
              <b-button type="submit" class="btn_submit_otp">Xác nhận</b-button>
            </div>
          </b-form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 register__box" v-if="1">
          <h1>Đăng ký AI Call Center</h1>
          <h3>Trải nghiệm tổng đài tự động</h3>
          <b-form @submit="onSubmit" @reset="onReset" v-if="show">
            <div class="error" v-if="showErrors">
              <ul v-if="showErrors">
                <li v-for="(item, i) in errs" :key="i">{{item}}</li>
              </ul>
            </div>
            <div class="success" v-else-if="showSuccess">
              <p class="text-success">Cám ơn bạn đã đăng ký sử dụng AI Call Center, Bộ phận chăm sóc khách hàng của chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.</p>
            </div>
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
           
            <b-button type="submit" class="btn_register">Đăng ký</b-button>
          </b-form>
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
      form: {
        email: "",
        name: "",
        phone: "",
        name_congty: "",
        name_tongdai: "",
        user_id: 0
      },
      form_otp: {
        otp_code: ""
      },
      show: true,
      showErrors: false,
      showSuccess: false,
      errs: [],
      showOtpErrors: false,
      otp_errs : ''
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
        phone: this.form.phone
      })
      .then(function (response) {
        if(response.data.hasOwnProperty('err')) {
          me.showSuccess = false;
          me.showErrors = true;
          me.errs = [];
          me.errs.push(...response.data.err);
        } else {
          me.showErrors = false;
          //me.showSuccess = true;
          //let formGroups = me.$el.querySelectorAll('.form-group');
          // for (let i of formGroups) {
          //   i.style.display = "none";
          // }
          // me.$el.querySelector('.btn_register').style.display = "none";  
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
        otp_code: this.form_otp.otp_code,
      })
      .then(function (response) {
        if(response.data.hasOwnProperty('err')) {
          //me.showSuccess = false;
          me.showOtpErrors = true;
          me.otp_errs = '';
          me.otp_errs = response.data.otp_err;
        }
        // } else {
        //   me.showErrors = false;
        //   me.showSuccess = true;
        //   let formGroups = me.$el.querySelectorAll('.form-group');
        //   for (let i of formGroups) {
        //     i.style.display = "none";
        //   }
        //   me.$el.querySelector('.btn_register').style.display = "none";  
        // }
      })
    },
    onOtpReset(evt) {
      evt.preventDefault();
      /* Reset our form values */
      this.form_otp.otp_code = "";
      /* Trick to reset/clear native browser form validation state */
      this.showOtpErrors = false
    }
  }
};
</script>

<style scoped lang="scss">
@import './register.scss';
</style>