<template>
  <div class="p-pass">
    <form @submit.prevent="passSetting">
      <div v-if="passSettingErrorMessages">
        <ul v-if="passSettingErrorMessages.password">
          <li v-for="msg in passSettingErrorMessages.password" :key="msg">{{ msg }}</li>
        </ul>
      </div>
      <div class="p-pass__pass"><input v-model="passResetForm.password" class="c-input__menu" type="password"
                                       placeholder="新しいパスワード(8文字以上)"></div>
      <div class="p-pass__rePass"><input v-model="passResetForm.password_confirmation" class="c-input__menu"
                                         type="password" placeholder="新しいパスワード(確認)"></div>
      <div class="p-pass__button">
        <button class="c-button__menu">パスワードを変更する</button>
      </div>
    </form>
  </div>
</template>

<script>
    import {mapState} from 'vuex'
    import {OK, UNPROCESSABLE_ENTITY} from '../util'

    export default {
        data() {
            return {
                passResetForm: {
                    password: null,
                    password_confirmation: null,
                }
            }
        },
        computed: {
            ...mapState({
                apiStatus: state => state.auth.apiStatus,
                passSettingErrorMessages: state => state.auth.passSettingErrorMessages,
            })
        },
        methods: {
            async passSetting() {
                let check = this.isValid();
                if (check) {
                    console.log("try");
                    await this.$store.dispatch('auth/passSetting', this.passResetForm)
                }
                console.log('aaa')

                // トップページに移動する
                if (this.apiStatus) {
                  // トップページに移動する
                  // this.$router.push('/mypage')
                  // this.menuClose()
                }

            },
            isValid: function () {
                let errors = [];

                if (this.passResetForm.password == null) {
                    errors.push('パスワードが空です。');
                } else if (this.passResetForm.password.length < 8) {
                    errors.push('パスワードは8文字以上で入力してください。');
                }
                if (this.passResetForm.password_confirmation == null) {
                    errors.push('確認用パスワードが空です。');
                }

                if (this.passResetForm.password != this.passResetForm.password_confirmation) {
                    errors.push('パスワードが一致しません。');
                }
                if (errors.length > 0) {
                    console.log(errors);
                    this.$store.commit('auth/setPassSettingErrorMessages', {password: errors})
                    return false;
                }
                return true;
            }

        }
    }
</script>
