<template>
  <main
    v-if="twitterAccount"
    class="l-main"
  >



    <form @submit.prevent="onSubmit">

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
            <h3 class="p-setting__subTitle">ターゲットを設定してください</h3>
            <p class="">※ターゲットのフォロワーを<br>順次フォローします</p>
            <div class="">
              <input
                v-model="targetTwitterAccountName"
                type="text"
                class="c-textBox"
                placeholder="@アカウント名"
              >
              <button
                class="c-button__add"
                @click.prevent="onClickAddTargetTwitterAccount"
              >
                追加
              </button>
            </div>
            <div class="">
              <select v-model="selectedTargetAccounts" multiple="multiple" class="c-select">
                <option
                  v-for="targetAccount in twitterAccount.target_twitter_accounts"
                  :key="targetAccount.uid"
                  :value="targetAccount.uid"
                >
                  @{{ targetAccount.nickname }}
                </option>
              </select>
              <button
                class="c-button__delete"
                @click.prevent="onClickDeleteTargetTwitterAccounts"
              >
                削除
              </button>
            </div>
          </div>

          <div class="p-setting">
            <h3 class="p-setting__subTitle">キーワードを設定してください</h3>
            <p class="">※ターゲットのフォロワーのプロフィール<br>内にあるキーワードを抽出条件にします</p>
            <li class="c-list">
  <!--            <ul class="c-list__radio"><input class="c-radio" type="radio" name="follow" id="follow2" /><br><label for="follow2">必ず含む<br>(∩,AND)</label></ul>-->
              <label for="follow2">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterFollowCondition" class="c-radio" type="radio" name="follow" id="follow2" value="∩" /><br>必ず含む<br>(∩,AND)
                </ul>
              </label>
              <label for="follow3">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterFollowCondition" class="c-radio" type="radio" name="follow" id="follow3" value="≠" /><br>除外ワード<br>(≠,NOT)
                </ul>
              </label>
              <label for="follow1">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterFollowCondition" class="c-radio" type="radio" name="follow" id="follow1" value="U" /><br>いずれか<br>を含む<br>(U,OR)
                </ul>
              </label>
            </li>
            <div class="p-setting">
              <div class="">
                <input v-model="targetTwitterFollowKeyword" class="c-textBox" type="text" placeholder="キーワードを入力">
                <button
                  class="c-button__add"
                  @click.prevent="onClickAddTargetTwitterFollowKeyword"
                >
                  追加
                </button>
              </div>
              <div class="">
                <select v-model="selectedTargetTwitterFollowKeywords"  multiple="multiple" class="c-select">
                  <option
                    v-for="(targetKeyword, index) in twitterAccount.target_twitter_follow_keywords"
                    :key="index"
                    :value="`${targetKeyword.condition} ${targetKeyword.word}`"
                  >
                    {{ targetKeyword.condition }} {{ targetKeyword.word }}
                  </option>
                </select>
                <button
                  class="c-button__delete"
                  @click.prevent="onClickDeleteTargetTwitterFollowKeywords"
                >
                  削除
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-panel">
        <div class="p-panel__autoSetting">
          <h2 class="">自動アンフォロー</h2>
          <div class="p-setting">
            <h3 class="p-setting__subTitle">アンフォローの条件を設定してください</h3>
            <p class="">
              ※フォローしてから<br>
              <input
                v-model="twitterAccount.unfollow_range"
                class="c-input__number"
                type="number"
                min="7"
                step="1"
                placeholder="7以上で入力してください"
                list="unfollow_days"
              >
              日間
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
            <h3 class="p-setting__subTitle">いいねする条件を設定してください</h3>
            <p class="">※設定されたキーワードが含まれる<br>ツイートに順次いいねをしていきます</p>
            <li class="c-list">
              <label for="like1">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterLikeCondition" class="c-radio" type="radio" name="like" id="like1" value="∩" /><br>必ず含む<br>(∩,AND)
                </ul>
              </label>
              <label for="like2">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterLikeCondition" class="c-radio" type="radio" name="like" id="like2" value="U" /><br>いずれか<br>を含む<br>(U,OR)
                </ul>
              </label>
              <label for="like3">
                <ul class="c-list__radio">
                  <input v-model="targetTwitterLikeCondition" class="c-radio" type="radio" name="like" id="like3" value="≠" /><br>除外ワード<br>(≠,NOT)
                </ul>
              </label>
            </li>
            <div class="p-setting">
              <div class="">
                <input v-model="targetTwitterLikeKeyword" class="c-textBox" type="text" placeholder="キーワードを入力">
                <button
                  class="c-button__add"
                  @click.prevent="onClickAddTargetTwitterLikeKeyword"
                >
                  追加
                </button>
              </div>
              <div class="">
                <select v-model="selectedTargetTwitterLikeKeywords"  multiple="multiple" class="c-select">
                  <option
                    v-for="(targetKeyword, index) in twitterAccount.target_twitter_like_keywords"
                    :key="index"
                    :value="`${targetKeyword.condition} ${targetKeyword.word}`"
                  >
                    {{ targetKeyword.condition }} {{ targetKeyword.word }}
                  </option>
                </select>
                <button
                  class="c-button__delete"
                  @click.prevent="onClickDeleteTargetTwitterLikeKeywords"
                >
                  削除
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-panel p-panel__submit">
<!--        ホームボタンを設置したので、戻るボタンは仮で削除-->
<!--        <RouterLink to="/mypage"><button class="c-button__return">戻る</button></RouterLink>-->
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
        id: this.$route.params.id,
        targetTwitterAccountName: null,
        selectedTargetAccounts: [],
        targetTwitterFollowKeyword: null,
        targetTwitterFollowCondition: 'U',
        selectedTargetTwitterFollowKeywords: [],
        targetTwitterLikeKeyword: null,
        targetTwitterLikeCondition: 'U',
        selectedTargetTwitterLikeKeywords: [],
      };
    },
    components:{
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
        setMessage: "message/setMessage",
        fetchTwitterAccount: "twitterAccount/fetchTwitterAccount",
        updateTwitterAccount: "twitterAccount/updateTwitterAccount",
        addTargetTwitterAccount: "twitterAccount/addTargetTwitterAccount",
        deleteTargetTwitterAccounts: "twitterAccount/deleteTargetTwitterAccounts",
        addTargetTwitterFollowKeyword: "twitterAccount/addTargetTwitterFollowKeyword",
        deleteTargetTwitterFollowKeywords: "twitterAccount/deleteTargetTwitterFollowKeywords",
        addTargetTwitterLikeKeyword: "twitterAccount/addTargetTwitterLikeKeyword",
        deleteTargetTwitterLikeKeywords: "twitterAccount/deleteTargetTwitterLikeKeywords",
      }),
      onSubmit(){
        if (!this.twitterAccount.target_twitter_follow_keywords || this.twitterAccount.target_twitter_follow_keywords.length === 0) {
          return alert('自動フォローのキーワードは最低１つ必要になります。');
        }
        if (!this.twitterAccount.target_twitter_like_keywords || this.twitterAccount.target_twitter_like_keywords.length === 0) {
          return alert('自動いいねのキーワードは最低１つ必要になります。');
        }
        this.updateTwitterAccount(this.twitterAccount)
          .then(() => {
            this.setMessage('設定を変更しました。');
          })
          .catch(() => {
            alert('システムエラーが発生しました。管理者にお問い合わせ下さい。');
          })
      },
      onClickAddTargetTwitterAccount() {
        this.addTargetTwitterAccount({ twitterAccount: this.twitterAccount, name: this.targetTwitterAccountName })
          .catch(() => {
            alert(`@${this.targetTwitterAccountName}は、Twitterユーザーとして見つかりませんでした。`);
          })
      },
      onClickDeleteTargetTwitterAccounts() {
        this.deleteTargetTwitterAccounts({ twitterAccount: this.twitterAccount, ids: this.selectedTargetAccounts })
      },
      onClickAddTargetTwitterFollowKeyword() {
        if (!this.targetTwitterFollowKeyword) {
          return alert('キーワードを入力してください。')
        }
        this.addTargetTwitterFollowKeyword({ condition: this.targetTwitterFollowCondition, word: this.targetTwitterFollowKeyword })

        this.targetTwitterFollowKeyword = null
      },
      onClickDeleteTargetTwitterFollowKeywords() {
        this.deleteTargetTwitterFollowKeywords({ ids: this.selectedTargetTwitterFollowKeywords })
      },
      onClickAddTargetTwitterLikeKeyword() {
        if (!this.targetTwitterLikeKeyword) {
          return alert('キーワードを入力してください。')
        }
        this.addTargetTwitterLikeKeyword({ condition: this.targetTwitterLikeCondition, word: this.targetTwitterLikeKeyword })

        this.targetTwitterLikeKeyword = null
      },
      onClickDeleteTargetTwitterLikeKeywords() {
        this.deleteTargetTwitterLikeKeywords({ ids: this.selectedTargetTwitterLikeKeywords })
      }
    }
  }
</script>
