<?php
class View{

    private $view;
    private $template;

    public function __construct(String $view, String $template = "back")
    {
        $this->setView($view);
        $this->setTemplate($template);
    }

    public function __toString(): string
    {
        return "Le template c'est ".$this->template." et la vue c'est ".$this->view;
    }

    public function setView(String $view): void
    {
        if( !file_exists("views/".$view.".php")){
            die("La vue ".$view." n'existe pas");
        }else{
            $this->view = "views/".$view.".php";
        }
    }
    public function setTemplate(String $template): void
    {
        if( !file_exists("views/".$template.".php")){
            die("Le template ".$template." n'existe pas");
        }else{
            $this->template = "views/".$template.".php";
        }
    }

    public function __destruct()
    {
        include $this->template;
    }

}

