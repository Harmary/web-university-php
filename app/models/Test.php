<?

include_once 'app/core/BaseActiveRecord.php';

use app\core\BaseActiveRecord;

class Test extends BaseActiveRecord{

    public $tablename = 'test';
    public $id;
    public $name;
    public $group;
    public $ans1;
    public $ans2;
    public $ans3;
    public $date;
    
}