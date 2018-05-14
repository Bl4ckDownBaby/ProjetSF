<?php


//src/Controller/PatrickController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PatrickController
{

    public function Display()
    {
        $html = "<html><h1>Hello Patrick !</h1></html>";
        return new Response($html);
    }

}
