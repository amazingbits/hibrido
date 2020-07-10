<?php


namespace source\Controllers;


use Source\Classes\MainView;
use Source\Model\Client;

class EditController
{
    private $view;
    private $client;

    public function __construct()
    {
        $this->view = new MainView("edit");
    }

    public function execute()
    {
        $data = [];
        $this->client = new Client();

        if(isset($_GET['id']) || isset($_POST['id'])) {
            $uId = isset($_GET['id']) ? (int)$_GET['id'] : (int)$_POST['id'];
            $usuario = $this->client->list("tb_cliente", "LIMIT 1", true, $uId);

            if(!$this->client->findById("tb_cliente", $uId)) {
                $data["retorno"] = true;
                $data["msg"] = "Não existe cliente com este ID";
            }else{
                $data["user_id"] = $usuario[0]->ID;
                $data["user_nome"] = $usuario[0]->NOME;
                $data["user_cpf"] = $usuario[0]->CPF;
                $data["user_email"] = $usuario[0]->EMAIL;
                $data["user_telefone"] = $usuario[0]->TELEFONE;

                if(isset($_POST['acao'])) {
                    $id = $_POST['id'];
                    $nome = $_POST['nome'];
                    $cpf = $_POST['cpf'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];

                    $this->client->update("tb_cliente", "NOME = '{$nome}', CPF = '{$cpf}', EMAIL = '{$email}', TELEFONE = '{$telefone}' ",(int)$id);
                    $data["msg"] = "Cliente salvo com sucesso!";
                    $data["retorno"] = true;
                }

            }

        } else {
            $data["retorno"] = true;
            $data["msg"] = "Entre com um ID existente para edição";
        }

        $this->view->render($data);
    }
}