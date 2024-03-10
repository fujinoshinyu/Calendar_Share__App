# ポートフォリオ概要 - カレンダーシェアアプリ
<h2>サイトURL:http://54.224.137.71:8080/</h2><p>※セキュリティの観点からherokuでのサイト公開に移行準備中</p>
ポートフォリオをご覧いただきありがとうございます。
インスタグラムのように身近なアプリケーションでありながら、今までにない発想のアプリを作りたいと考え、
写真を投稿するのではなく、カレンダーとしての予定を投稿することで、誰もが日々使用するであろうカレンダーとしての機能だけでなく、
お互いの予定を共有できるプラスαの楽しみを兼ね備えたアプリケーションを作成しようと考えました。
現時点で、改善点や追加したい機能がある状態ではありますが、ご確認いただければ幸いです。

# 使用技術
- PHP 8.2.9
- Laravel Framework 9.52.16
- JavaScript 
- Mysql 15.1
- AWS
  - EC2
  - Cloud9
  - VPC
- Laravel Breeze
- Web API (非同期チャット機能)
- Calendar.JS
- Jquery
- ajax

# 機能一覧
- ユーザー登録/ログイン機能
- カレンダー表示機能（HOME）
- カレンダー投稿機能
- - ユーザー選択
  - タイトル入力
  - コメント入力
  - カラー選択
- 予定編集/削除機能
- 登録ユーザーの一覧
- ページネーション機能（登録ユーザー）
- 非同期チャット機能

# 未完成の機能
- ユーザーごとの表示（誰の投稿なのか表示する）
- cloudinalyを活用した画像アップロード機能
- プロフィール画像の設定やマイページ等の細かい設定
- フォロー、フォロワー機能
- 追加した予定のToDo機能
- UI等の細かい修正

# HOME
<img width="1396" alt="Screenshot 2024-03-10 at 19 39 30" src="https://github.com/fujinoshinyu/Calendar_Share__App/assets/79220429/a674261c-565e-4cc0-9190-5e7a7006f0ac">

# CREATE
<img width="1438" alt="Screenshot 2024-03-10 at 19 40 13" src="https://github.com/fujinoshinyu/Calendar_Share__App/assets/79220429/f436417c-a304-430c-a9bd-f7fc58729c23">

# DM
<img width="1427" alt="Screenshot 2024-03-10 at 19 40 38" src="https://github.com/fujinoshinyu/Calendar_Share__App/assets/79220429/d4b2a02b-8d04-4b5b-aa5f-59ce897a3e73">

# 完成予想ER図
<img width="516" alt="Screenshot 2024-02-05 at 04 10 52" src="https://github.com/fujinoshinyu/Calendar_Share__App/assets/79220429/d2267cf9-e671-488b-b382-0d95d48f3143">

<p>※セキュリティ等の観点から、herokuでのサイト公開に移行準備中です。ポートフォリオとしての期間終了後直ちにhttp通信は停止予定。</p>

