<template>
    <nav class="p-menu">
      <ul class="p-menu__ul">
          <li class="p-menu__list"><a class="c-link__menu" href="#">機能一覧</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">安心・安全の理由</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">よくある質問Q&A</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">お知らせ</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">プライバシーポリシー</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">お問い合わせ</a></li>
          <li class="p-menu__list"><a class="c-link__menu" href="#">利用規約</a></li>
      </ul>
      <div class="p-menu__register">
        <RouterLink to="/register"><button class="c-button__menu">無料で始めてみる</button></RouterLink>
      </div>
      <RouterLink to="/login" class="p-menu__login"><p>アカウントをお持ちの方</p></RouterLink>
    </nav>
</template>

<script>
  export default {
  }
</script>
