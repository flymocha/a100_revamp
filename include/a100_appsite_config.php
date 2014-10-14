<?PHP
require_once("./include/a100_appsite.php");

$a100_appsite = new A100_Appsite();

//Provide your site name here
$a100_appsite->SetWebsiteName('http://indie-soft.com/a100/');

//Provide the email address where you want to get notifications
$a100_appsite->SetAdminEmail('ccmonicayz@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$a100_appsite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'12qwaszx',
                      /*database name*/'mysql',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$a100_appsite->SetRandomKey('qSRcVS6DrTzrPvr');

?>