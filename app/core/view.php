<?php

class View {

   // public $template_view = 'template_view.php';

    function generate($content_view, $template_view ,$data = null){

        include 'app/views/'.$template_view;
    }

}

