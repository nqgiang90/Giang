<template>
<div class="partners" id="partners">
  <div class="container">
    <h1>Đối tác và khách hàng</h1>
    <ul>
      <li v-for="(item, i) of items" :key="i"><img :src="item.img" alt=""/></li>
    </ul>
  </div>
</div>
</template>

<script>

export default {
  name: "Partners",
  data() {
    return { 
      items : [
        {img:require('../../assets/partners/naiscorp.png'), url:'#'},
        {img:require('../../assets/partners/haravan.png'), url:'#'},
        {img:require('../../assets/partners/boxi.png'), url:'#'},
        {img:require('../../assets/partners/tritam.png'), url:'#'},
        {img:require('../../assets/partners/ford.png'), url:'#'},
        {img:require('../../assets/partners/isofth.png'), url:'#'},
        {img:require('../../assets/partners/vgsmedia.png'), url:'#'},
        {img:require('../../assets/partners/vaymuon.png'), url:'#'},
        {img:require('../../assets/partners/gpm.png'), url:'#'},
        {img:require('../../assets/partners/nttnetworks.png'), url:'#'},
        {img:require('../../assets/partners/iris.png'), url:'#'},
        {img:require('../../assets/partners/stringee.png'), url:'#'},
        {img:require('../../assets/partners/ezcall.png'), url:'#'},
        {img:require('../../assets/partners/gtc.png'), url:'#'},
        {img:require('../../assets/partners/cloudfone.png'), url:'#'},
        {img:require('../../assets/partners/andyou.png'), url:'#'},
      ]
    }
  }
};
</script>

<style scoped lang="scss">
@import "./partners.scss";
</style>