#!/bin/sh

cd library
npm install
composer update --no-dev
npm run production

# Don't pack node_modules
rm -rf node_modules
cd -

npm install
npm run build
