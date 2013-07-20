<?php

class Controller_Demo extends Controller
{
    
    function action_index()
    {
        return Response::forge(View::forge('demo/index'));
    }
   
    function action_showdata()
    {
        $data = array('text'=>'Nagoya', 'hoge'=>'Tokyo!');
        return Response::forge(View::forge('demo/showdata',$data));
    }
    
    function action_select($id = null)
    {
       
        
        
        $list = array(
            1 => '1st',
            2 => '2st',
            3 => '3st'
        );
        
        if($id === null) $id = 1;
        else if($id > 3) $id = 3;
        
        $data = array('text' => $list[$id]);
        return Response::forge(View::forge('demo/select',$data));     
    }
}
?>
