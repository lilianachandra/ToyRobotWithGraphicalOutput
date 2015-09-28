<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Connection Failed: ' . mysql_error());
}

$vData = $_GET["datas"];
$sql = "INSERT INTO tblToyRobot(hasil) values('$vData')";

mysql_select_db('dbToyRobot');
$retval = mysql_query( $sql, $koneksi );

if(! $retval )
{
	  die('Insert Data Failed: ' . mysql_error());
}
echo "Insert Data Successfully\n";
mysql_close($koneksi);
?>

<html>
	<table>
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" name="back" onclick="fBack();" value="Back">
			</td>
		</tr>
	<table>
	
<script>
function fBack(){
	window.location.href = 'index.php'
}
</script>

</html>
