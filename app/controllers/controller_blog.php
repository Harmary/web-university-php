<?

class Controller_Blog extends Controller
{

    function __construct()
    {
        $this->model = new BlogModel;
        $this->view = new View;
    }

    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->validateForm($_POST);
            $this->model->saveFile();
        }

        $this->model->showPages();
        // $lenPage = 2;
        // $vars = array();
        // $vars["numberOfPages"] = $lenPage;
        // $vars["page"] = isset($_GET["page"]) ? $this->setPage($_GET["page"], $lenPage) : 1;
        // $firsElementPage = ($vars["page"] - 1) * $lenPage;
        // $vars['reсords'] = $this->model->table->getRecords($firsElementPage, $lenPage, "ORDER BY date DESC");
        $this->view->generate('blog_view.php', 'template_view.php', $this->model);
    }


    public function setPage($pageIn, $lenPage)
    {
        $countRecords = $this->model->table->getCount() - 1;
        $countPages = ceil($countRecords / $lenPage);
        if ($pageIn <= $countPages && $pageIn > 0)
            $pageOut = $pageIn;
        elseif ($pageIn > $countPages)
            $pageOut = $countPages;
        else
            $pageOut = 1;

        return $pageOut;
    }
}
