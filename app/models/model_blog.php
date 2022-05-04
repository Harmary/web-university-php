<?

include 'app/models/validators/formValidation.php';
include 'app/models/Blog.php' ;



class BlogModel extends Model {
    public $table;

    function __construct()
    {
        $this->validator = new FormValidation();
        $this->table = new Blog();

    }

    
}