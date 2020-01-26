<template>
    <div class="p-pass">
        <form @submit.prevent="passResetForm">
          <div v-if="errors">
            <ul v-if="errors.password">
              <li v-for="msg in errors.password" :key="msg">{{ msg }}</li>
            </ul>
          </div>
          <div class="p-pass__pass"><input v-model="passResetFrom.password" class="c-input__menu" type="password" placeholder="新しいパスワード(8文字以上)"></div>
          <div class="p-pass__rePass"><input v-model="passResetFrom.password_confirmation" class="c-input__menu" type="password" placeholder="新しいパスワード(確認)"></div>
          <div class="p-pass__button">
              <button class="c-button__menu">パスワードを変更する</button>
          </div>
        </form>
    </div>
</template>

<script>
  import {OK, UNPROCESSABLE_ENTITY} from '../util'
  import router from '../router'

  export default {
    data() {
      return {
        errors: null,
        passResetFrom: {
          password: null,
          password_confirmation: null,
          token: this.$route.params.token
        }
      }
    },
    methods: {
      async passResetForm () {
        const response = await axios.post('/api/password/reset', this.passResetFrom)

        if (response.status === UNPROCESSABLE_ENTITY){
          //バリデーションエラー
          this.errors = response.data.errors
          return false
        } else if (response.status !== OK) {
          this.$store.commit('error/setCode', response.status)
          return false
        }

        //画面遷移
        await this.$router.push({ path: '/login' })
      }
    }
  }
</script>


