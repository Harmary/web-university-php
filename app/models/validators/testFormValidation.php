<?php

include 'D:/web/web-university-php/app/models/validators/formValidation.php';

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
        "qst1"=>["isNotEmpty",],
        "qst2"=>["isNotEmpty"],
        "qst3"=>["isNotEmpty","isMinSize"],
    ];

    function validate($post_array)
    {
        foreach ($post_array as $pkey => $value) {
            $rules = $this->predicates[$pkey];
            $this->SetRule($pkey, $rules);
        }

        foreach ($this->rules as $field => $rules) {
            foreach ($rules as $key => $rule_name) {
                $value = $post_array[$field];
                $this->validateRule($field, $rule_name, $value);
            }
        }
        $this->showErrors();
    }
} 