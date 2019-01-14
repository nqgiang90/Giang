<template>
  <div class="slider">
    <slider animation="fade">
      <slider-item v-for="(i, index) in list" :key="index" :style="i" @click="hello">
        <p style="line-height: 280px; font-size: 5rem; text-align: center;">Page{{ index + 1 }}</p>
      </slider-item>
    </slider>
  </div>
</template>

<script>

export default {
  name: "Slider",

  data() {
    return {
      list: [
        {
          backgroundColor: "#3f51b5",
          width: "100%",
          height: "100%"
        },
        {
          backgroundColor: "#eee",
          width: "100%",
          height: "100%"
        },
        {
          backgroundColor: "#f44336",
          width: "100%",
          height: "100%"
        },
        {
          backgroundColor: "#eee",
          width: "100%",
          height: "100%"
        }
      ],
      sliderValue: 2
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
@import "./slider.scss";
</style>