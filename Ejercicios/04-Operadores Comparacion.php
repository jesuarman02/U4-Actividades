<?php

var_dump(3 == 3); //true
echo "<br>";
var_dump(3 == 2); //false
echo "<br>";
var_dump(3 == "3"); //true
echo "<br>";
var_dump(3 === "3"); //false
echo "<br>";
var_dump(3 != "3"); //false
echo "<br>";
var_dump(3 !== "3"); //true
echo "<br>";
var_dump(3 <> "3"); //false


echo "<br>";
var_dump(3 > 2); //true
echo "<br>";
var_dump(3 < 2); //false
echo "<br>";
var_dump(2 <= 2); //true
echo "<br>";
var_dump(3 >= 3); //true

echo "<br>"; //nave de espacial
var_dump(3 <=> 3); //0
echo "<br>";
var_dump(1 <=> 3); //-1
echo "<br>";
var_dump(3 <=> 1); //-1

echo "<br>"; //fusion de null
var_dump(null ?? null ?? null); //regresa el numero o la expresion mas a la izquierda mientras no sea null




?>