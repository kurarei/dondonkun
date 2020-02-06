<template>
    <div>
<!--ヘッダー-->
<!--        <TopHeader v-if="isLogin" @menuOpen="menuModalOpen" />-->
<!--        <Header v-else @menuOpen="menuModOpen="menuModalOpen" />-->
        <Header v-if="isLogin" />
        <TopHeader v-else />
<!--モーダル-->
<!--        <MenuModal :menuFlg="this.menuFlg"-->
        <MenuModal v-if="isModal" />
<!--                   @menuClose="MenuModalClose"-->
<!--メイン-->
<!--        <router-view name="main" @menuOpen="menuModalOpen"></router-view>-->
        <router-view name="main"></router-view>
<!--フッター-->
        <Footer v-if="isLogin"/>
        <TopFooter v-else />
    </div>
</template>

<script>
  import { INTERNAL_SERVER_ERROR } from "./util";

  import Header from './componentsSub/Header'
  import TopHeader from './componentsTop/TopHeader'
  import MenuModal from './componentsSub/MenuModal'
  import Footer from './componentsSub/Footer'
  import TopFooter from "./componentsTop/TopFooter";

  export default {
    components:{
      Header,
      TopHeader,
      MenuModal,
      Footer,
      TopFooter,
    },
    data: function() {
      return {
        modalFlg: ''
      }
    },
    methods: {

    },
    computed: {
      //ヘッダーの切り替えをしています
      isLogin () {
        return this.$store.getters['auth/check']
      },
      //エラーハンドリング
      errorCode () {
        return this.$store.state.error.code
      },
      //モーダルの開閉
      isModal: {
        cache: false,//https://012-jp.vuejs.org/guide/computed.html
        get: function () {
          return this.$store.getters['modal/modalFlg']
        }
      }
    },
    watch: {
      errorCode: {
        handler (val) {
          if (val === INTERNAL_SERVER_ERROR) {
            this.$router.push('/500')
          }
        },
        immediate: true
      },
      $route () {
        this.$store.commit('error/setCode', null)
      }
    }
  }

</script>
