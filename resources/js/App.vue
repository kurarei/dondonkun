<template>
    <div>
<!--ヘッダー-->
        <Header @menuOpen="menuModalOpen" />
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
  import MenuModal from './components/MenuModal'
  import Footer from './components/Footer'

  export default {
    components:{
      Header,
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


    }
  }
</script>
