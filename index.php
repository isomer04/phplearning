<?php


abstruct class Customer{
    private $id = 1;
    public $name;
    protected $email;
    private $balance;

    public function __construct($id, $name, $email, $balance){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }
    
    public function getCustomer($id){
        $this->id = $id;
        return $this->id;
    }

   abstruct public function getEmail();
   //{ return $this->email = $email;}

    

//     public function __destruct(){
//         echo '<br> The deconstructor Ran...';
//     }
// }

}

class Subscriber extends Customer{
    public $plan;

    public function __construct($id, $name, $email, $balance){
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    } 

    public function getEmail(){
        return $this->email = $email;
    }
}

$customer = new Customer
(1, 'Wagner', 'james@gmail.com', 'NH');

echo $customer->name;

echo '<br>';

echo $customer->getCustomer(3412);

$customer = new Subscriber
(1, 'Wagner', 'Wagner@gmail.com', 'NH', 'Pro');

echo $Subscriber->getEmail();


// static lesson


class User {
    public $username;
    public $password;
    public static $passwordLength = 5;

    public static function getPaaswordLength(){
        return self::$passwordLength;
    }


}

echo User::$passwordLength;

?>