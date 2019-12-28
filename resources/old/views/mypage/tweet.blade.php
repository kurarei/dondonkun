<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="l-header">
            <div class="p-nav">
                <h1 class="p-nav__title"><a href="" class="">自動ツイート</a></h1>
                <div class="c-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="p-navMenu">
                    <h2 class="p-navMenu__title">〇〇〇〇〇〇さん、こんにちは。</h2>
                    <ul class="p-menu">
                        <li class="p-menu__list"><a class="c-link__menu" href="#">ユーザー情報を変更</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">パスワードを変更</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">アカウントを追加</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">アカウントを解除</a></li>
                        {{--                        <li class="p-menu__list"><a class="c-link__menu" href="#">全自動システムを停止</a></li>--}}
                        <li class="p-menu__list"><a class="c-link__menu" href="#">よくある質問</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">お知らせ</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">プライバシーポリシー</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">お問い合わせ</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">利用規約</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">ログアウト</a></li>
                        <li class="p-menu__list"><a class="c-link__menu" href="#">退会</a></li>
                    </ul>
                </nav>

            </div>
        </header>

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
                <div class="">
                    <h2 class="">自動ツイート設定</h2>
                    <p class="">ツイートしたい内容を設定してください</p>
                    <textarea class="" cols="30" rows="10" placeholder="記入してください">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ１４０</textarea>
                    <p class="">140/140文字</p>
{{--                    <input id="calendar" data-mindate=today type="text" />--}}
                    <input type="datetime-local">
                    <button class="c-button__add">予約する</button>
                </div>
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

        <footer class="l-footer">
            Copyright © Kamitter. All Rights Reserved.
        </footer>
{{--        <script src="{{ asset('js/app.js') }}"></script>--}}
    </body>
</html>
