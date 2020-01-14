<template>
    <div>
<!--ヘッダー-->
<!--        <TopHeader v-if="isLogin" @menuOpen="menuModalOpen" />-->
<!--        <Header v-else @menuOpen="menuModOpen="menuModalOpen" />-->
        <TopHeader v-if="isLogin" />
        <Header v-else />
<!--モーダル-->
<!--        <MenuModal :menuFlg="this.menuFlg"-->
        <MenuModal v-if="modalFlg" />
<!--                   @menuClose="MenuModalClose"-->
<!--メイン-->
<!--        <router-view name="main" @menuOpen="menuModalOpen"></router-view>-->
        <router-view name="main"></router-view>
<!--フッター-->
        <Footer />

    </div>
</template>

<script>
  import { INTERNAL_SERVER_ERROR } from "./util";

  import Header from './components/Header'
  import TopHeader from './components/TopHeader'
  import MenuModal from './components/MenuModal'
  import Footer from './components/Footer'

  export default {
    components:{
      Header,
      TopHeader,
      MenuModal,
      Footer,
    },
    data() {
      return {
        // menuFlg: '',
        modalFlg: ''
      }
    },
    methods: {
      //メニューの開け締め
    //   menuModalOpen: function(){
    //     this.menuFlg = true;
    //   },
    //   MenuModalClose: function(){
    //     this.menuFlg = false;
    //   }
    },
    computed: {
      //ヘッダーの切り替えをしています
      isLogin () {
        return this.$store.getters['auth/check']
      },
      //ヘッダーの出し分けをしています
      // username () {
      //   return this.$store.getters['auth/username']
      // },
      //エラーハンドリング
      errorCode () {
        return this.$store.state.error.code
      },
      //モーダルの管理をしたい
      isModal(){
        return this.$store.modal.modalFlg
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
