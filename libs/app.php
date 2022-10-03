<?php

require_once 'controllers/errores.php';

class App
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            $archivoController = 'controllers/agenda.php';

            require_once $archivoController;

            $controller = new Agenda();
            $controller->loadModel('agenda');
            $controller->render();

            return false;
        } else {
            $archivoController = constant("BASE_URL") . 'controllers/' . $url[0] . '.php'; // Nombre del archivo de nuestro controladorW

            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller->loadModel($url[0]);

                // Verificar si existe metodos por llamar del controlador
                if (isset($url[1])) {
                    if (method_exists($controller, $url[1])) {
                        if (isset($url[2])) {
                            $nparam = count($url) - 2;
                            $params = [];

                            for ($i = 0; $i < $nparam; $i++) {
                                array_push($params, $url[$i] + 2);
                            }

                            $controller->{$url[1]}($params);
                        } else {
                            $controller->{$url[1]}();
                        }
                    } else {
                        $controller = new Errores();
                        $controller->render();
                    }
                } else {
                    $controller->render();
                }
            } else {
                $controller = new Errores();
                $controller->render();
            }
        }
    }
}
