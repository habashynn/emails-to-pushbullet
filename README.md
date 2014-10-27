Emails to PushBullet using PHP & Cronjobs
====================

Receive PushBullet notifications from e-mails sent to a mailbox. This script requires that PHP is able to execute imap_ functions to read your mailbox. Original made to receive PushBullet messages from TransIP server monitoring notifications (see bottom).


Thanks to
====================

  - PushBullet service by PushBullet (http://www.pushbullet.com)
  - PushBullet PHP API by ivkos (https://github.com/ivkos/PushBullet-for-PHP)
  - PHP IMAP by barbushin (https://github.com/barbushin/php-imap)


How to install
=====================

  1. Clone the repository to your system or project folder.
  2. Open push.php and modify the settings on top
  3. Save and upload the files to your website
  4. Configure a cronjob to run this script every minute (*/1 * * * * *)
  
PushBullet API & Device keys
=====================

API Key:
  1. Login using your PushBullet login credentials
  2. Navigate to your account settings (click your avatar at the top right corner of PushBullet.com). Your API key is listed here.
  
Device IDs:
  1. Login using your PushBullet login credentials
  2. Click on of your added devices in the list on the left side of the page
  3. Your Device ID is listed in the URL: ?device_iden=YOUR_DEVICE_ID
  4. 
  

TransIP Notificaties
=======================

Dit script is oorspronkelijk geschreven om notificaties van TransIP monitoring door te sturen naar meerdere devices via PushBullet. Het instellen hiervan is erg simpel:

  1. Maak een e-mail account aan waarop notificaties ontvangen kunnen worden, bijvoorbeeld notifications@domein.tld
  2. Login op TransIP en ga naar VPS -> Contactpersonen (hoogstwaarschijnlijk ook bij andere type hosting/server beschikbaar)
  3. Voeg een contactpersoon toe met het e-mailadres dat je hebt aangemaakt in stap 1
  4. Klik op VPS Monitoring (ook hier geldt: waarschijnlijk ook bij andere hosting/server types beschikbaar)
  5. Voeg of bewerk een monitor profiel en activer de zojuist toegevoegde contactpersoon voor e-mail notificaties
  6. Voer de stappen zoals hierboven in het Engels uitgelegd om de e-mail notificaties vervolgens via PushBullet naar je devices gepusht te krijgen
