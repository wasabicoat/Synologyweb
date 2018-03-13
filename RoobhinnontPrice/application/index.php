<html>
<head>
	<title>403 Forbidden</title>
</head>
<body>
<?
	$this->load->database(); 
	echo mysql_query("select * from percent");

	
?>
<p>Directory access is forbidden.</p>

</body>
</html>