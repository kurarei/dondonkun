<template>
  <main
    v-if="twitterAccount"
    class="l-main"
  >

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
      <form @submit.prevent="onSubmit" class="p-panel__autoSetting">
        <h2 class="">自動ツイート設定</h2>
        <div class="p-setting">
          <h3 class="p-setting__title">ツイートしたい内容を設定してください</h3>
          <p class="">{{ charaCount }}/140文字</p>
          <textarea class="p-setting__textarea" v-model="tweetText" placeholder="いまどうしてる？" maxlength="140" required></textarea>
          <div class="p-setting__dateTimePicker">
            <datetime format="YYYY-MM-DD H:i" v-model="tweetDatetime"></datetime>
          </div>
          <button
            type="submit"
            class="c-button__add"
          >
            予約する
          </button>
        </div>
      </form>
    </section>

    <section
      v-if="twitterAccount.twitter_tweet_reservations.length > 0"
      class="p-panel p-panel__tweet"
    >
      <div class="p-panel__autoSetting">
        <h2 class="">予約済ツイート</h2>
        <tweet-panel
          v-for="twitterTweetReservation in twitterAccount.twitter_tweet_reservations"
          :key="twitterTweetReservation.id"
          :reservation="twitterTweetReservation"
          @on-click-update="onUpdateTweetReservation"
          @on-click-delete="onDeleteTweetReservation"
        />
      </div>

    </section>


  </main>

</template>

<script>
  import { mapGetters, mapActions } from "vuex";
  import TweetPanel from "./TweetPanel";
  import datetime from 'vuejs-datetimepicker';

  export default {
    components:{
      TweetPanel,
      datetime
    },
    data() {
      return {
        id: this.$route.params.id,
        tweetText: '',
        // default: new Date(),
        tweetDatetime: '日時を設定してください'
      };
    },
    computed: {
      ...mapGetters({
        twitterAccount: "twitterAccount/twitterAccount"
      }),
      charaCount: function() {
        return this.tweetText.length;
      }
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
        postTweetReservation: "twitterAccount/postTweetReservation",
        updateTweetReservation: "twitterAccount/updateTweetReservation",
        deleteTweetReservation: "twitterAccount/deleteTweetReservation"
      }),
      onSubmit() {
        this.postTweetReservation({ twitterAccount: this.twitterAccount, data: { message: this.tweetText, reservation_datetime: this.tweetDatetime }})
          .then(() => {
            this.setMessage('予約投稿が完了しました');
          })
          .catch(() => {
            this.setMessage('システムエラーが発生しました。管理者にお問い合わせ下さい。');
          })

      },
      onUpdateTweetReservation(tweetReservation) {
        this.updateTweetReservation({ twitterAccount: this.twitterAccount, reservation: tweetReservation})
          .then(() => {
            this.setMessage('予約投稿が更新されました');
          })
          .catch(() => {
            this.setMessage('システムエラーが発生しました。管理者にお問い合わせ下さい。');
          })
      },
      onDeleteTweetReservation(tweetReservation) {
        this.deleteTweetReservation({ twitterAccount: this.twitterAccount, id: tweetReservation.id })
          .then(() => {
            this.setMessage('予約が削除されました');
          })
          .catch(() => {
            this.setMessage('システムエラーが発生しました。管理者にお問い合わせ下さい。');
          })
      }
    }
  }
</script>
<!--文字数カウント-->
<!--https://blog.simmon.design/character-counter-in-vuejs/-->
<!--日付入力-->
<!--https://www.npmjs.com/package/vuejs-datetimepicker-->
