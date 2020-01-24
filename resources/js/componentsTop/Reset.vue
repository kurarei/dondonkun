<template>
    <div class="p-reset">

      <form @submit.prevent="resetPassword">

          <div class="p-reset__email">
              <h2 class="p-reset__title"><i class="fas fa-lock"></i> ログインできない場合</h2>
              <p class="p-reset__text">
                パスワードを再設定してください。
              </p>

              <div class="p-login__email">
                <input class="c-input__menu" type="email" placeholder="メールアドレス" v-model="form.email">
              </div>
              <div class="p-login__pass">
                <input class="c-input__menu" type="password" placeholder="パスワード(8文字以上)" v-model="form.password">
              </div>
          </div>

          <div class="p-reset__button">
              <button class="c-button__menu">パスワードを変更する</button>
          </div>
      </form>

      <RouterLink to="/register"><div class="p-reset__register"><p>新規登録する</p></div></RouterLink>
      <RouterLink to="/login"><div class="p-reset__login"><p>ログインに戻る</p></div></RouterLink>

    </div>
</template>

<script>


  export default {
    data() {
      return {
        form: {
          email: this.$route.query.email,
          password: null,
          token: this.$route.query.token
        }
      }
    },
    methods: {
      async resetPassword () {
        await axios.post('/api/passReset', this.form)
        }
      }
  }
</script>
