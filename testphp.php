<?php echo 'Hello World'; 
class Testphp {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }
}
?>