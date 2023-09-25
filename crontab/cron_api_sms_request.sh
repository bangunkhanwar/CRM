#!/bin/bash
#This script run every 5 seconds
#while (sleep 5 && wget http://crm.elcorps.com:9081/cron/api_sms_request) &
#do
#  wait $!
#done

#wget -q --content-disposition 'http://crm.elcorps.com:9081/cron/api_sms_request'
wget http://crm.elcorps.com:9081/cron/api_sms_request
