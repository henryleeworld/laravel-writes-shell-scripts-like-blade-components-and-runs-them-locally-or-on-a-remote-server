# Laravel 11 編寫指令列腳本宛如 Blade 模板元件，並可在本地或遠端伺服器上執行

引入 protonemedia 的 laravel-task-runner 套件來擴增編寫指令列腳本宛如 Blade 模板元件，並可在本地或遠端伺服器上執行，指令列腳本是和電腦溝通及管理檔案與作業系統最有效率的方式，透過幾行程式，電腦就會乖乖依照你的意思辦事，腳本還可以用在許多重要任務上。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/task/run/` 來進行 composer.json 中指定的套件版本更新。

----

## 畫面截圖
![](https://i.imgur.com/S38UUp2.png)
> 用是否成功確認執行結果
