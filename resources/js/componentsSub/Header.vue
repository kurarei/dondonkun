<template>

  <header class="l-header">
    <div class="p-nav">
      <RouterLink to="/mypage"><h1 class="p-nav__title"><a href="" class="">フォロワーどんどん君</a></h1></RouterLink>
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
