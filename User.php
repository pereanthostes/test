<?php

class Controllers_User extends Components_MainController
{

    public function addAction()
    {
        echo 'команда на метод гет_контент' . "<br>";
        return $this->get_content();
    }


    public function editAction()
    {

    }

    public function deleteAction()
    {
        echo 'DELETE' . "<br>";

    }

    function get_content()
    {
        echo 'запрос на получение данных из базы' . "<br>";
        return $this->m->get_tables_all();
    }
}