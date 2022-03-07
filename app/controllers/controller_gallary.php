<?php

Class Controller_Gallary extends Controller{

    function action_index()
	{	
		$this->view->generate('gallary_view.php', 'template_view.php');
	}

}

?>