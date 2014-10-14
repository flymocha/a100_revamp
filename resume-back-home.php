<?PHP
require_once("./include/a100_appsite_config.php");

if(!$a100_appsite->CheckLogin())
{
    $a100_appsite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/a100_appsite.css">
</head>
<body>
<div id='a100_appsite_content'>
<h2>Home Page</h2>
Welcome back <?= $a100_appsite->UserFullName(); ?>!

<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
