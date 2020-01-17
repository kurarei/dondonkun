<template>
  <nav class="p-menu">
    <ul class="p-menu__ul">
      <RouterLink to="/userSetting"><li class="p-menu__list"><a class="c-link__menu">ユーザー情報を変更</a></li></RouterLink>
      <RouterLink to="/passSetting"><li class="p-menu__list"><a class="c-link__menu" href="#">パスワードを変更</a></li></RouterLink>
      <RouterLink to=""><li class="p-menu__list"><a class="c-link__menu" href="#">アカウントを追加</a></li></RouterLink>
      <RouterLink to="/account"><li class="p-menu__list"><a class="c-link__menu" href="#">アカウントを解除</a></li></RouterLink>
      <li class="p-menu__list"><a class="c-link__menu" href="#">よくある質問</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お知らせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">プライバシーポリシー</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">お問い合わせ</a></li>
      <li class="p-menu__list"><a class="c-link__menu" href="#">利用規約</a></li>
      <RouterLink to="/logout"><li class="p-menu__list"><a class="c-link__menu">ログアウト</a></li></RouterLink>
    </ul>
  </nav>
</template>

<script>
  export default {


  }
</script>
