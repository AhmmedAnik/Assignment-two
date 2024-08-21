<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    
    $vowel_count =preg_match_all('/[aeiou]/i',$string);

    $reverse_string = strrev($string);

    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reverse_string </br>";

}