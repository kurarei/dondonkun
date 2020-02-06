<template>

  <div class="p-message" @click.prevent="messageClose">
    <div class="p-message__icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    <p class="p-message__text">完了しました</p>
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
  </div>

</template>

<script>
  export default {
    methods: {
      messageClose: function(){
        this.$store.commit('message/setMessageFlg', true)
      }
    }
  }
</script>
