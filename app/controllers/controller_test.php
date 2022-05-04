<?php


Class Controller_Test extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->model = new TestModel();
    }
	
	function action_index()
	{	
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->validateForm($_POST);
            var_dump($this->model->save());
        }
        $vars = [];

        $vars["test"] = $this->model->table->findAll(); 
        
		$this->view->generate('test_view.php', 'template_view.php',$this->model);
	}

}