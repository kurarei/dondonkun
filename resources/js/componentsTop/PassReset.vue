<template>
  <div class="p-reset">

    <form @submit.prevent="passReset">
      <div class="p-reset__email">
        <h2 class="p-reset__title"><i class="fas fa-lock"></i> ログインできない場合</h2>
        <p class="p-reset__text">
          パスワード再設定用のログインリンクをお送りしますので、メールアドレスを入力してください。
        </p>
        <div v-if="passResetErrorMessages">
          <ul v-if="passResetErrorMessages.email">
            <li v-for="msg in passResetErrorMessages.email" :key="msg">{{ msg }}</li>
          </ul>
        </div>

        <input v-model="passResetFrom.email" class="c-input__menu" type="email" placeholder="メールアドレス">
      </div>

      <div class="p-reset__button">
        <button class="c-button__menu">リンクを送信する</button>
      </div>
    </form>

    <RouterLink to="/register">
      <div class="p-reset__register"><p>新規登録する</p></div>
    </RouterLink>
    <RouterLink to="/login">
      <div class="p-reset__login"><p>ログインに戻る</p></div>
    </RouterLink>

  </div>
</template>

<script>
    import {mapState} from 'vuex'
    import {OK, UNPROCESSABLE_ENTITY} from '../util'

    export default {
        data() {
            return {
                // errors: null,
                passResetFrom: {
                    email: null
                }
            }
        },
        computed: {
            ...mapState({
                apiStatus: state => state.auth.apiStatus,
                passResetErrorMessages: state => state.auth.passResetErrorMessages,
            })
        },
        methods: {
            async passReset() {
                let check = this.isValid()
                if (check == false) {
                    return
                }

                try {
                    this.response = await axios.post('/api/password/email', this.passResetFrom)
                } catch (err) {
                    console.log(err)
                }
                console.log(this.response);

                if (this.response.status === OK) {
                  console.log('success')
                  this.$store.commit('auth/setApiStatus', true)

                } else if (this.response.status === UNPROCESSABLE_ENTITY) {
                    //バリデーションエラー
                    // this.errors = response.data.errors
                    this.$store.commit('auth/setPassResetErrorMessages', {email: this.response.data.errors})
                    console.log(this.response);
                    return false
                } else if (this.response.status !== OK) {
                    this.$store.commit('error/setCode', this.response.status)
                    return false
                }
                // トップページに移動する
                if (this.apiStatus) {
                    //メッセージ表示
                    this.$store.commit('message/setMessage', '指定したメールアドレスにメールを送信しました。')

                  // トップページに移動する
                  this.$router.push('/mypage')
                  this.menuClose()
                }
            },
            menuClose: function(){
              this.$store.commit('modal/setModalFlg', false)
            },
            isValid: function () {
                let errors = [];

                if (this.passResetFrom.email == null) {
                    errors.push('メールアドレスが空です。');
                } else {
                    //メールアドレスバリデーション
                    const pattern = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    if (this.passResetFrom.email.match(pattern) == null) {
                        errors.push('メールアドレスが不正です。');
                    }
                }

                if (errors.length > 0) {
                    console.log(errors);
                    this.$store.commit('auth/setPassResetErrorMessages', {email: errors})
                    return false;
                }
                return true;
            }
        }
    }
</script>
