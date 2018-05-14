<?php
     require_once('dbconfig.php');

        $sql = "SELECT * FROM markers";
        $stmt = $db_con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

?>