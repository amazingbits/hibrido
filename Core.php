<?php

define("ROOT", "http://localhost/cadastro");

class Core
{
    public function init()
    {
        $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

        $url = ucfirst($url);
        $url.="Controller";
        if(file_exists(__DIR__ . '/source/Controllers/'.$url.'.php')){
            $className = 'Source\\Controllers\\'.$url;
            $controler = new $className;
            $controler->execute();
        }else{
            $view = new \Source\Classes\MainView('404');
            $view->render();
        }
    }
}