<template>
    <div class="p-reset">

      <form @submit.prevent="passReset">

        <div class="p-reset__email">
          <h2 class="p-reset__title"><i class="fas fa-lock"></i> ログインできない場合</h2>
          <p class="p-reset__text">
            パスワード再設定用のログインリンクをお送りしますので、メールアドレスを入力してください。
          </p>
          <div v-if="errors">
            <ul v-if="errors.password">
              <li v-for="msg in errors.password" :key="msg">{{ msg }}</li>
            </ul>
          </div>

          <input v-model="passResetFrom.email" class="c-input__menu" type="email" placeholder="メールアドレス">
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
  import {OK, UNPROCESSABLE_ENTITY} from '../util'

  export default {
    data() {
      return {
        errors: null,
        passResetFrom: {
          email: null
        }
      }
    },
    methods: {
      async passReset () {
        const response = await axios.post('/api/password/email', this.passResetFrom)

        if (response.status === UNPROCESSABLE_ENTITY){
          //バリデーションエラー

          this.errors = response.data.errors
          console.log(this.response);
          return false
        } else if (response.status !== OK) {
          this.$store.commit('error/setCode', response.status)
          return false
        }


        }
      }
  }
</script>
