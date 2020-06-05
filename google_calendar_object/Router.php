<?php

class Router {
 
    function doUserAction() {
       
       
        (new Presenter())->putMenu(); //call method putMenu
       
        if (!isset($_GET['action']))
            return;
            $function = $_GET['action']; //assign valiable to name_function 
          
        (new Logic(new Presenter))->$function();
    }
 
}