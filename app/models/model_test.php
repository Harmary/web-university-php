<?php

include 'app/models/validators/testFormValidation.php';
include_once 'app/models/Test.php';

class TestModel extends Model{

    public $table;

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
        $this->table = new Test();
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
    
    function save(){
        $this->table->name = $_POST["name"];
        $this->table->group = $_POST["group"];
        $this->table->ans1 = $_POST["qst1"];
        $this->table->ans2 = $_POST["qst2"];
        $this->table->ans3 = $_POST["qst3"];
        $this->table->date = date('d.m.y h:i:s');

        $this->table->save();
    }
}