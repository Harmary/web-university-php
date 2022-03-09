<?php

Class Controller_Gallary extends Controller{

	function __construct()
	{
		$this->model = new Model_Gallary();
		$this->view = new View();
	}
	
    function action_index()
	{	
		$data = $this->model->get_data();		
		$this->view->generate('gallary_view.php', 'template_view.php',$data);
	}

}

