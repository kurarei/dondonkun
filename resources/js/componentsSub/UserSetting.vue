<template>
  <div class="p-user">
    <form @submit.prevent="userSetting">
      <div v-if="userSettingErrorMessages">
        <ul v-if="userSettingErrorMessages.email">
          <li v-for="msg in userSettingErrorMessages.email" :key="msg">{{ msg }}</li>
        </ul>
      </div>
      <div class="p-user__email"><input v-model="emailResetForm.email" class="c-input__menu" type="email"
                                        placeholder="メールアドレス"></div>
      <div class="p-user__button">
        <button class="c-button__menu">設定を変更する</button>
      </div>
    </form>
    <RouterLink to="/withdraw">
      <div class="p-user__withdraw"><p>退会のお手続き</p></div>
    </RouterLink>
  </div>
</template>

<script>
    import {mapState} from 'vuex'

    export default {
        data() {
            return {
                emailResetForm: {
                    email: null,
                }
            }
        },
        created() {
            this.emailResetForm.email = this.$store.state.auth.user.email;
        },
        computed: {
            ...mapState({
                apiStatus: state => state.auth.apiStatus,
                userSettingErrorMessages: state => state.auth.userSettingErrorMessages,
            })
        },
        methods: {
            async userSetting() {
                let check = this.isValid();
                if (check) {
                    await this.$store.dispatch('auth/userSetting', this.emailResetForm)
                }

                // トップページに移動する
                if (this.apiStatus) {
                    //メッセージ表示
                    // this.$store.commit('message/setMessageFlg', 1)
                    this.$store.commit('message/setMessage', 'メールアドレスを変更しました')

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

                if (this.emailResetForm.email == null) {
                    errors.push('メールアドレスが空です。');
                } else {
                    //メールアドレスバリデーション
                    const pattern = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    if (this.emailResetForm.email.match(pattern) == null) {
                        errors.push('メールアドレスが不正です。');
                    }
                }

                if (errors.length > 0) {
                    console.log(errors);
                    this.$store.commit('auth/setUserSettingErrorMessages', {email: errors})
                    return false;
                }
                return true;
            }
        }
    }
</script>
