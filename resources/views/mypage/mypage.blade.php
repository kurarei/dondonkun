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
          <h1 class="p-nav__title"><a href="" class="">フォロワーどんどん君</a></h1>
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

              <div class="p-menu">
                <ul class="p-menu__ul">
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
                </ul>
              </div>

            </div>
          </div>
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
                <div class="p-panel__auto">
                    <div class="p-panel__setting">
                        <div class=""><button class="c-button__auto"><i class="fa fa-user-cog"></i> 自動化設定</button></div>
                        <div class=""><button class="c-button__auto"><i class="fa fa-comment"></i> 自動ツイート</button></div>
                    </div>
                    <div class="p-panel__button">
                        <table class="c-table">
                            <tr>
                                <td><i class="fa fa-user-plus"></i> フォロー</td>
                                <td><input type="button" class="c-button__switch" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-user-times"></i> アンフォロー</td>
                                <td><input type="button" class="c-button__switch" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-heart"></i> いいね</td>
                                <td><input type="button" class="c-button__switch" value="OFF"></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </section>
            <section class="p-panel">
                <div class="p-panel__account">
                    <div class="p-panel__img"><a class="c-img__circle" href="#"><i class="far fa-user-circle"></i></a></div>
                    <div class="p-panel__name">
                        <div class=""><a href="#">アカウント名あああああああ１５</a></div>
                        <div class=""><a href="#">@account_idaaa15</a></div>
                    </div>
                </div>
                <div class="p-panel__auto">
                    <div class="p-panel__setting">
                        <div class=""><button class="c-button__auto"><i class="fa fa-user-cog"></i> 自動化設定</button></div>
                        <div class=""><button class="c-button__auto"><i class="fa fa-comment"></i> 自動ツイート</button></div>
                    </div>
                    <div class="p-panel__button">
                        <table class="c-table">
                            <tr>
                                <td><i class="fa fa-user-plus"></i> フォロー</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-user-times"></i> アンフォロー</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-heart"></i> いいね</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </section>
            <section class="p-panel">
                <div class="p-panel__account">
                    <div class="p-panel__img"><a class="c-img__circle" href="#"><i class="far fa-user-circle"></i></a></div>
                    <div class="p-panel__name">
                        <div class=""><a href="#">アカウント名あああああああ１５</a></div>
                        <div class=""><a href="#">@account_idaaa15</a></div>
                    </div>
                </div>
                <div class="p-panel__auto">
                    <div class="p-panel__setting">
                        <div class=""><button class="c-button__auto"><i class="fa fa-user-cog"></i> 自動化設定</button></div>
                        <div class=""><button class="c-button__auto"><i class="fa fa-comment"></i> 自動ツイート</button></div>
                    </div>
                    <div class="p-panel__button">
                        <table class="c-table">
                            <tr>
                                <td><i class="fa fa-user-plus"></i> フォロー</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-user-times"></i> アンフォロー</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-heart"></i> いいね</td>
                                <td><input type="button" class="c-button__auto" value="OFF"></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </section>
            <section class="p-addAccount">
                <button class="c-button__addAccount"><i class="fab fa-twitter"></i> アカウントを追加</button>
            </section>


        </main>
        <footer class="l-footer">
            Copyright © Kamitter. All Rights Reserved.
        </footer>

    </body>
</html>
