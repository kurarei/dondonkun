<template>
  <main class="l-main">
    <section class="p-panel">
      <div class="p-panel__account">
        <div class="p-panel__img"><a class="c-img__circle" href="#"><i class="far fa-user-circle"></i></a></div>
        <div class="p-panel__name">
          <div class=""><a href="#">アカウント名あああああああ１５</a></div>
          <div class=""><a href="#">@account_idaaa15</a></div>
        </div>
      </div>
    </section>

    <section class="p-panel">
      <div class="p-panel__autoFollow">
        <h2 class="">自動フォロー</h2>
        <div class="">
          <p class="">ターゲットアカウントを設定してください</p>
          <div class="">
            <input class="c-textBox" type="text" placeholder="@masason">
            <button class="c-button__add">追加</button>
          </div>
          <div class="">
            <select name="" multiple="multiple" class="c-select">
              <option value="">aaa</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
            </select>
            <button class="c-button__delete">削除</button>
          </div>
        </div>

        <div class="">
          <p class="">いいねするキーワードを設定してください</p>
          <li class="c-list">
            <ul><input class="c-radio" type="radio" name="follow" id="follow1" checked required /><label for="follow1">いずれか含む(U)</label></ul>
            <ul><input class="c-radio" type="radio" name="follow" id="follow2" /><label for="follow2">必ず含む(∩)</label></ul>
            <ul><input class="c-radio" type="radio" name="follow" id="follow3" /><label for="follow3">除外ワード(≠)</label></ul>
          </li>
          <div class="">
            <input class="c-textBox" type="text" placeholder="">
            <button class="c-button__add">追加</button>
          </div>
          <div class="">
            <select name="" multiple="multiple" class="c-select">
              <option value="">aaa</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
            </select>
            <button class="c-button__delete">削除</button>
          </div>
        </div>
      </div>
    </section>

    <section class="p-panel">
      <div class="p-panel__autoFollow">
        <h2 class="">自動アンフォロー</h2>
        <div class="">
          <p class="">アンフォローの条件を設定してください</p>
        </div>
        <div class="">
          <p class="">
            フォローしてから
            <input type="number" value="7" min="7" max="" step="1" placeholder="7以上で入力してください" list="unfollow_days" required>日間
            <datalist id="unfollow_days">
              <option value="7"></option>
              <option value="15"></option>
              <option value="30"></option>
              <option value="45"></option>
            </datalist>
          </p>
          <p class="">片思いのユーザーをアンフォローする</p>
        </div>
      </div>
    </section>

    <section class="p-panel">
      <div class="p-panel__autoFollow">
        <h2 class="">自動いいね</h2>

        <div class="">
          <p class="">フォローキーワードを設定してください</p>
          <li class="c-list">
            <ul><input class="c-radio" type="radio" name="like" id="like1" checked required /><label for="like1">必ず含む(∩)</label></ul>
            <ul><input class="c-radio" type="radio" name="like" id="like2" /><label for="like2">いずれか含む(U)</label></ul>
            <ul><input class="c-radio" type="radio" name="like" id="like3" /><label for="like3">除外ワード(≠)</label></ul>
          </li>
          <div class="">
            <input class="c-textBox" type="text" placeholder="">
            <button class="c-button__add">追加</button>
          </div>
          <div class="">
            <select name="" multiple="multiple" class="c-select">
              <option value="">aaa</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
              <option value="">bbb</option>
            </select>
            <button class="c-button__delete">削除</button>
          </div>
        </div>
      </div>
    </section>

    <section class="p-panel">
      <div class="">
        <button class="c-button__delete">戻る</button>
        <button class="c-button__add">設定を保存する</button>
      </div>
    </section>

  </main>

</template>

<script>
  export default {

  }
</script>
