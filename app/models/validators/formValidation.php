<?php

class FormValidation {

    public $rules = [];
    public $messages = [];
    public $errors = [];
    public $predicates = [];

    public $post;

    public function isNotEmpty($data){
        if(empty($data)){
            return "Пустое поле";
        }
    }

    public function isInteger($data){
            return is_numeric($data);
    }

    function isLess($data,$value){
        if(strlen($data)<$value){
            return false;
        }

    }

    public function isGreater($data,$value){
        $isInteger = $this->isInteger($data);
        if (empty($isInteger)) {
            $int_value = intval($data);
            if ($int_value > $value) {
                return "Значение должно быть не больше $value";
            }
        } else {
            return $isInteger;
        }
    }

    public function isEmail($data){
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return "Введите корректный email";
        }  
    }

    public function setRule($field_name, $rules){
        if ($rules) {
            $this->rules[$field_name] = $rules;
        }
    }
    
    function isDate($data)
    {
        if (!preg_match('/([0-9]|[0-9][0-9])\/([0-9]|[0-9][0-9])\/([0-9][0-9][0-9][0-9])/', $data)) {
            return "Выберите корректную дату";
        }
    }

    function isWord($data)
    {
        if (!preg_match('/([A-Za-zА-Яа-я]){3}/', $data)) {
            return "Введите корректное слово";
        }
    }

    function isPhone($data)
    {
        $phone_length = 10;
        if(substr($data,0,1)=='8' && $this->isInteger($data) && $this->isLess(substr($data,1),$phone_length)) {
            return;
        } elseif ( substr($data,0,2)=='+7' &&  $this->isInteger($data) &&  $this->isLess(substr($data,1),$phone_length)){
           return;
        } else {
            return 'Введите корректный номер телефона!';
        }
       
    }


    protected function validateRule($field_name, $rule_name, $value)
    {
        $result = "";
        switch ($rule_name) {
            case "isNotEmpty": {
                    $result = $this->isNotEmpty($value);
                    break;
                }
            case "isEmail": {
                    $result = $this->isEmail($value);
                    break;
                }
            case "isPhone": {
                    $result = $this->isPhone($value);
                    break;
                }
            case "isDate": {
                    $result = $this->isDate($value);
                    break;
                }
            case "isWord": {
                    $result = $this->isWord($value);
                    break;
                }
            case "isMinAnswSize": {
                    $result = $this->isMinAnswSize($value, 19);
                    break;
                }
        }
        if (array_key_exists($field_name, $this->errors)) {
            array_push($this->errors[$field_name], $result);
        } else {
            $this->errors[$field_name] = array($result);
        }
    }

    function isMinAnswSize($data, $size)
    {
        if (sizeof(explode(" ", $data)) < $size) {
            return "Ответ содержит меньше " . $size . " слов";
        }
    }

   
    public function validate($post_array){

    }

    public function showErrors() {
        foreach ($this->errors as $pkey => $errors) {
            $flag = false;
            foreach ($errors as $error) {
                if ($error != "") {
                    $flag = true;
                    break;
                }
            }
            if ($flag == true) {
                $this->messages[$pkey] = '<div style="color: red;">' . $error . '</div>';
            } else {
                $this->messages[$pkey] = '<div style="color: green;"> Верно!</div>';
            }
        }
    }
}