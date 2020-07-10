<?php

namespace source\Controllers;

use Source\Classes\MainView;
use Source\Model\Client;

class NovoController
{
    private $view;
    private $client;
    public function __construct()
    {
        $this->view = new MainView("novo");
    }

    public function execute()
    {
        $data = [];
        if(isset($_POST["acao"])) {
            $this->client = new Client();

            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            if($this->client->findByCpf("tb_cliente", $cpf)) {
                $data["color"] = "#e57373";
                $data["msg"] = "Este CPF já existe em nossa base de clientes!";
            }else{
                $this->client->create("tb_cliente", [$nome, $cpf, $email, $telefone]);
                $data["color"] = "#43a047";
                $data["msg"] = "Cliente cadastrado com sucesso!";
            }
            $data["retorno"] = true;
        }
        $this->view->render($data);
    }
}