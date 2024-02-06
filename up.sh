#!/bin/bash

cd ./laravel
./vendor/bin/sail up -d
sleep 10;
npm run dev &

cd ../vue
sudo npm run dev -- --host 0.0.0.0 &

cd ../




