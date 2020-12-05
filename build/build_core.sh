#!/bin/sh

# Install the core build scripts
npm install

cd library

# Install Composer libs
composer update --no-dev
mkdir -p vendor_prefixed
touch vendor_prefixed/.gitkeep

# Install the Library's own build scripts
npm install

# Run the Library's build scripts
npm run production

# Remove node_modules to avoid packing them into the extension zip file
rm -rf node_modules

cd -

# Finally, build and package the extension
npm run build
