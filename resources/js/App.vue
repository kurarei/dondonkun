<template>
    <div>
<!--ヘッダー-->
        <Header />
<!--モーダル-->
<!--        <Modal />-->
<!--メイン-->
      <RouterView />
<!--フッター-->
        <Footer />


    </div>
</template>

<script>
  import Header from './components/Header'
  import Modal from './components/MenuModal'
  import Footer from './components/Footer'

  export default {
    components:{
      Header,
      Modal,
      Footer,
    }
  }
</script>
