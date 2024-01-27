#!/bin/bash

cd ./laravel
./vendor/bin/sail up -d
sleep 10;
npm run dev &

cd ../vue
npm run dev &

cd ../




