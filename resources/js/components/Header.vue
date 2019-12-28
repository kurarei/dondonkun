<template>
    <header class="l-header l-header__top">
        <div class="p-nav">
<!--          <RouterLink to="/mypage">-->
            <RouterLink class="p-nav__login" to="/mypage">ログイン</RouterLink>
<!--          </RouterLink>-->
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
        menuFlg: false,
      }
    },
    methods: {
       menuOpen: function(){
         this.menuFlg = !this.menuFlg;
         console.log(this.menuFlg);
      }
    }
  }
</script>
