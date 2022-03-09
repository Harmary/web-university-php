<?php

Class Controller_History extends Controller{

    function action_index()
	{	
		$this->view->generate('history_view.php', 'template_view.php');
	}

}

