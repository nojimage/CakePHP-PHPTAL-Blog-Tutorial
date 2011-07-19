# What's This?

PHPTALをCakePHPのViewとして利用したサンプルです。

# Tasting

git cloneでコードを入手するか

    git clone git://github.com/nojimage/CakePHP-PHPTAL-Blog-Tutorial.git

[Downloads](https://github.com/nojimage/CakePHP-PHPTAL-Blog-Tutorial/archives/master "Downloads")からコードをダウンロードしてWebサーバに設置してください。

git cloneの場合は以下のコマンドにて依存するプラグインを入手します。

    git submodule update --init

パッケージをダウンロードしている場合は、[debug_kit](https://github.com/cakephp/debug_kit "debug_kit"), [CakePHP-TALTAL](https://github.com/nojimage/CakePHP-TALTAL "CakePHP-TALTAL")を別途取得してpluginsディレクトリへ設置してください。

    chmod -R o+w app/tmp

などとして、app/tmpディレクトリに書き込み権限を与えてください。

テスト用のデータベースを作成した後、

    cake/console/cake bake db_config

としてデータベースの設定を行うか、app/config/database.phpを作成/設定してください。

さらに、

    cake/console/cake schema create

で、テーブルを作成してください。

作成されるテーブルは、[CakePHPブログチュートリアル](http://book.cakephp.org/ja/view/1528/CakePHP%E3%83%96%E3%83%AD%E3%82%B0%E3%83%81%E3%83%A5%E3%83%BC%E3%83%88%E3%83%AA%E3%82%A2%E3%83%AB "CakePHPブログチュートリアル")のpostsテーブルと同じです。

schemaコマンドによるテーブル作成がわからない場合は、下記のページにあるSQLをデータベースへ投入してください。

[ブログデータベースの作成 :: CakePHPブログチュートリアル :: 開発例 :: マニュアル :: 1.3コレクション](http://book.cakephp.org/ja/view/1530/%E3%83%96%E3%83%AD%E3%82%B0%E3%83%87%E3%83%BC%E3%82%BF%E3%83%99%E3%83%BC%E3%82%B9%E3%81%AE%E4%BD%9C%E6%88%90 "ブログデータベースの作成 :: CakePHPブログチュートリアル :: 開発例 :: マニュアル :: 1.3コレクション")

設置先にブラウザからアクセスすれば、インデックスページが表示されるはずです。

# Features

* PHPTALでテンプレートを書いています。
* テンプレートはwebroot配下にあり、Webサーバにアップしなくてもブラウザで見れます。
app/webroot/posts, app/webroot/layouts 辺りを覗いてみてください。

gitのコミットログを見てもらえば、導入方法とか参考になるかもしれません。

# Support

質問等あれば Twitter [@nojimage](http://twitter.com/#!/nojimage "nojimage") まで。可能な範囲でお答えします。
