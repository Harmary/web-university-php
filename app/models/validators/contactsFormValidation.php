<?php

include 'app\models\validators\FormValidation.php';

class ContactsFormValidation extends FormValidation {
    
    public $messages = [
        "name" => "",
        "gender" => "",
        "email" => "",
        "phone" => "",
        "dateValue" => "",
        "age" => ""
    ];

    public $predicates = [
        "name" => ["isNotEmpty", "isWord"],
        "gender" => ["isNotEmpty"],
        "email" => ["isNotEmpty", "isEmail"],
        "phone" => ["isNotEmpty", "isPhone"],
        "dateValue" => ["isNotEmpty", "isDate"],
        "age" => ["isNotEmpty"]
    ];

    function validate($post_array)
    {
       parent::validate($post_array);
    }
}