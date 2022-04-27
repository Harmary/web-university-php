<?php

include 'app/models/validators/testFormValidation.php';

class TestModel extends Model{
    public $fields = [
        "name"=>"",
        "group"=>"",
        "qst1"=>"",
        "qst2"=>"",
        "qst3"=>"",
    ]; 

    function __construct()
    {
        $this->validator = new TestFormValidation();
    }

    function validateForm($post_array)
    {
        unset($post_array["submit"]);
        if (!empty($post_array["group"])) {
            $this->fields["group"] = $post_array["group"];
        }
        if (!empty($post_array["name"])) {
            $this->fields["name"] = $post_array["name"];
        }
        if (!empty($post_array["qst1"])) {
            $this->fields["qst1"] = $post_array["qst1"];
        }
        if (!empty($post_array["qst2"])) {
            $this->fields["qst2"] = $post_array["qst2"];
        }
        if (!empty($post_array["qst3"])) {
            $this->fields["qst3"] = $post_array["qst3"];
        }
        $this->validator->validate($this->fields);
    }
}