<template>
    <div class="p-logout">
        <div class="p-logout__button">
            <button class="c-button__menu" @click="logout">ログアウトする</button>
        </div>
    </div>
</template>

<script>
  export default {
    methods: {
      async logout () {
        await this.$store.dispatch('auth/logout')

        this.$router.push('/')
      }
    }
  }
</script>
