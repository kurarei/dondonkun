<template>

  <div class="p-message" @click.prevent="messageClose">
    <div class="p-message__icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    <p class="p-message__text">{{ message }}</p>
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
  </div>

</template>

<script>
  export default {
    data() {
            return {
                message: this.$store.state.message.message? this.$store.state.message.message: '完了しました'
            }
        },
    methods: {
      messageClose: function(){
        this.$store.commit('message/setMessageFlg', null)
      }
    }
  }
</script>
