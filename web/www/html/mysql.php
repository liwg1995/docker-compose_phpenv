<?php
try {
    $dbh = new PDO('mysql:host=phpenv_mysql_1;dbname=mysql', 'root','root');
    foreach($dbh->query('SELECT * from user') as $row) {
    	echo "The connection is successful!";
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
