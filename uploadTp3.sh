#!/bin/bash

ssh neveuwil@arcade.iro.umontreal.ca 'chmod 777 -R ~/public_html/tp3 && rm -rf ~/public_html/tp3'

scp -r tp3 neveuwil@arcade.iro.umontreal.ca:~/public_html/tp3

ssh neveuwil@arcade.iro.umontreal.ca 'chmod 777 -R ~/public_html/tp3 && chmod -R a-w ~/public_html/tp3'
