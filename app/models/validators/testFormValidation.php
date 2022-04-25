<?php

include 'C:/Users/mashu/web/web-university-php/app/models/validators/formValidation.php';

class TestFormValidation extends FormValidation{
    
    public $messages = [
        "name" => "",
        "group"=>"",
        "qst1"=>"",
        "qst2"=>"",
        "qst3"=>"",
    ];

    public $predicates = [  
        "name"=>["isNotEmpty",""], 
        "group"=>["isNotEmpty"],
        "qst1"=>["isNotEmpty"],
        "qst2"=>["isNotEmpty"],
        "qst3"=>["isNotEmpty","isMinSize"],
    ];

    function validate($post_array)
    {
        parent::validate($post_array);
    }

    // function answer($field_name,$data)
    // {
    //     if($field_name[$field_name->length] == "1") {

    //     }
    // }
} 