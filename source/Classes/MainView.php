<?php


namespace Source\Classes;


class MainView
{
    private $fileName;
    private $header;
    private $footer;

    public function __construct(string $fileName, string $header = "header", string $footer = "footer")
    {
        $this->fileName = $fileName;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render(array $data = [])
    {
        include(__DIR__ . "/../../public/template/".$this->header.".php");
        include(__DIR__ . "/../../public/template/pages/".$this->fileName.".php");
        include(__DIR__ . "/../../public/template/".$this->footer.".php");
    }
}