<template>
  <div class="">
    <section class="p-panel">
      <div class="p-panel__account">
        <div class="p-panel__img"><a class="c-img__circle" :href="'https://twitter.com/' + account.nickname" target="_blank"><img class="c-img__icon" :src="account.avatar" alt="Twitterのアイコン"></a></div>
        <div class="p-panel__name">
          <div class="p-account__name"><a :href="'https://twitter.com/' + account.nickname" target="_blank">{{ account.name }}</a></div>
          <div class="p-account__nickname"><a :href="'https://twitter.com/' + account.nickname" target="_blank">@{{ account.nickname }}</a></div>
          <div class="p-account__button"><button class="c-button__remove" @click.prevent="onClickDelete">解除する</button></div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    props: {
        account: {
            type: Object,
            require: true,
            default: null
        }
    },
    methods: {
      onClickDelete() {
        this.$emit('on-click-delete', this.account)
      }
    },
  }
</script>
