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
            $message = $_POST['name'] . ';' . $_POST['email'] . ';' . $_POST['comment'] . ";" . date("d.m.y") . PHP_EOL;
            $file = fopen($this->path, "a+");
            fwrite($file, $message);
            fclose($file);
        }
    }

    function getFileText()
    {
        $lines = file($this->path);
        $records = array();
        foreach ($lines as $line) {
            list($name, $email, $comment, $date) = str_getcsv($line, ";");
            $records[] = [
                "name" => $name,
                "email" => $email,
                "comment" => $comment,
                "date" => $date,
            ];
        }

        return $records;
    }

    function saveFile()
    {
        $uploaddir = 'public/files/';
        $uploadfile = $uploaddir . basename($_FILES['commentFile']['name']);
        if (move_uploaded_file($_FILES['commentFile']['tmp_name'], $uploadfile)) {
            echo "Файл корректен и был успешно загружен.\n";
        } else {
            echo "Ошибка загрузки!\n";
        }
    }
}
