<template>
    <div class="p-pass">
        <form @submit.prevent="passResetForm">
            <div class="p-pass__pass"><input v-model="passResetFrom.password" class="c-input__menu" type="password" placeholder="新しいパスワード"></div>
            <div class="p-pass__rePass"><input v-model="passResetFrom.rePassword" class="c-input__menu" type="password" placeholder="新しいパスワード(確認)"></div>
            <div class="p-pass__button">
                <button class="c-button__menu">パスワードを変更する</button>
            </div>
        </form>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        passResetFrom: {
          password: '',
          rePassword: '',
          token: ''
        }
      }
    },
    methods: {
      async passResetForm () {
        await axios.post('/api/password/reset', this.passResetFrom)
      }
    }
  }
</script>
