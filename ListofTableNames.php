<?php
$config = parse_ini_file('./db.ini');
	
$dbname = $config['dbname'];	
$db = new mysqli($config['hostname'], $config['username'], $config['password'],$dbname);
	if ($db->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
	
	else { printf("<br />connected OO db2<br />");}
$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);
if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
else {echo 'connected succ2';}
while ($row = mysql_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}
mysql_free_result($result);
?>
