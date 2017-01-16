<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置帐号</title>

</head>
测试帐号信息：<br>
商户号：mer.id=880000000000084</br>
合作密钥：security.key= PvXWi7L2hNntCCDQgIxrXC8k0UuAfrtX</br>
<body >
<form name="up" id="up"  method="post" action="http://localhost/stan/stan/updatekey.php">
<table>
<tr><td>商户号：</td><td><input type="text" name="mid" id="mid"  value="<?php echo $_SESSION['mid']?>" size="60" /></td></tr>
<tr><td>密     钥：</td><td><input type="text" name="mkey" id="mkey"  value="<?php echo $_SESSION['mkey']?>" size="60" /></td></tr>
</table>
<br></br>

测试 <br></br>
     交易地址:http://202.101.25.178:8080/gateway/merchant/trade<br>
     查询地址:http://202.101.25.178:8080/gateway/merchant/query<br></br>
生产<br></br>
     交易地址:https://mgate.unionpay.com/gateway/merchant/trade<br>
     查询地址:https://mgate.unionpay.com/gateway/merchant/query<br></br>
<table>
<tr><td>支付地址：</td><td><input type="text" name="tradeUrl" id="tradeUrl"  value="<?php echo $_SESSION['tradeUrl']?>" size="60" /></td></tr>
<tr><td>查询地址：</td><td><input type="text" name="queryUrl" id="queryUrl"  value="<?php echo $_SESSION['queryUrl']?>" size="60" /></td></tr>
</table>

后台通知地址：http://kp.wangzhengzhen.cn/notify.php<br></br>
前台通知地址：不填写<br></br>

<table>
<tr><td>后台通知地址：</td><td><input type="text" name="backUrl" id="backUrl"  value="<?php echo $_SESSION['backUrl']?>" size="60" /></td></tr>
<tr><td>前台通知地址：</td><td><input type="text" name="frontUrl" id="frontUrl"  value="<?php echo $_SESSION['frontUrl']?>" size="60" /></td></tr>
</table>

<input type="submit"  value="更新帐号"/>

</form>

</body>
</html>