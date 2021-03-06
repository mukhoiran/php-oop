<?php

// require_once 'testing.php';
// require_once 'people.php';
// require_once 'josh.php';

//auto load class
spl_autoload_register(function ($class_name){
  include $class_name . '.php';
});

$hello = new testing;
// echo $hello->text." ".$hello->int;
// $hello->home();
// echo $hello->count();
$hello->set_bro('This is set and get method');
echo $hello->get_bro()."<br>";

$human = new people;
$human->set_bro('This is come from inheritance');
echo $human->get_bro();
$human->hai();

// call static function
josh::hands();

//call static variable
echo josh::$test;

//call method in one line with chaining
$chan = new testing;
$chan->set_chaining(30)->set_bro('this is trial chaining method');

echo $chan->int.' - '.$chan->text.'<br>';

//call class as string (magic method)
echo $chan;
?>
