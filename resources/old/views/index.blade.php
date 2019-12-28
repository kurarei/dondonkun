<!doctype html>
<html lang="ja">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="TwitterのAPIを使って、自動でターゲットを見つけ出し、自動フォローや自動いいねをしたり、自動ツイートができるWEBサービス。
        ツイッターマーケティングでビジネスを無料で強力サポート。大手企業やインフルエンサーがフォロワー獲得に利用しています。" />
        <meta name="keywords" content="Twitter,自動フォロー,フォロワー,自動いいね,自動ツイート,マーケティング,ビジネス">

{{--   ogpタグ TODO     --}}
        <meta property="og:url" content="URL" />
        <meta property="og:title" content="タイトル" />
        <meta property="og:description" content="抜粋" />
        <meta property="og:image" content="画像のURL" />
        <meta property="og:type" content="タイプ">
        <meta property="og:site_name" content="サイト名" />
        <meta property="og:locale" content="ja_JP(ページの言語)" />
        <meta name="twitter:card" content="Twitterに表示するカードの種類" />
        <meta name="twitter:site" content="Twitterのユーザー名(@xxxx)" />

        <title>フォロワーどんどん君|Twitterマーケティングの定番システム|トップページ</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
{{--アイコン、フォント読み込み        --}}
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app"></div>

        <header class="l-header l-header__top">
            <div class="p-nav">
                <div class="p-nav__login">ログイン</div>
                <div class="c-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="p-modal__mask">
                    <div class="p-modal__container">
                        <div class="p-menuNav">
                            <h2 class="p-menuNav__title"><i class="fas fa-cloud-upload-alt"></i> フォロワーどんどん君</h2>
                            <div class="p-menuNav__close"><i class="fas fa-times"></i></div>
                        </div>
{{--                            トップメニュー--}}
                        <div class="p-menu">
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
                                <button class="c-button__menu">無料で始めてみる</button>
                            </div>
                            <div class="p-menu__login"><p>アカウントをお持ちの方</p></div>
                        </div>

{{--                            ログイン--}}
{{--                            <div class="p-login">--}}
{{--                                <form action="" method="" class="">--}}
{{--                                    <div class="p-login__email"><input class="c-input__menu" type="email" placeholder="メールアドレス"></div>--}}
{{--                                    <div class="p-login__pass"><input class="c-input__menu" type="password" placeholder="パスワード(8文字以上)"></div>--}}
{{--                                    <div class="p-login__omit">--}}
{{--                                        <input class="" type="checkbox" id="login" />--}}
{{--                                        <label for="login">次回の入力を省略する</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="p-login__button">--}}
{{--                                        <button class="c-button__menu">ログインする</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="p-login__reset"><p>ログイン出来ない場合</p></div>--}}
{{--                                <div class="p-login__register"><p>アカウントをお持ちでない方</p></div>--}}
{{--                            </div>--}}

{{--                            新規登録--}}
{{--                            <div class="p-register">--}}
{{--                                <form action="" method="">--}}
{{--                                    <div class="p-register__email">--}}
{{--                                        <input class="c-input__menu" type="email" placeholder="メールアドレス">--}}
{{--                                    </div>--}}
{{--                                    <div class="p-register__pass">--}}
{{--                                        <input class="c-input__menu" type="password" placeholder="パスワード(8文字以上)">--}}
{{--                                    </div>--}}
{{--                                    <div class="p-register__button">--}}
{{--                                        <button class="c-button__menu">この内容で登録する</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="p-register__login"><p>アカウントをお持ちの方</p></div>--}}
{{--                            </div>--}}

{{--                            パスワードリセット--}}
{{--                            <div class="p-reset">--}}

{{--                                <form action="" method="" class="">--}}

{{--                                    <div class="p-reset__email">--}}
{{--                                        <h2 class="p-reset__title"><i class="fas fa-lock"></i> ログインできない場合</h2>--}}
{{--                                        <p class="p-reset__text">パスワード再設定用のログインリンクをお送りしますので、メールアドレスを入力してください。--}}
{{--                                        </p>--}}
{{--                                        <input class="c-input__menu" type="email" placeholder="メールアドレス">--}}
{{--                                    </div>--}}

{{--                                    <div class="p-reset__button">--}}
{{--                                        <button class="c-button__menu">リンクを送信する</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="p-reset__register"><p>新規登録する</p></div>--}}
{{--                                <div class="p-reset__login"><p>ログインに戻る</p></div>--}}

{{--                            </div>--}}

{{--                        ユーザー情報変更--}}
{{--                            <div class="p-user">--}}
{{--                                <form action="" method="" class="">--}}
{{--                                    <div class="p-user__name"><input class="c-input__menu" type="text" placeholder="お名前"></div>--}}
{{--                                    <div class="p-user__email"><input class="c-input__menu" type="email" placeholder="メールアドレス"></div>--}}
{{--                                    <div class="p-user__button">--}}
{{--                                        <button class="c-button__menu">設定を変更する</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="p-user__withdraw"><p>退会のお手続き</p></div>--}}
{{--                            </div>--}}

{{--                            パスワード変更--}}
{{--                            <div class="p-pass">--}}
{{--                                <form action="" method="" class="">--}}
{{--                                    <div class="p-pass__pass"><input class="c-input__menu" type="password" placeholder="新しいパスワード"></div>--}}
{{--                                    <div class="p-pass__rePass"><input class="c-input__menu" type="password" placeholder="新しいパスワード(確認)"></div>--}}
{{--                                    <div class="p-pass__button">--}}
{{--                                        <button class="c-button__menu">パスワードを変更する</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            退会--}}
{{--                        <div class="p-withdraw">--}}
{{--                            <form action="" method="" class="">--}}
{{--                                 <div class="p-withdraw__button">--}}
{{--                                    <button class="c-button__menu">退会する</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}



                    </div>
                </div>
            </div>
        </header>

        <main class="l-main l-main__top">
            <section class="p-top__main1">
                <div class="p-hero__title">
                    <h1 class=""><i class="fas fa-cloud-upload-alt"></i> フォロワー<br />どんどん君</h1>
                    <p class="">Twitterマーケティングの定番システム<i class="fas fa-crown"></i></p>
                </div>
                <div class="p-hero__button">
                    <button class="c-button__menu">無料で始めてみる</button>
                </div>
            </section>

{{--            <section class="">--}}
{{--                --}}
{{--            </section>--}}








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
        <footer class="l-footer">
            © フォロワーどんどん君. All Rights Reserved.
        </footer>

    </body>
</html>
