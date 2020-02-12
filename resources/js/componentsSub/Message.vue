<template>

  <div class="p-message">
    <div class="p-message__icon" @click.prevent="setMessage(null)"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    <p class="p-message__text">{{ message }}</p>
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
<!--    <p class="p-message__text">完了しました</p>-->
  </div>

</template>

<script>
  import { mapGetters, mapActions } from "vuex";
  export default {
    computed: {
      ...mapGetters({
        message: "message/message"
      })
    },
    methods: {
      ...mapActions({
        setMessage: "message/setMessage",
      })
    }
  }
</script>
