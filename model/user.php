<? require_once("model/model.php")

class User extends Model {

    private $sql;

    public function __construct(){
        parent::__construct();
        $this -> sql = "";
    }

    // Add user
    public function addUser($name = 'unknown', $pass = 'qwerty'){
        $this -> sql = "

        "

        $this -> inDB ($this -> sql);
    }

    // Update user

    // Edit user

    // Delete user

}

?>