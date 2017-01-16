<?php 
session_start();

$_SESSION['mid'] =$_POST['mid'];
$_SESSION['mkey']=$_POST['mkey'];

$_SESSION['tradeUrl'] =$_POST['tradeUrl'];
$_SESSION['queryUrl']=$_POST['queryUrl'];

$_SESSION['backUrl'] =$_POST['backUrl'];
$_SESSION['frontUrl']=$_POST['frontUrl'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置帐号</title>

</head>
<body>
<br></br>
<a href="http://localhost/stan/stan/examples/purchase.php">请求支付流水号</a><br></br>
<a href="http://localhost/stan/stan">设置帐号</a>
</body>
</html>