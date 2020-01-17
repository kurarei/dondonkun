<template>
  <div class="p-register">
    <form @submit.prevent="register">
      <div v-if="registerErrors" class="errors">
        <ul v-if="registerErrors.email">
          <li v-for="msg in registerErrors.email" :key="msg">{{ msg }}</li>
        </ul>
        <ul v-if="registerErrors.password">
          <li v-for="msg in registerErrors.password" :key="msg">{{ msg }}</li>
        </ul>
      </div>
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
    <RouterLink to="/login"><div class="p-register__login"><p>アカウントをお持ちの方</p></div></RouterLink>
  </div>
</template>

<script>
  import { mapState } from 'vuex'

  export default {
    data(){
      return {
        registerForm: {
          email: '',
          password: ''
        }
      }
    },
    computed: {
      ...mapState({
        apiStatus: state => state.auth.apiStatus,
        registerErrors: state => state.auth.registerErrorMessages
      })
    },
    methods: {
      async register () {
        // authストアのregisterアクションを呼び出す
        await this.$store.dispatch('auth/register', this.registerForm)
        //マイページに遷移する
        if (this.apiStatus) {
          // トップページに移動する
          this.$router.push('/mypage')
          this.menuClose()
        }
      },
      clearError () {
        this.$store.commit('auth/setRegisterErrorMessages', null)
      },
      menuClose: function(){
        this.$store.commit('modal/setModalFlg', false)
      }
    },
    created () {
      this.clearError()
    }
  }
</script>
