<template>
    <div class="p-login">
        <form @submit.prevent="login">
            <div class="p-login__email"><input class="c-input__menu" type="email" placeholder="メールアドレス" v-model="loginForm.email"></div>
            <div class="p-login__pass"><input class="c-input__menu" type="password" placeholder="パスワード(8文字以上)" v-model="loginForm.password"></div>
            <div class="p-login__omit">
                <input class="" type="checkbox" id="login" />
                <label for="login">次回の入力を省略する</label>
            </div>
            <div class="p-login__button">
                <button class="c-button__menu">ログインする</button>
            </div>
        </form>
        <div class="p-login__reset"><p>ログイン出来ない場合</p></div>
        <div class="p-login__register"><p>アカウントをお持ちでない方</p></div>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        loginForm: {
          email: '',
          password: ''
        },
      }
    },
    methods: {
      async login () {
        // authストアのloginアクションを呼び出す
        await this.$store.dispatch('auth/login', this.loginForm)

        // トップページに移動する
        this.$router.push('/mypage')
      },
    }
  }
</script>
