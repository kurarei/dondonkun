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

{{--      スタイル、jsの読み込み--}}
      <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
      <script src="{{ asset(mix('js/app.js')) }}" defer></script>
{{--アイコン、フォント読み込み        --}}
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
      {{--      文字数カウント--}}
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    </head>
    <body>
{{--    app.jsに内容は記述している--}}
      <div id="app"></div>
    </body>
</html>
