#!/bin/sh

# Install the core build scripts
npm install

# Install the latest library updates
rm -rf library
git clone git@github.com:anibalsanchez/xt-laravel-starter-for-joomla-library.git library

cd library
git checkout prefixed
composer update --no-dev
composer dump-autoload --classmap-authoritative

# Install the Library's own build scripts
npm install

# Run the Library's build scripts
npm run production

# Remove node_modules to avoid packing them into the extension zip file
rm -rf node_modules

cd -

# Finally, build and package the extension
npm run build