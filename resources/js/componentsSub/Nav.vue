<template>
  <nav class="p-menu">
    <ul class="p-menu__ul">

      <li class="p-menu__list"><RouterLink to="/userSetting" class="c-link__menu" href="#">ユーザー情報を変更</RouterLink></li>

      <li class="p-menu__list"><RouterLink to="/passSetting" class="c-link__menu" href="#">パスワードを変更</RouterLink></li>
      <li class="p-menu__list"><a href="/auth/twitter" class="c-link__menu">アカウントを追加</a></li>

      <li class="p-menu__list"><RouterLink to="/account" class="c-link__menu" href="#">アカウントを解除</RouterLink></li>

      <li class="p-menu__list"><a class="c-link__menu" href="#">よくある質問</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お知らせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">プライバシーポリシー</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お問い合わせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">利用規約</a></li>
      <li class="p-menu__list"><RouterLink to="/logout" class="c-link__menu" href="#">ログアウト</RouterLink></li>
    </ul>
  </nav>
</template>

<script>
  export default {


  }
</script>
