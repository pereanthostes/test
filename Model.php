<?php

class Models_Model
{
    protected $dbgc;


    public function __construct() {
        $this->dbgc = Components_Db::getConnection();
        if(!$this->dbgc) {
            exit("Ошибка соединения с базой данных");
        }

    }

    public function get_tables_all(){
        echo "получаем данные из таблицы";
        $dbAll = [];
        $dbgc = Components_Db::getConnection();
        $dbq = $dbgc->query('SELECT * FROM names');
        $i =0;
        while ($row = $dbq->fetch()) {
            $dbAll[$i]['id'] = $row['id'];
            $dbAll[$i]['name'] = $row['name'];
            $dbAll[$i]['pass'] = $row['pass'];
            $dbAll[$i]['email'] = $row['email'];
            $i++;
        }
        return $dbAll;
    }
    public function delet_id(){

    }
}