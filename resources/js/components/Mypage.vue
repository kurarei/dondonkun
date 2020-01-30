<template>
  <main class="l-main">
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />
    <MypagePanel />

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

  export default {
    components:{
      MypagePanel
    },
  }
</script>

display: flex;
bottom: 50px;
position: fixed;
