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

          <div class="p-setting__datepicker">
            <input class="flatpickr" type="text">
          </div>
          <button class="c-button__add">予約する</button>
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
        />
      </div>

    </section>


  </main>

</template>

<script>
  import { mapGetters, mapActions } from "vuex";
  import TweetPanel from "./TweetPanel";
  export default {
    components:{
      TweetPanel
    },
    data() {
      return {
        id: this.$route.params.id,
        tweetText: '',
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
        fetchTwitterAccount: "twitterAccount/fetchTwitterAccount"
      }),
      onSubmit() {
      }
    }
  }
</script>
<!--文字数カウント-->
<!--https://blog.simmon.design/character-counter-in-vuejs/-->
