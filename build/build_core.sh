#!/bin/sh

# Install the core build scripts
npm install

# Install Composer Libs into library/vendor
composer update --no-dev

cd library

# Install the Library's own build scripts
npm install

# Run the Library's build scripts
npm run production

# Remove node_modules to avoid packing them
rm -rf node_modules

cd -

# Finally, build and package the extension
npm run build
