# templateを使わない人
1. `cd quizy/docker`
2. `docker compose build --no-cache` (ビルドする)
3. `docker compose up -d` (コンテナをたてる)
4. `docker compose exec app bash` (appコンテナに入る)
5. `composer create-project --prefer-dist laravel/laravel . "6.*"` (quizy/src 配下にlaraavel6をインストール)
6. ブラウザで`http://localhost`にアクセスし、「laravel」が表示されることを確認。

# templateを使う人
1. `cd template/docker`
2. `docker compose build --no-cache` (ビルドする)
3. `docker compose up -d` (コンテナをたてる)
4. `docker compose exec app bash` (appコンテナに入る)
5. `composer install` (必要なパッケージをインストール)
6. ブラウザで`http://localhost`にアクセスし、「laravel」が表示されることを確認。
