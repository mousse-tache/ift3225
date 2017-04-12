#!/bin/bash
ssh neveuwil@arcade.iro.umontreal.ca 'rm -rf /home/www-ens/neveuwil/public_html/tp3'

scp -r tp3 neveuwil@arcade.iro.umontreal.ca:/home/www-ens/neveuwil/public_html/tp3

ssh neveuwil@arcade.iro.umontreal.ca 'chmod 777 -R /home/www-ens/neveuwil/public_html/tp3'
