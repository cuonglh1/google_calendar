<?php

class Router
{
	function doUserAction() {
       
        (new Presenter())->putMenu();
       
        if (!isset($_GET['action']))
            return;
            $function = $_GET['action'];
          
        (new Logic(new Presenter))->$function();
    }
}
