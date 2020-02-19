<template>
  <main class="l-main">
<!--メッセージをここに出します-->

    <template v-if="twitterAccounts && twitterAccounts.length > 0">
      <mypage-panel
        v-for="(twitterAccount, index) in twitterAccounts"
        :key="index"
        v-bind.sync="twitterAccount"
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

  export default {
    components:{
      MypagePanel
    },
    computed: {
      ...mapGetters({
        twitterAccounts: "twitterAccount/twitterAccounts"
      }),
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

