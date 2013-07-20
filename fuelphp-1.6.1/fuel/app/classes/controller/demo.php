<?php

class Controller_Demo extends Controller{
    
    function action_index()
    {
        return Response::forge(View::forge('demo/index'));
    }
   
    function action_showdata()
    {
        $data = array('text'=>'Nagoya');

        return Response::forge(View::forge('demo/showdata',$data));
    }
    
}


?>
