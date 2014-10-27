<?php

// Requirements
require_once('classes/ImapMailbox.php');
require_once('classes/pushbullet.class.php');

// E-mail settings
define('MAIL_PATH', '{localhost:143}INBOX');			// See classes/ImapMailbox.php for some examples
define('MAIL_EMAIL', 'your@email.com');				// Your e-mail username
define('MAIL_PASSWORD', 'password');					// Your e-mail password

// PushBullet settings
$PushBullet_API_key = 'pushbullet_api_key_goes_here';
$deviceIds = array(
	'device_id_1',
	'device_id_2',
	'device_id_3'
);

// Start readin the mailbox
$mailbox = new ImapMailbox(MAIL_PATH, MAIL_EMAIL, MAIL_PASSWORD, false, 'utf-8');
// Get all e-mails from the mailbox
$mailsIds = $mailbox->searchMailBox('ALL');
if($mailsIds) {	

	// Read each mail individually
	foreach($mailsIds as $mailId) {
		$mail = $mailbox->getMail($mailId);	
		
		// Send the PushBullet notifications
		try {
			$p = new PushBullet( $PushBullet_API_key );
			
			// Send a notification to each device
			foreach($deviceIds as $deviceId) {
				$p->pushNote($deviceId, $mail->subject, $mail->textPlain);
			}
			
			// Delete the mail from the folder
			$mailbox->deleteMail($mailId);
			
		} catch (PushBulletException $e) {
			// Die() on error
  			die($e->getMessage());
		}
	}
}
