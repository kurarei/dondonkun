<template>
    <div class="p-register">
        <form @submit.prevent="register">
            <div class="p-register__email">
                <input class="c-input__menu" type="text" placeholder="メールアドレス" v-model="registerForm.email">
            </div>
            <div class="p-register__pass">
                <input class="c-input__menu" type="password" placeholder="パスワード(8文字以上)" v-model="registerForm.password">
            </div>
            <div class="p-register__button">
                <button class="c-button__menu">この内容で登録する</button>
            </div>
        </form>
        <div class="p-register__login"><p>アカウントをお持ちの方</p></div>
    </div>
</template>

<script>
  export default {
    data(){
      return {
        registerForm: {
          email: '',
          password: ''
        }
      }
    },
    methods: {
      async register () {
        console.log(this.registerForm)
        // authストアのregisterアクションを呼び出す
        await this.$store.dispatch('auth/register', this.registerForm)
        //マイページに遷移する
        await this.$router.push('/mypage')
      }
    }
  }
</script>
