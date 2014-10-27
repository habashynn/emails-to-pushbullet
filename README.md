emails-to-pushbullet
====================

Receive PushBullet notifications from TransIP notification e-mails


This script uses some classes and services made by others:
====================

PushBullet service by PushBullet (http://www.pushbullet.com)
PushBullet PHP API by ivkos (https://github.com/ivkos/PushBullet-for-PHP)
PHP IMAP by barbushin (https://github.com/barbushin/php-imap)


How to install
=====================

  1. Clone the repository to your system or project folder.
  2. Open push.php and modify the settings on top
  3. Save and upload the files to your website
  4. Configure a cronjob to run this script every minute (*/1 * * * * *)
  
How to find your PushBullet API key and Device IDs
=====================

API Key:
  1. Login using your PushBullet login credentials
  2. Navigate to your account settings (click your avatar at the top right corner of PushBullet.com). Your API key is listed here.
  
Device IDs:
  1. Login using your PushBullet login credentials
  2. Click on of your added devices in the list on the left side of the page
  3. Your Device ID is listed in the URL: ?device_iden=YOUR_DEVICE_ID
