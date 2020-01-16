<template>
    <div class="p-modal__mask">
      <div class="p-modal__container">
        <div class="p-menuNav">
          <h2 class="p-menuNav__title"><i class="fas fa-cloud-upload-alt"></i> フォロワーどんどん君</h2>
<!--          <RouterLink class="p-menuNav__close" to="/" @click.native="menuClose"><i class="fas fa-times"></i></RouterLink>-->
          <div class="p-menuNav__close" @click="menuClose"><i class="fas fa-times"></i></div>
        </div>
<!--          小画面の切り替えをここで行う-->
        <router-view name="menu" ></router-view>
      </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
      }
    },
    methods: {
      menuClose: function(){
        this.$store.commit('modal/setModalFlg', false)
      }
    }
  }
</script>
