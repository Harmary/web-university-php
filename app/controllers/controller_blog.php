<?

class Controller_Blog extends Controller {

    

    function __construct()
    {
        $this->model = new BlogModel;
        $this->view = new View;
    }

    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->validateForm($_POST);
            
        }
        $this->view->generate('blog_view.php','template_view.php',$this->model);
    }

}