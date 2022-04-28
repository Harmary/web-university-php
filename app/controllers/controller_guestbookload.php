<?

include 'app/models/model_guestbook.php';

class Controller_Guestbookload extends Controller {

    function __construct()
    {
        $this->model = new ModelGuestbook();
        $this->view = new View();
    }

    function action_index()
	{	
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->saveFile();
        }
        
        $this->view->generate('guestbookload_view.php','template_view.php', $this->model);

	}

}