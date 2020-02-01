<template>
  <section class="p-panel">
    <div class="p-panel__account">
<!--      <div class="p-panel__img"><a class="c-img__circle" href="#"><i class="far fa-user-circle"></i></a></div>-->
      <div class="p-panel__img"><a class="c-img__circle" href="#"><img class="c-img__icon" :src="account.avatar" alt="Twitterのアイコン"></a></div>
      <div class="p-panel__name">
        <div class=""><a href="#">{{ account.name }}</a></div>
        <div class=""><a href="#">@{{ account.nickname }}</a></div>
      </div>
    </div>
    <div class="p-panel__auto">
      <div class="p-panel__setting">
        <RouterLink to="/setting"><div class=""><button class="c-button__auto"><i class="fa fa-user-cog"></i> 自動化設定</button></div></RouterLink>
        <RouterLink to="/tweet"><div class=""><button class="c-button__auto"><i class="fa fa-comment"></i> 自動ツイート</button></div></RouterLink>
      </div>
      <div class="p-panel__button">
        <table class="c-table">
          <tr>
            <td><i class="fa fa-user-plus"></i> フォロー</td>
            <td><input type="button" class="c-button__switch" value="OFF"></td>
          </tr>
          <tr>
            <td><i class="fa fa-user-times"></i> アンフォロー</td>
            <td><input type="button" class="c-button__switch" value="OFF"></td>
          </tr>
          <tr>
            <td><i class="fa fa-heart"></i> いいね</td>
            <td><input type="button" class="c-button__switch" value="OFF"></td>
          </tr>
        </table>
      </div>

    </div>
  </section>


</template>

<script>
  export default {
    props: {
        account: {
            type: Object,
            require: true,
            default: null
        }
    }
  }
</script>
