<?php
class Controller_Api extends Fuel\Core\Controller_Rest
{
    protected $format = 'xml';
    
    function get_data()
    {
        return Model_Bbs::find('all');
        
    }
}
?>
