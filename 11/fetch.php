<?php

 include_once 'config.php';

 $sql = "SELECT * from users";

 $prep = $con->prepare($sql);

 $prep->execute();

 $datas = $prep->fetchAll();

 //var_dump($datas);

?>