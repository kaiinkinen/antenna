<head>
	<title>Antenna</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="SHORTCUT ICON" href="http://antenna.sourceforge.net/favicon.ico">
	<?php 
	if (file_exists('/home/groups/a/an/antenna/htdocs/firestats/php/firestats-hit.php'))
	{
		include('/home/groups/a/an/antenna/htdocs/firestats/php/firestats-hit.php');
	}
	?>

<script language=javascript>

function writeEmail(contact, ename, host)
{
    document.write("<a href=" + "mail" + "to:" + ename + "@" + host+ ">" + contact + "</a>" + ".")
}
</script>	
</head>

<body>
	<hr />
	<table class="plain">

		<tr>
			<td align="center" width="200">
				<img src="antenna_logo.gif" />
				<br />
				<code style="font-weight:bold;font-size:16pt">&lt;ANTENNA/&gt;</code>

			</td>
			<td rowspan="2">
				<center>
					<h1>Antenna</h1>
					<b>An Ant-to-End Solution For Wireless Java</b>
					<p />
					Version 1.2.1
					<p />
					(c) 2002-2010 <br/>
					<script language=javascript>
					writeEmail("J&ouml;rg Pleumann","joerg","pleumann.de")
					</script>
					<br/>
					<script language=javascript>
					writeEmail("Omry Yadan","omry","yadan.net")
					</script>
					<br/>
					<a href="http://eriksdiary.blogspot.com">Erik Wetterberg</a>
					<br/>
					<a href="http://sourceforge.net/projects/antenna/">Sourceforge project</a>
					<p />
				</center>
			</td>
		</tr>

	</table>

	<hr />

	<center>
	    <a href="index.php#news">News</a> |
	    <a href="index.php#synopsis">Overview</a> |
	    <a href="http://sourceforge.net/project/showfiles.php?group_id=67420">Download</a> |
	    <a href="setup.php">Setup</a> |
	    <a href="wtkjad.php">JAD</a> |
	    <a href="wtkbuild.php">Build</a> |
	    <a href="wtkpackage.php">Package</a> |
	    <a href="wtkmakeprc.php">MakePRC</a> |
	    <a href="wtkrapc.php">RAPC</a>
	    <br />
	    <a href="wtkrun.php">Run</a> |
	    <a href="wtkpreverify.php">Preverify</a> |
	    <a href="wtkobfuscate.php">Obfuscate</a> |
	    <a href="wtksmartlink.php">SmartLink</a> |
	    <a href="wtkpreprocess.php">Preprocess</a> |
	    <a href="wtkdeploy.php">Deploy</a> |
	    <a href="wtksign.php">Sign</a> |
	    <a href="history.php">History</a> |
	</center>

	<hr />

	<p />
