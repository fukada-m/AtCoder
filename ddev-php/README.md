# DDEVを使って構築したPHPのAtCoder用環境です。
PHPの勉強用に作ったファイルも混ざってます。
AtCoderの回答は/web/AC日付/*に入ってます。
## コンテナの動かし方
```
cd ddev-php
ddev config --project-type=php --docroot=web --create-docroot
ddev start
ddev composer install
ddev launch
```
