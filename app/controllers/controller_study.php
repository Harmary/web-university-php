<?php

Class Controller_Study extends Controller{

    function action_index()
	{	
		$this->view->generate('study_view.php', 'template_view.php');
	}

}

