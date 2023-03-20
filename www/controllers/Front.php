<?php

class Front{


    public function home()
    {
        $view = new View("main/homepage", "back");
    }


    public function contact()
    {
        die("Voici ma nouvelle page de contact");
    }


}