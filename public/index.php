<?php
$dbh = new PDO('pgsql:host=dbpg; port=5432; dbname=database', 'root', 'secret');
echo '<a href="http://localhost:8080/myadmin">visite adminer</a><br>';
echo "(server=dbpg username=root password=secret database=database)";
phpinfo();
