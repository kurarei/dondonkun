<template>

  <header class="l-header">
    <div class="p-nav">
      <RouterLink to="/mypage"><div class="c-home"><i class="fa fa-home" aria-hidden="true"></i></div></RouterLink>
      <h2 class="p-menuNav__title"><i class="fas fa-cloud-upload-alt"></i> フォロワーどんどん君</h2>
      <div class="c-hamburger c-hamburger__black" @click.prevent="menuOpen">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </header>

</template>

<script>
  export default {
    data() {
      return {
      }
    },
    methods: {
       menuOpen: function(){
         this.$store.commit('modal/setModalFlg', true)
      }
    }
  }
</script>
