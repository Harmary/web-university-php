<?php

include 'app/models/validators/formValidation.php';

class TestFormValidation extends FormValidation{
    
    public $messages = [
        "name" => "",
        "group"=>"",
        "qst1"=>"",
        "qst2"=>"",
        "qst3"=>"",
    ];

    public $predicates = [  
        "name"=>["isNotEmpty","isWord"], 
        "group"=>["isNotEmpty"],
        "qst1"=>["isNotEmpty"],
        "qst2"=>["isNotEmpty"],
        "qst3"=>["isNotEmpty","isMinSize"],
    ];

} 