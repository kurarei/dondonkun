<template>
  <div class="">
    <template v-if="twitterAccounts && twitterAccounts.length > 0">
      <account-panel
        v-for="(twitterAccount, index) in twitterAccounts"
        :key="index"
        :account="twitterAccount"
        @on-click-delete="deleteTwitterAccount"
      />
    </template>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from "vuex";
  import AccountPanel from "../componentsSub/AccountPanel"

  export default {
    components:{
      AccountPanel
    },
    computed: {
        ...mapGetters({
            twitterAccounts: "twitterAccount/twitterAccounts"
        })
    },
    created: function() {
      this.fetchTwitterAccounts();
    },
    methods: {
      ...mapActions({
        fetchTwitterAccounts: "twitterAccount/fetchTwitterAccounts",
        deleteTwitterAccount: "twitterAccount/deleteTwitterAccount",
      })
    }
  }
</script>
