<?php


namespace source\Controllers;


use Source\Classes\MainView;
use Source\Model\Client;

class HomeController
{
    private $view;
    private $client;
    public function __construct()
    {
        $this->view = new MainView("home");
    }

    public function execute()
    {
        $this->client = new Client();
        $data = $this->client->list("tb_cliente", "ORDER BY ID");
        $this->view->render($data);
    }
}