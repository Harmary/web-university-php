<?php

Class Controller_Contacts extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->model = new Model_Contacts();
    }

    function action_index()
	{	
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->validateForm($_POST);
        }
        $this->view->generate('contacts_view.php','template_view.php', $this->model);

	}

}

