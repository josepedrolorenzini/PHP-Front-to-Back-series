<?php
# 1 
    // class Person{
    //     public $name; # public akes it accessible anywhere
    //     public $email;
    // }

    // $person1 = new Person; # instantiate new person object

    // $person1->name ='Johnny';

    // echo $person1->name;


# 2 Better method is to create private vars and getters and setters
    class Person{
        private $name; 
        private $email;
        private static $ageLimit = 50;

        public function __construct($name, $email){ # constructor runs automatically when instantiated
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct(){ # destructor
            echo __CLASS__.' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    echo Person::$getAgeLimit; # available if public
    // echo Person::getAgeLimit(); 
    // $person2 = new Person('Little', "lil@gmail.com");
    // $person2->setName('Little');
    // echo $person2->getName();

#3 Inheritence
    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance) { 
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'new '.__CLASS__.' created<br>';
        }

        public function __destruct(){ # change class from inherited class
            echo __CLASS__.' destroyed<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }
    
    // $customer1 = new Customer('Johnny', 'boy@mail.com', 500);
    // echo $customer1->getBalance();
?>