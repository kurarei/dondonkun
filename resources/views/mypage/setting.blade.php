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
                <h1 class="p-nav__title"><a href="" class="">自動化設定</a></h1>
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
        <footer class="l-footer">
            Copyright © Kamitter. All Rights Reserved.
        </footer>
    </body>
</html>
