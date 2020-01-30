<template>
    <div class="p-modal__mask">
      <div class="p-modal__container">
        <div class="p-menuNav">
          <RouterLink to="/"><h2 class="p-menuNav__title"><i class="fas fa-cloud-upload-alt"></i> フォロワーどんどん君</h2></RouterLink>
          <RouterLink to="/"><div class="p-menuNav__close" @click="menuClose"><i class="fas fa-times"></i></div></RouterLink>
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
