<?php

class config {
    const DSN = 'DATABASE';
    const NAME = 'NAME';
    const PASSWORD = 'PASSWORD';
}

class singleTon 
{
    protected $dsn;
    protected $name;
    protected $password;
    private static $db_instance;
    
    private function __construct($dsn, $name, $password){
        $this->dsn = $dsn;
        $this->name = $name;
        $this->password = $password;
    }
    function __destruct() {
        print "Destroying " . $this->name . "\n";
    }    
    public function create_connection($dsn, $name, $password){
        if(empty(self::$db_instance)){
            self::$db_instance = new self($dsn, $name, $password);
        }
        return self::$db_instance;
    }
    public function call_test_class($dsn, $name, $password){
        if(empty(self::$db_instance)){
            self::$db_instance = new test_singleton($dsn, $name, $password);
        }
        return self::$db_instance;
    }    
    public function call_db_dsn(){
        return $this->dsn;   
    }
    public function call_db_name(){
        return $this->name;
    }
    public function call_db_password(){
        return $this->password;
    }    
    
}

class test_singleton {
    // protected $dsn;
    // protected $name;
    // protected $password;
    
    public function __construct($dsn,$name,$password){
        $this->dsn = $dsn;
        $this->name = $name;
        $this->password = $password;        
    }
    public function test() {
        echo $this->dsn;
        echo $this->name;
        echo $this->password;
    }
}

$test = singleTon::create_connection('db','test','password');
print_r($test->call_db_dsn());
