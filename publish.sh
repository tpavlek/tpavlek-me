#!/bin/bash

vendor/bin/jigsaw build production
if [ $? -ne 0 ]; then echo "Could not generate the site"; exit 1; fi

rsync -avze 'ssh -p 22' build_production/ ebon@tpavlek.me:tpavlek-me/public_html
if [ $? -ne 0 ]; then echo "Could not publish the site"; exit 1; fi
