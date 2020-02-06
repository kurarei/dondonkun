<template>
  <main class="l-main">
<!--メッセージをここに出します-->
    <Message v-if="isMessage"/>

    <template v-if="twitterAccounts && twitterAccounts.length > 0">
      <mypage-panel
        v-for="(twitterAccount, index) in twitterAccounts"
        :key="index"
        :account="twitterAccount"
      />
    </template>

    <section>
      <div class="">
        <a href="/auth/twitter" class="c-button__addAccount"><i class="fab fa-twitter"></i> アカウントを追加</a>
      </div>
    </section>
    <!-- </div> -->
  </main>
</template>


<script>
  import { mapGetters, mapActions } from "vuex";
  import MypagePanel from "./MypagePanel";
  import Message from "../componentsSub/Message";

  export default {
    components:{
      MypagePanel,
      Message
    },
    computed: {
      ...mapGetters({
        twitterAccounts: "twitterAccount/twitterAccounts"
      }),
      isMessage: {
        cache: false,//https://012-jp.vuejs.org/guide/computed.html
        get: function () {
          return this.$store.getters['message/messageFlg']
        }
      }
    },
    created: function() {
      this.fetchTwitterAccounts();
    },
    methods: {
      ...mapActions({
        fetchTwitterAccounts: "twitterAccount/fetchTwitterAccounts",
      })
    }
  }
</script>

