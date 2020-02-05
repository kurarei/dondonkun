<template>
  <main class="l-main">
    <section class="p-panel">
      <div class="p-panel__account">
        <div class="p-panel__img"><a class="c-img__circle" href="#"><i class="far fa-user-circle"></i></a></div>
        <div class="p-panel__name">
          <div class="p-panel__name--name"><a href="#">アカウント名あああああああ１５</a></div>
          <div class=""><a href="#">@account_idaaa15</a></div>
        </div>
      </div>
    </section>

    <section class="p-panel">
      <form @submit.prevent="tweet" class="p-panel__autoSetting">
        <h2 class="">自動ツイート設定</h2>
        <div class="p-setting">
          <h3 class="p-setting__title">ツイートしたい内容を設定してください</h3>
          <p class="">{{ charaCount }}/140文字</p>
          <textarea class="p-setting__textarea" v-model="tweetText" placeholder="いまどうしてる？" maxlength="140" required></textarea>

          <div class="p-setting__datepicker">
            <input class="flatpickr" type="text">
          </div>
          <button class="c-button__add">予約する</button>
        </div>
      </form>
    </section>

    <section class="p-panel">
      <h2 class="">予約済ツイート</h2>
      <div class="">
        <p class=""><button class="c-button__delete">削除</button> 予約日時 2019/12/24 12:00</p>
        <p class="">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ１４０</p>
      </div>

      <div class="">
        <p class=""><button class="c-button__delete">削除</button> 予約日時 2019/12/24 12:00</p>
        <p class="">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ１４０</p>
      </div>

      <div class="">
        <p class=""><button class="c-button__delete">削除</button> 予約日時 2019/12/24 12:00</p>
        <p class="">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ１４０</p>
      </div>

      <div class="">
        <p class=""><button class="c-button__delete">削除</button> 予約日時 2019/12/24 12:00</p>
        <p class="">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ１４０</p>
      </div>
    </section>

    <section class="p-panel">
      <button class="c-button__delete">戻る</button>
    </section>

  </main>

</template>

<script>
  export default {
    data() {
      return {
        tweetText: '',

      };
    },
    components: {

    },

    computed: {
      charaCount: function() {
        return this.tweetText.length;
      }
    },
    methods: {
      async setting(){
      }
    }
  }
</script>
<!--文字数カウント-->
<!--https://blog.simmon.design/character-counter-in-vuejs/-->
