<?php


class Components_Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = Components_Config::get('routes');
    }

    // возвращает строку с URL без пробелов вначале и конце
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return strtolower(trim($_SERVER['REQUEST_URI']));
        }
    }

    public function run()
    {
        // получаем строку запроса
        $uri = $this->getURI();

        // проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            foreach ($path as $k => $v) {

                // сравниваем uriPattern и uri
                if (preg_match("~$k~", $uri)) {

                    // определить какой контроллер и экшн обрабатывают запрос
                    list($segment, $action) = explode('/', $k);


                    //преобразуем к виду "НавзаниеController"
                    $controllerName = ucfirst($segment);
                    $actionName     = $action . 'Action';

                    /*// подключить файл класса-контроллера
                    $controllerFile = '../Controllers/' . $controllerName . '.php';
                    if (file_exists($controllerFile)) {
                        //include_once($controllerFile);
                    }*/

                    // создать объект, запустить метод экшн
                    $controllerObjName = 'Controllers_' . $controllerName;
                    $controllerObject  = new $controllerObjName;
                    $result            = $controllerObject->$actionName(); // true если сработало




                }
                if ($result != null) {
                    break;
                }
            }

        }
        require_once('Templates/User/Layout.php');
    }

}