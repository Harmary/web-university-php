<?

include_once 'app/models/validators/formValidation.php';
include_once 'app/models/Blog.php' ;

class BlogModel extends Model {
    public $table;

    public $fields = [
        "title"=>"",
    ];

    public $page;
    public $pages_count;
    public $perpage;
    public $start_pos;

    function __construct()
    {
        $this->validator = new FormValidation();
        $this->table = new Blog();
        $this->validator->predicates = [
            "title"=>["isNotEmpty"],
        ];
        $this->validator->messages = [
            "title"=>"",
        ];
        $this->showPages();
    }

    function validateForm($post_array)
    {
        unset($post_array["submit"]);
        if (!empty($post_array["title"])) {
            $this->fields["title"] = $post_array["title"];
        }
        $this->validator->validate($this->fields);
    }

    function showPages(){
        $this->perpage = 2; // Количество отображаемых данных из БД

        if (empty(@$_GET['page']) || ($_GET['page'] <= 0)) {
            $this->page = 1;
        } else {
            $this->page = (int) $_GET['page']; // Считывание текущей страницы
        }
        $count = $this->table->getCount();
        $this->pages_count = ceil($count / $this->perpage);
        if ($this->page > $this->pages_count) $this->page = $this->pages_count;
        $this->start_pos = ($this->page - 1) * $this->perpage;
    }

    function saveFile(){
        $this->table->title = $_POST["title"];
        $uploaddir = 'source/img/blog/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
        $this->table->image = $uploadfile;
        $this->table->text = $_POST["text"];
        $this->table->date = date('d.m.y h:i:s');

        $this->table->save();
    }

    function link_bar($page, $pages_count)
    {
        for ($j = 1; $j <= $pages_count; $j++) {
            // Вывод ссылки
            if ($j == $page) {
                echo ' <a style="color: #808000;" ><b>' . $j . '</b></a> ';
            } else {
                echo ' <a style="color: #808000;" href=' . $_SERVER['php_self'] . '?page=' . $j . '>' . $j . '</a> ';
            }
            if ($j != $pages_count) echo ' ';
        }
        return true;
    }


}