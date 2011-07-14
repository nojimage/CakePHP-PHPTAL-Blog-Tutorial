# What's This?

PHPTALをCakePHPのViewとして利用したサンプルです。

# Tasting

git cloneでコードを入手するか

    git clone git://github.com/nojimage/CakePHP-PHPTAL-Blog-Tutorial.git

DownloadからコードをダウンロードしてWebサーバに設置してください。

git cloneの場合は以下のコマンドにて依存するプラグインを入手します。

    git submodule update --init

パッケージをダウンロードしている場合は、DebugKit, CakePHP-TALTALを別途取得してpluginsディレクトリへ設置してください。

    chmod -R o+w app/tmp

などとして、app/tmpディレクトリに書き込み権限を与えてください。

テスト用のデータベースを作成した後、

    cake/console/cake bake db_config

としてデータベースの設定を行うか、app/config/database.phpを作成してください。

さらに、

    cake/console/cake schema create

で、テーブルを作成してください。

作成されるテーブルは、CakePHPのブログチュートリアルのpostsテーブルと同じです。

設置先にブラウザからアクセスすれば、インデックスページが表示されるはずです。

# Features

* PHPTALでテンプレートを書いています。
* テンプレートはwebroot配下にあり、Webサーバにアップしなくてもブラウザで見れます。

app/webroot/posts, app/webroot/layouts 辺りを覗いてみてください。

gitのコミットログを見てもらえば、導入方法とか参考になるかもしれません。

# Support

質問等あれば Twitter @nojimage まで。可能な範囲でお答えします。
