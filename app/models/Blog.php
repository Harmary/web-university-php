<?

use app\core\BaseActiveRecord;

include_once 'app/core/BaseActiveRecord.php';

class Blog extends BaseActiveRecord {
    
    public $tablename = 'post';

    public $date;
    public $title;
    public $image;
    public $text;        
}