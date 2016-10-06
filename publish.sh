#!/bin/bash

# Replace "sculpin generate" with "php sculpin.phar generate" if sculpin.phar
# was downloaded and placed in this directory instead of sculpin having been
# installed globally.

sculpin/bin/sculpin generate --env=prod
if [ $? -ne 0 ]; then echo "Could not generate the site"; exit 1; fi

rsync -avze 'ssh -p 22' output_prod/ ebon@tpavlek.me:beta-tpavlek-me/public_html
if [ $? -ne 0 ]; then echo "Could not publish the site"; exit 1; fi
