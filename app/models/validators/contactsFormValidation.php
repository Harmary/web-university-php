<?php

include 'D:/web/web-university-php/app/models/validators/formValidation.php';

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