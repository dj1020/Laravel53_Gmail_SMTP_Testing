# 如何使用本 Repo 測試 Gmail Smtp 寄信

## 安裝及測試步驟

為了新手測試方便，已經把 vendor 資料夾內所有內容一併 commit 進 repo，不需要再另外下 `composer install`、`php artisan key:generate`、`cp .env.example .env` 等指令，下載設定帳密後就可以用，降低測試入門難度。看不懂這一句在說什麼就當沒看到。

1. 打開 "終端機"、命令提示字元或 iTerm2 之類的 Terminal，請先確認你有安裝 [git](https://git-scm.com/)
2. `$ git clone git@github.com:dj1020/Laravel53_Gmail_SMTP_Testing.git` 下載此 repo
3. `$ cd Laravel53_Gmail_SMTP_Testing` 切換至 repo 的專案目錄
4. 編輯 `.env` 檔，把 Gmail 的帳密填入 `MAIL_USERNAME=oooo@gmail.com`、`MAIL_PASSWORD=xxxx`
5. 用瀏覽器登入 Gmail，然後另開新分頁打開 <https://myaccount.google.com/> 到 "登入和安全性"，確認 "[允許安全性較低的應用程式] 設定處於啟用狀態" 是 **啟用** 的狀態
6. 回 Terminal 畫面，`$ php artisan serve` 啟動 Web Server，會看到 `Laravel development server started on http://localhost:8000/`，要關掉 Server 按 `Ctrl + C`
7. 用瀏覽器打開 <http://localhost:8000> 看到 Laravel 字樣表示 Web Server 正常
8. 用瀏覽器打開 `http://localhost:8000/testMail?mail=example@example.com` 就會寄信到 `example@example.com` 請自己改 Email 位址
9. 如有問題歡迎利用 [New Issue](https://github.com/dj1020/Laravel53_Gmail_SMTP_Testing/issues) 提問
9. 經[閃亮亮](http://blog.dj1020.net/)測試是沒問題的，不會用 issue 可以到 <https://www.facebook.com/groups/laravel.tw/> 提問

## 其他需求 & Troubleshooing 疑難排解

1. 想要改寄件人的顯示名稱，請到 `config/mail.php` 改 `from` 內的 `name`
2. 在 Terminal 下 `$ git --version` 可以知道 git 裝成功沒
3. 如果 port 8000 被佔用，可以下 `$ php artisan serve --port=8099` 那開瀏覽器就開 <http://localhost:8099>
4. 如果你想讓**區網內**同事測試，可以用 `$ php artisan serve --host=0.0.0.0 --port=8000` 你同事就可以開 <http://你的IP:8000> 看到你的頁面，應該也可以寄信，閃亮亮沒測過。
5. 如果要測套用 view 的 Email 內容，但測試失敗，請到 issue 提供你的 code sample。
