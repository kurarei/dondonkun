<template>
  <nav class="p-menu">
    <ul class="p-menu__ul">

      <RouterLink to="/userSetting" class="c-link__menu" href="#"><li class="p-menu__list">ユーザー情報を変更</li></RouterLink>

      <RouterLink to="/passSetting" class="c-link__menu" href="#"><li class="p-menu__list">パスワードを変更</li></RouterLink>
      <a href="/auth/twitter" class="c-link__menu"><li class="p-menu__list">アカウントを追加</li></a>

      <RouterLink to="/account" class="c-link__menu" href="#"><li class="p-menu__list">アカウントを解除</li></RouterLink>

      <li class="p-menu__list"><a class="c-link__menu" href="#">よくある質問</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お知らせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">プライバシーポリシー</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お問い合わせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">利用規約</a></li>
      <RouterLink to="/logout" class="c-link__menu" href="#"><li class="p-menu__list">ログアウト</li></RouterLink>
    </ul>
  </nav>
</template>

<script>
  export default {


  }
</script>
