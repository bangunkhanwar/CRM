#!/bin/bash
#This script run every 10 seconds
while (sleep 10 && wget http://crm.elcorps.com:9081/cron/api_sms_check) &
do
  wait $!
done
