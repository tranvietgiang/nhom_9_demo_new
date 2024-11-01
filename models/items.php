<?php
class items extends Db{
    public function getAllItems(){
        $sql = self::$connection->prepare("SELECT * FROM items");
        $sql->execute();
        $arrEmpty = array();
        $arrEmpty = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $arrEmpty;

    }
}


?>