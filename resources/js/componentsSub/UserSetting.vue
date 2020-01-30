<template>
    <div class="p-user">
      <form action="" method="" class="">
          <div class="p-user__email"><input class="c-input__menu" type="email" placeholder="メールアドレス"></div>
          <div class="p-user__button">
              <button class="c-button__menu">設定を変更する</button>
          </div>
      </form>
      <RouterLink to="/withdraw"><div class="p-user__withdraw"><p>退会のお手続き</p></div></RouterLink>
    </div>
</template>

<script>
  export default {
  }
</script>
