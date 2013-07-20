<?php

class Controller_Demo extends Controller{
    
    function action_index()
    {
        return Response::forge(View::forge('demo/index'));
    }
   
    
}


?>
