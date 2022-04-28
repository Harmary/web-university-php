<?

class ModelGuestbook extends Model
{

    public $path = 'public/files/messages.inc.txt';

    function __construct()
    {

    }
    public function saveComment()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $message = $_POST['name'] . ';' . $_POST['email'] . ';' . $_POST['comment'].";".date("m.d.y").PHP_EOL;
            $file = fopen($this->path, "a+");
            fwrite($file, $message);
            fclose($file);
        }
    }

    function getFileText()
    {
        $lines = file($this->path);
        $records = array();
        foreach ($lines as $line){
            list($name,$email,$comment) = str_getcsv($line, ";");
            $records[] = [
                "name"=>$name,
                "email"=>$email,
                "comment"=>$comment,
            ];
        }

        return $records;
    }

}
