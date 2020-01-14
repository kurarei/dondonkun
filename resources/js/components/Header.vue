<template>

  <header class="l-header l-header__top">
    <div class="p-nav">
      <RouterLink class="p-nav__login" to="/login" @click.native="menuOpen">ログイン</RouterLink>
      <div class="c-hamburger" @click.prevent="menuOpen">
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
       // menuOpen: function(){
       //   this.$emit('menuOpen');
      // },
      menuOpen: function(){
        // this.$emit('menuOpen');
        this.$store.commit('modal/setModalFlg', true)
      }
    }
  }
</script>
