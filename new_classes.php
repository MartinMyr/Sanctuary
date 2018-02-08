<?php
    class Person {
        public    $country = "sweden";    //Attribut
        public    $firstName;    //Attribut
        public    $lastName;    //Attribut

        public function setMyName($newFirstName, $newLastName){
            $this->firstName = $newFirstName;
            $this->lastName = $newLastName;
        }
        public  function sayMyName(){
            echo "myname is ...";
        }



    };
    $myPerson = new Person;
    print_r($myPerson);
    $myPerson->setMyName("lisa", "simpsons");
    $myPerson->setMyName("bart", "simpsons");
    print_r($myPerson);
?>