<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to configure the email class.
|
| For complete instructions please consult the 'Email Class'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['useragent']       The “user agent”.
|                            Default value: CodeIgniter
|                            Options: None
|	
|       ['protocol']        The mail sending protocol.
|                            Default value: mail
|                            Options: mail, sendmail, or smtp	
|	
|       ['mailpath']        The server path to Sendmail.
|                            Default value: /usr/sbin/sendmail
|                            Options: None
|  
|       ['smtp_host']       SMTP Server Address.
|                            Default value: CodeIgniter
|                            Options: None
 * 
|  	['smtp_user']       SMTP Username.
|                            Default value: No Default
|                            Options: None
| 
|	['smtp_pass']       SMTP Password.
|                            Default value: No Default
|                            Options: None
|  
|	['smtp_port']       SMTP Port.
|                            Default value: 25
|                            Options: None
|  
|	['smtp_timeout']    SMTP Timeout (in seconds).
|                            Default value: 5
|                            Options: None
|  
|	['smtp_keepalive']  Enable persistent SMTP connections.
|                            Default value: FALSE
|                            Options: TRUE or FALSE (boolean)
|  
|	['smtp_crypto']     SMTP Encryption
|                            Default value: No Default
|                            Options: tls or ssl
|  
|	['wordwrap']        Enable word-wrap.
|                            Default value: TRUE
|                            Options: TRUE or FALSE (boolean)
|  
|	['wrapchars']       Character count to wrap at.
|                            Default value: 76
|                            Options:
|  
|	['mailtype']        Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don’t have any relative links or relative image paths otherwise they will not work.
|                            Default value: text
|                            Options: text or html
|  
|	['charset']         Character set (utf-8, iso-8859-1, etc.).
|                            Default value: $config['charset']
|                            Options: None
|  
|	['validate']        Whether to validate the email address.
|                            Default value: FALSE
|                            Options: TRUE or FALSE (boolean)
|  
|	['priority']        Email Priority. 1 = highest. 5 = lowest. 3 = normal.
|                            Default value: 5
|                            Options: 1, 2, 3, 4, 5
|   
|	['crlf']            Newline character. (Use “\r\n” to comply with RFC 822).
|                            Default value: \n
|                            Options: “\r\n” or “\n” or “\r”
|  
|	['newline']         Newline character. (Use “\r\n” to comply with RFC 822).
|                           Default value: \n
|                           Options: “\r\n” or “\n” or “\r”
| 
|	['bcc_batch_mode]   Enable BCC Batch Mode.
|                           Default value: FALSE
                            Options: TRUE or FALSE (boolean)
| 
|	['bcc_batch_size']  Number of emails in each BCC batch.
|                           Default value: 200
|                           Options: None
| 
|	['dsn']             Enable notify message from server
|                           Default value: FALSE
|                           Options: TRUE or FALSE (boolean)
| 
*/

$config['useragent']  = "CodeIgniter";
$config['mailpath']   = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
$config['protocol']   = "smtp";
$config['smtp_user']   = "landrade@teayudo.com.mx";
$config['smtp_pass']   = "51573M4-5";
$config['smtp_host']  = "smtpout.secureserver.net";
$config['smtp_port']  = "465";

$config['smtp_crypto']    = "ssl";

$config['mailtype']   = 'html';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['wordwrap']   = TRUE;
$config['crlf']       = "\r\n";



//$config['useragent']  = "CodeIgniter";
//$config['mailpath']   = "C:/xampp/sendmail";
//$config['protocol']   = "sendmail";
//$config['smtp_host']  = "10.68.39.33";
//$config['smtp_port']  = "25";
//$config['mailtype']   = 'html';
//$config['charset']    = 'utf-8';
//$config['newline']    = "\r\n";
//$config['wordwrap']   = TRUE;



