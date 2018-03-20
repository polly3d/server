#!/bin/bash

echo "Waiting for Nextcloud servers to become available"
until curl --silent http://acceptance-ui-php-master > /dev/null && curl --silent http://acceptance-ui-php > /dev/null
do
    sleep 2
done

node writeConfig.js

./node_modules/.bin/mocha test/installSpec.js --reporter json --timeout 20000 > out/install.json
cat out/install.json
./node_modules/.bin/mocha test/loginSpec.js --reporter json --timeout 20000 > out/login.json
cat out/login.json
./node_modules/.bin/mocha test/settingsSpec.js --reporter json --timeout 20000 > out/settings.json
cat out/settings.json
./node_modules/.bin/mocha test/publicSpec.js --reporter json --timeout 20000 > out/public.json
cat out/public.json

