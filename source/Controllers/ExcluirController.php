<?php


namespace source\Controllers;


use Source\Classes\MainView;
use Source\Model\Client;

class ExcluirController
{
    private $view;
    private $client;

    public function __construct()
    {
        $this->view = new MainView("excluir");
    }

    public function execute()
    {
        $data = [];
        if(isset($_GET['id'])) {
            $this->client = new Client();
            if(!$this->client->findById("tb_cliente", (int)$_GET['id'])) {
                $data["msg"] = "Este cliente não foi encontrado!";
            }else{
                $this->client->delete("tb_cliente", $_GET['id']);
                $data["msg"] = "Cliente removido com sucesso!";
            }
        }

        $this->view->render($data);
    }
}