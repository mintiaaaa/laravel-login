### Docker概要

#### アプリ

php 8.3.x

#### サーバ

nginx 1.24.0

mysql 8.1.x

#### サードパーティ

mailpit

phpmyadmin

### ローカル開発構築手順

以下の手順で開発環境を構築します。

#### Docker for Mac (stable版)

https://docs.docker.com/docker-for-mac/

#### Docker for Windows

https://docs.docker.com/docker-for-windows/

#### VMWare for CentOS

 ```
 wget -qO- https://get.docker.com/ | sh
 ```

1. gitリポジトリからクローンする

    ```
    git clone git@github.com:mintiaaaa/docker.git
    ```

2. 当該フォルダの.env.localをコピーし、.envで保存する


3. Dockerを起動する

    ```
    cd docker/
    docker-compose build --no-cache
    docker-compose up -d
    docker-compose exec -T app npm run dev
    docker-compose exec app bash # appコンテナにアクセスする場合
    ```

4. appコンテナのドキュメントルート

    ```
    cd /app
    ```

5. 動作確認

    ```
    http://localhost
    http://localhost:8080/ # phpmyadmin
    http://localhost:8025/ # mailpit
    ```
