<?php

namespace Controller;

use Library\Controller;

class APIController extends Controller
{
    public function indexAction()
    {
        $book = ['book1', 'book2'];
        
        header('Content-type: application/json');
        return json_encode($book);
    }
}