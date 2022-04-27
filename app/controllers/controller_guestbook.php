<?

class Controller_Guestbook extends Controller {

    function __construct()
    {
        $this->model = new ModelGuestbook();
        $this->view = new View();
    }

    function action_index()
	{	
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->saveComment($_POST);
        }
        $this->view->generate('guestbook_view.php','template_view.php', $this->model);

	}

}