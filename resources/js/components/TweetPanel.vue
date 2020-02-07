<template>

    <div class="p-setting">
      <p class="">{{ reservation.reservation_datetime }}</p>
      <p class="">{{ charaCount }}/140文字</p>
      <textarea class="p-setting__textarea" v-model="reservation.message" maxlength="140" required></textarea>
      <div class="">
        <button
          @click.prevent="onClickDelete"
          class="c-button__delete"
        >
          削除
        </button>
        <button
          @click.prevent="onClickUpdate"
          class="c-button__submit"
        >
          更新
        </button>
      </div>

    </div>

</template>

<script>
  export default {
    props: {
        reservation: {
            type: Object,
            require: true,
            default: null
        }
    },
    computed: {
      charaCount: function() {
        return this.reservation.message.length || '';
      }
    },
    methods: {
      onClickUpdate() {
        this.$emit('on-click-update', this.reservation)
      },
      onClickDelete() {
        this.$emit('on-click-delete', this.reservation)
      },
    }
  }
</script>
