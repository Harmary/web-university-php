<?php

include 'D:/web/web-university-php/app/models/validators/ContactsFormValidation.php';

class Model_Contacts extends Model{

    public $fields = [
        "name" => "",
        "gender" => "",
        "phone" => "",
        "email" => "",
        "dateValue" => "",
        "age" => ""
    ];

    function __construct()
    {
        $this->validator = new ContactsFormValidation();
    }

    function validateForm($post_array)
    {
        unset($post_array["submit"]);
        if (!empty($post_array["email"])) {
            $this->fields["email"] = $post_array["email"];
        }
        if (!empty($post_array["name"])) {
            $this->fields["name"] = $post_array["name"];
        }
        if (!empty($post_array["lastName"])) {
            $this->fields["lastName"] = $post_array["lastName"];
        }
        if (!empty($post_array["phone"])) {
            $this->fields["phone"] = $post_array["phone"];
        }
        if (!empty($post_array["dateValue"])) {
            $this->fields["dateValue"] = $post_array["dateValue"];
        }
        if (!empty($post_array["gender"])) {
            $this->fields["gender"] = $post_array["gender"];
        }
        if (!empty($post_array["age"])) {
            $this->fields["age"] = $post_array["age"];
        }
        $this->validator->validate($this->fields);
    }
    
}