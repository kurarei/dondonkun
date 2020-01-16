<template>
    <main class="l-main l-main__top">
        <section class="p-top__main1">
            <div class="p-hero__title">
                <h1 class=""><i class="fas fa-cloud-upload-alt"></i> フォロワー<br />どんどん君</h1>
                <p class="">Twitterマーケティングの定番システム<i class="fas fa-crown"></i></p>
            </div>
            <div class="p-hero__button">
<!--              <button class="c-button__menu">無料で始めてみる</button> TODO-->
              <RouterLink class="c-button__menu" to="/register" @click.native="menuOpen">無料で始めてみる</RouterLink>
            </div>
        </section>




        <section class="p-top__sub1">
            <div class="p-sub1__title">
                <h2 class="">結果を出し続けるシステム</h2>
                <p class="">ビジネスにスピードは必要不可欠です。</p>
                <p class="">フォロワーどんどん君は、圧倒的なスピードでフォロワーを増やし続けます。</p>
                <p class="">競合他社に勝ち続けましょう。</p>
            </div>
            <div class="p-sub1__img">
                <img src="image/result.png" alt="result">
            </div>
        </section>


        <section class="p-top__sub2">
            <div class="p-top__sub2--rap">
                <div class="p-sub2__title">
                    <h2 class="">充実の7機能</h2>
                    <p class="">自動化であなたのビジネスを加速させます。</p>
                </div>
                <div class="p-sub2__auto">
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fa fa-user-plus"></i>
                            <h3 class="">自動フォロー</h3>
                            <p>あなたが設定したキーワードを元に、自動フォローを行います。</p>
                        </div>
                    </div>
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fa fa-user-times"></i>
                            <h3 class="">自動アンフォロー</h3>
                            <p>設定条件を元に片思い、非アクティブユーザーを自動でアンフォローします。</p>
                        </div>
                    </div>
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fa fa-heart"></i>
                            <h3 class="">自動いいね</h3>
                            <p class="">キーワードを元に、自動でいいねをします。</p>
                        </div>
                    </div>
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fa fa-comment"></i>
                            <h3 class="">自動ツイート</h3>
                            <p class="">指定した日時に自動でツイートを行います。</p>
                        </div>
                    </div>
                </div>

                <div class="p-sub2__function">
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fas fa-kiwi-bird"></i>
                            <h3 class="">シンプル設計</h3>
                            <p class="">直感的に操作ができる分かりやすい設計になっています。</p>
                        </div>
                    </div>
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fas fa-users"></i>
                            <h3 class="">複数アカウント管理</h3>
                            <p class="">最大10アカウントまでアカウントを利用することが出来ます。</p>
                        </div>
                    </div>
                    <div class="p-sub2__card">
                        <div class="">
                            <i class="fas fa-envelope"></i>
                            <h3 class="">メールお知らせ機能</h3>
                            <p class="">自動機能の完了や、エラー発生時にはメール通知を行います。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-top__main2">
            <div class="p-hero__title">
                <h1 class=""><i class="fas fa-cloud-upload-alt"></i> フォロワー<br />どんどん君</h1>
                <p class="">Twitterマーケティングの定番システム<i class="fas fa-crown"></i></p>
            </div>
            <div class="p-hero__button">
                <button class="">無料で始めてみる</button>
            </div>
        </section>

        <section class="p-top__sub3">
            <div class="p-sub3__title">
                <h2 class="">安心・安全の理由</h2>
                <p class="">お客様に安心・安全にご利用いただくために、<br />フォロワーどんどん君は様々な仕組みを持っています。</p>
            </div>
            <div class="p-sub3">
                <div class="p-sub3__card">
                    <div class="">
                        <i class="fas fa-leaf"></i>
                        <h3 class="">安心の使用感</h3>
                        <p class="">利用者の設定無しに、フォロー、ツイート、DM等が実行されることはありません。</p>
                    </div>
                </div>
                <div class="p-sub3__card">
                    <div class="">
                        <i class="fab fa-twitter"></i>
                        <h3 class="">ツイッターの利用規約に<br />完全準拠</h3>
                        <p class="">アカウントロックや凍結に最大限の配慮を行った仕組みになっています。</p>
                    </div>
                </div>
                <div class="p-sub3__card">
                    <div class="">
                        <i class="fas fa-user-shield"></i>
                        <h3 class="">高い安全性</h3>
                        <p class="">最新のシステムを使用し、情報漏洩が起こらない仕組みになっています。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-top__sub4">
            <div class="p-top__sub4--rap">
                <div class="p-sub4__title">
                    <h2 class="">よくある質問Q&A</h2>
                </div>
                <div class="p-sub4__top">
                    <div class="p-sub4__card">
                        <h3 class="">Q.無料で試せますか?</h3>
                        <p class="">A.全て無料で使用できます。<br />ご安心ください。</p>
                    </div>
                    <div class="p-sub4__card">
                        <h3 class="">Q.フォローとアンフォローの処理は自動で行われるのですか？</h3>
                        <p class="">A.最初に自動化設定をしたあと、マイページで自動化ボタンをONにしてください。
                            処理が完了したらメールでお知らせします。</p>
                    </div>
                </div>
                <div class="p-sub4__bottom">
                    <div class="p-sub4__card">
                        <h3 class="">Q.稼働中に自分のパソコンを起動させておく必要がありますか?</h3>
                        <p class="">A.稼働中にパソコンを起動させておく必要はありません。
                            最初に設定をしておけば、あとは自動で実行します。</p>
                    </div>
                    <div class="p-sub4__card">
                        <h3 class="">Q.このツールを使っても、なかなかフォロワーさんが増えないのですが。</h3>
                        <p class="">A.フォローした人が全員フォローを返してくれる訳ではないです。
                            普段のツイート内容や、プロフィール欄を充実させてみましょう。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-top__main3">
            <div class="p-hero__title">
                <h1 class=""><i class="fas fa-cloud-upload-alt"></i>フォロワー<br />どんどん君</h1>
                <p class="">Twitterマーケティングの定番システム<i class="fas fa-crown"></i></p>
            </div>
            <div class="p-hero__button">
                <button class="c-button__menu">無料で始めてみる</button>
            </div>
        </section>



    </main>
</template>

<script>
  export default {
    data(){
      return {}
    },
    methods: {
      menuOpen: function(){
        this.$store.commit('modal/setModalFlg', true)
      }
    }
  }
</script>
