<template>
    <div>
<!--ヘッダー-->
        <TopHeader v-if="isLogin" @menuOpen="menuModalOpen" />
        <Header v-else @menuOpen="menuModalOpen" />
<!--モーダル-->
        <MenuModal :menuFlg="this.menuFlg"
                   v-if="menuFlg"
                   @menuClose="MenuModalClose"
        />
<!--メイン-->
        <router-view name="main"></router-view>
<!--フッター-->
        <Footer />

    </div>
</template>

<script>
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
        menuFlg: ''
      }
    },
    methods: {
      //メニューの開け締め
      menuModalOpen: function(){
        this.menuFlg = true;
      },
      MenuModalClose: function(){
        this.menuFlg = false;
      }
    },
    computed: {
      //ヘッダーの切り替えをしています
      isLogin () {
        return this.$store.getters['auth/check']
      },
      username () {
        return this.$store.getters['auth/username']
      }
    }
  }
</script>
