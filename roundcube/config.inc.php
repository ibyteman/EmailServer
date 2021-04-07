$config = array();
include_once("/etc/roundcube/debian-db-roundcube.php");

// IMAP server host 
$config['default_host'] = 'ssl://mx.byteman.io';
$config['default_port'] = 993;
$config['imap_auth_type'] = 'LOGIN';

// SMTP server host (for sending mails).
$config['smtp_server'] = 'tls://mx.byteman.io';
$config['smtp_port'] = 587;

$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';
$config['support_url'] = '';
$config['product_name'] = 'Roundcube Webmail';
$config['des_key'] = 'bCs2rNFhbdhopdbjnXxYg0Pn';
$config['plugins'] = array(
	'virtuser_query',
	'additional_message_headers',
	'archive',
	'emoticons',
#	'help',
#	'hide_blockquote',
	'identity_select',
	'legacy_browser',
#	'managesieve',
	'markasjunk',
	'newmail_notifier',
	'new_user_dialog',
	'new_user_identity',
	'password',
	'rcguard',
	'show_additional_headers',
#	'subscriptions_option',
#	'userinfo',
	'vcard_attachments',
	'zipdownload',
#	'xskin',
	'identicon',
#	'enigma',
	'dkimstatus',
);


// skin name: folder from skins/
$config['skin'] = 'larry';
$config['enable_spellcheck'] = false;
$config['smtp_auth_type'] = 'LOGIN';
$config['product_name'] = 'Byteman.io - Curso de email server Udemy';
$config['useragent'] = 'Roundcube Webmail';

$config['virtuser_query'] = "SELECT email FROM mailserver.virtual_users WHERE email = '%u'";
