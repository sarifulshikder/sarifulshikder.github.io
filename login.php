<?php
$mac=$_POST['mac'];
$ip=$_POST['ip'];
$username=$_POST['username'];
$linklogin=$_POST['link-login'];
$linkorig=$_POST['link-orig'];
$error=$_POST['error'];
$trial=$_POST['trial'];
$loginby=$_POST['login-by'];
$chapid=$_POST['chap-id'];
$chapchallenge=$_POST['chap-challenge'];
$linkloginonly=$_POST['link-login-only'];
$linkorigesc=$_POST['link-orig-esc'];
$macesc=$_POST['mac-esc'];
$identity=$_POST['identity'];
$bytesinnice=$_POST['bytes-in-nice'];
$bytesoutnice=$_POST['bytes-out-nice'];
$sessiontimeleft=$_POST['session-time-left'];
$uptime=$_POST['uptime'];
$refreshtimeout=$_POST['refresh-time-out'];
$linkstatus=$_POST['linkstatus'];
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>internet hotspot > login</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
<style type="text/css">
body {color: #737373; font-size: 10px; font-family: verdana;}

textarea,input,select {
background-color: #FDFBFB;
border: 1px solid #BBBBBB;
padding: 2px;
margin: 1px;
font-size: 14px;
color: #808080;
}

a, a:link, a:visited, a:active { color: #AAAAAA; text-decoration: none; font-size: 10px; }
a:hover { border-bottom: 1px dotted #c1c1c1; color: #AAAAAA; }
img {border: none;}
td { font-size: 14px; color: #7A7A7A; }
</style>

</head>

<body>
<?php echo $ifchapid; ?>
	<form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
		<input type="hidden" name="popup" value="true" />
	</form>
	
	<script type="text/javascript" src="https://sarifulshikder.github.io/md5.js"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
<?php endif;?>

<div align="center">
<a href="<?php echo $linkloginonly; ?>?target=lv&amp;dst=<?php echo $linkorigesc; ?>">Latviski</a>
</div>

<table width="100%" style="margin-top: 10%;">
	<tr>
	<td align="center" valign="middle">
		<div class="notice" style="color: #c1c1c1; font-size: 9px">Please log on to use the internet hotspot service<br /><?php if($trial == 'yes'):?> Free trial available, <a style="color: #FF8080"href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">click here</a>.<?php endif;?></div><br />
		<table width="280" height="280" style="border: 1px solid #cccccc; padding: 0px;" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" valign="bottom" height="175" colspan="2">
					<form name="login" action="<?php echo $link-login-only; ?>" method="post"
					    <?php ifchapid:?> onSubmit="return doLogin()" <?php endif;?> >
						<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
						<input type="hidden" name="popup" value="true" />
						
							<table width="100" style="background-color: #ffffff">
								<tr><td align="right">login</td>
										<td><input style="width: 80px" name="username" type="text" value="<?php echo $username; ?>"/></td>
								</tr>
								<tr><td align="right">password</td>
										<td><input style="width: 80px" name="password" type="password"/></td>
								</tr>
								<tr><td>&nbsp;</td>
										<td><input type="submit" value="OK" /></td>
								</tr>
							</table>
					</form>
				</td>
			</tr>
			<tr><td align="center"><a href="http://www.mikrotik.com" target="_blank" style="border: none;"><img src="https://sarifulshikder.github.io/img/logobottom.png" alt="mikrotik" /></a></td></tr>
		</table>
	
	<br /><div style="color: #c1c1c1; font-size: 9px">Powered by MikroTik RouterOS</div>
	<?php if($error):?><br /><div style="color: #FF8080; font-size: 9px"><?php if $error:?></div><?php if($error):?><?php if $endif;?>
	</td>
	</tr>
</table>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>
</body>
</html>
