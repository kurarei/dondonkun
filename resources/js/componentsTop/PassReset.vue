<template>
    <div class="p-reset">

      <form @submit.prevent="passReset">

          <div class="p-reset__email">
            <h2 class="p-reset__title"><i class="fas fa-lock"></i> ログインできない場合</h2>
            <p class="p-reset__text">パスワード再設定用のログインリンクをお送りしますので、メールアドレスを入力してください。
            </p>
<!--              <input class="c-input__menu" type="email" placeholder="メールアドレス">-->
            <input class="c-input__menu" v-model="passResetFrom.email" type="email" placeholder="メールアドレス">
          </div>

          <div class="p-reset__button">
              <button class="c-button__menu">リンクを送信する</button>
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
        passResetFrom: {
          email: ''
        }
      }
    },
    methods: {
      async passReset () {
        // await axios.post('/api/passReset', { email: this.email })
        await axios.post('/api/passReset', this.passResetFrom)
        }
      }
  }
</script>
