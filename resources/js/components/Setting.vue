<template>
  <main
    v-if="twitterAccount"
    class="l-main"
  >
    <form @submit.prevent="setting">

      <section class="p-panel">
        <div class="p-panel__account">
          <div class="p-panel__img"><a class="c-img__circle" :href="'https://twitter.com/' + twitterAccount.nickname" target="_blank"><img class="c-img__icon" :src="twitterAccount.avatar" alt="Twitterのアイコン"></a></div>
          <div class="p-panel__name">
            <div class="p-panel__name--name"><a :href="'https://twitter.com/' + twitterAccount.nickname" target="_blank">{{ twitterAccount.name }}</a></div>
            <div class=""><a :href="'https://twitter.com/' + twitterAccount.nickname" target="_blank">@{{ twitterAccount.nickname }}</a></div>
          </div>
        </div>
      </section>

      <section class="p-panel">
        <div class="p-panel__autoSetting">
          <h2 class="">自動フォロー</h2>
          <div class="p-setting">
            <h3 class="p-setting__title">ターゲットを設定してください</h3>
            <p class="">※ターゲットのフォロワーを<br>順次フォローします</p>
            <div class="">
              <input class="c-textBox" type="text" placeholder="@アカウント名">
              <button class="c-button__add">追加</button>
            </div>
            <div class="">
              <select name="" multiple="multiple" class="c-select">
                <option value="">@staff_takapon</option>
                <option value="">@masason</option>
                <option value="">@susumu_fujita</option>
                <option value="">@itoi_shigesato</option>
              </select>
              <button class="c-button__delete">削除</button>
            </div>
          </div>

          <div class="p-setting">
            <h3 class="p-setting__title">キーワードを設定してください</h3>
            <p class="">※ターゲットのフォロワーのプロフィール<br>内にあるキーワードを抽出条件にします</p>
            <li class="c-list">
              <label for="follow2"><ul class="c-list__radio"><input class="c-radio" type="radio" name="follow" id="follow2" /><br>必ず含む<br>(∩,AND)</ul></label>
              <label for="follow3"><ul class="c-list__radio"><input class="c-radio" type="radio" name="follow" id="follow3" /><br>除外ワード<br>(≠,NOT)</ul></label>
              <label for="follow1"><ul class="c-list__radio"><input class="c-radio" type="radio" name="follow" id="follow1" checked required /><br>いずれか<br>を含む<br>(U,OR)</ul></label>
            </li>
            <div class="p-setting">
              <div class="">
                <input class="c-textBox" type="text" placeholder="キーワードを入力">
                <button class="c-button__add">追加</button>
              </div>
              <div class="">
                <select name="" multiple="multiple" class="c-select">
                  <option value="">U ビジネス</option>
                  <option value="">U プログラミング</option>
                  <option value="">≠ MLM</option>
                  <option value="">U HTML</option>
                </select>
                <button class="c-button__delete">削除</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-panel">
        <div class="p-panel__autoSetting">
          <h2 class="">自動アンフォロー</h2>
          <div class="p-setting">
            <h3 class="p-setting__title">アンフォローの条件を設定してください</h3>
            <p class="">
              ※フォローしてから<br>
              <input class="c-input__number" type="number" value="7" min="7" max="" step="1" placeholder="7以上で入力してください" list="unfollow_days" required>日間
              <datalist id="unfollow_days">
                <option value="7"></option>
                <option value="15"></option>
                <option value="30"></option>
                <option value="45"></option>
              </datalist>
            </p>
            <p class="">片思いのユーザーをアンフォローする</p>
          </div>
        </div>
      </section>

      <section class="p-panel">
        <div class="p-panel__autoSetting">
          <h2 class="">自動いいね</h2>

          <div class="p-setting">
            <h3 class="p-setting__title">いいねする条件を設定してください</h3>
            <p class="">※設定されたキーワードが含まれる<br>ツイートに順次いいねをしていきます</p>
            <li class="c-list">
              <label for="like1"><ul class="c-list__radio"><input class="c-radio" type="radio" name="like" id="like1" checked required /><br>必ず含む<br>(∩,AND)</ul></label>
              <label for="like2"><ul class="c-list__radio"><input class="c-radio" type="radio" name="like" id="like2" /><br>いずれか<br>を含む<br>(U,OR)</ul></label>
              <label for="like3"><ul class="c-list__radio"><input class="c-radio" type="radio" name="like" id="like3" /><br>除外ワード<br>(≠,NOT)</ul></label>
            </li>
            <div class="p-setting">
              <div class="">
                <input class="c-textBox" type="text" placeholder="キーワードを入力">
                <button class="c-button__add">追加</button>
              </div>
              <div class="">
                <select name="" multiple="multiple" class="c-select">
                  <option value="">∩ vue</option>
                  <option value="">∩ プログラミング</option>
                  <option value="">≠ スクール</option>
                </select>
                <button class="c-button__delete">削除</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-panel p-panel__submit">
        <RouterLink to="/mypage"><button class="c-button__return">戻る</button></RouterLink>
          <button class="c-button__submit">設定を保存する</button>
      </section>
    </form>
  </main>

</template>

<script>
  import { mapGetters, mapActions } from "vuex";
  export default {

    data() {
      return {
        id: this.$route.params.id
      };
    },
    computed: {
      ...mapGetters({
        twitterAccount: "twitterAccount/twitterAccount"
      })
    },
    created: function() {
      this.fetchTwitterAccount(this.id).catch(() => {
        this.$router.push('/mypage');
      });
    },
    methods: {
      ...mapActions({
        fetchTwitterAccount: "twitterAccount/fetchTwitterAccount",
      }),
      async setting(){

      }
    }
  }
</script>
