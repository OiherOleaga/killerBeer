cd vue
Start-Process "npm" -ArgumentList "run dev" -NoNewWindow

cd ../laravel
#Start-Process "wsl" -ArgumentList "./vendor/bin/sail up" -NoNewWindow
Start-Process "php" -ArgumentList "artisan serve" -NoNewWindow
Start-Process "npm" -ArgumentList "run dev" -NoNewWindow

cd ../




