<?

class Controller_Blog extends Controller {

    function __construct()
    {
        $this->model = new BlogModel;
        $this->view = new View;
    }

    function action_index()
    {
        
        $this->view->generate('blog_view.php','template_view.php',$this->model);
    }

}