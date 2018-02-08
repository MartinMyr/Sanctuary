<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK href="style.css" rel="stylesheet" type="text/css">
    <title>Animals</title>
</head>
<body>
    
    <form method = "POST" action = "index.php">
    <h1>Välj ditt djur/nöt :D </h1>
        <input type = "hidden" value= "mitt gömda värde" name="myKey">
        <h4>Ange mängden kokosnötteee</h4>    <input name = "quantity" type = "number">
        <h4>Ange mängden Apooor</h4>    <input name = "quantity" type = "number">
        <h4>Ange mängden Tigrar</h4>    <input name = "quantity" type = "number">
        <h4>Ange mängden Giraffer</h4>    <input name = "quantity" type = "number"> <br/><br/>
        <button type = "submit">skicka </button>
        <img src = "/animals/coco.jpg" onclick='alert("hej")'/>

</body>
</html>



<?php




    $nameForObject = array("Elon", "Yeppe", "Thommy", "Roy", "Jolle", "Daniel", "Viktor", "JockeBoi", "Herr grävling", "Jokern");
    
    
    function randomName(){
        $randomNames = $nameForObject[mt_rand(0, count($nameForObject) - 3)];
        echo $name;
       
    }
   

    abstract class Animal{
        protected $name;
        abstract protected function makeSound();
        abstract protected function onClick();
    
    }

    class Kokos{
        protected $name;
        public $image = "/animal/coco.jpg";
    }

      class Giraff extends Animal{
        public $image = "/animal/giraff.png";
        function makeSound(){

        }
        function onClick(){
            makeSound();
        }
    
    }
     class Apa extends Animal{
        public $image = "/animals/monkey.jpg";
        function makeSound(){

        }
        function onClick(){
            makeSound();
        }
    }
     class Tiger extends Animal{
        public $image = "/animals/tiger.jpg";
        function makeSound(){

        }
        function onClick(){
            makeSound();
        }
    }

?>