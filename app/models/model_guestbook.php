<?

class ModelGuestbook extends Model {
    function __construct()
    {
        
    }
    public function saveComment(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $message = PHP_EOL.$_POST['name'].';'.$_POST['email'].';'.$_POST['comment'];
            $file = fopen('public/files/messages.inc.txt',"a+");
            fwrite($file,$message);
        }
    }
    function getFileText(){
        
    }
}