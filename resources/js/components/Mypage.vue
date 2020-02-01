<template>
  <main class="l-main">

    <Message />

    <template v-if="twitterAccounts && twitterAccounts.length > 0">
      <mypage-panel
        v-for="(twitterAccount, index) in twitterAccounts"
        :key="index"
        :account="twitterAccount"
      />
    </template>

    <section>
      <div class="p-addAccount">
        <a href="/auth/twitter" class="c-button__addAccount"><i class="fab fa-twitter"></i> アカウントを追加</a>
      </div>
    </section>
    <!-- </div> -->
  </main>
</template>


<script>
  import MypagePanel from "./MypagePanel";
  import Message from "../componentsSub/Message";

  export default {
    components:{
      MypagePanel,
      Message
    },
    data() {
      return {
        twitterAccounts: null
      };
    },
    created: function() {
      this.fetchTwitterAccounts();
    },
    methods: {
        fetchTwitterAccounts() {
            axios.get("/api/twitter-accounts").then(response => {
                this.twitterAccounts = response.data || null;
            });
        },
    }
  }
</script>

