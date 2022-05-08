<?

include_once 'app/models/validators/formValidation.php';
include_once 'app/models/Blog.php' ;

class BlogModel extends Model {
    public $table;

    public $fields = [
        "title"=>"",
    ];

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
    }

    function validateForm($post_array)
    {
        unset($post_array["submit"]);
        if (!empty($post_array["title"])) {
            $this->fields["title"] = $post_array["title"];
        }
        $this->validator->validate($this->fields);
    }

    
}