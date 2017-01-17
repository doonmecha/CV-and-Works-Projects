<?php
/*****************************************/
/********** Conditions Composées *********/
/*****************************************/
echo "CONDITIONS COMPOSEES <br><br><br>";
echo "Le 'ET' logique (&&)  <br><br>";
echo "Avec le 'ET' toutes les conditions DOIVENT etre vrai pour entrer dans le premier bloc.  <br><br> ";


$animal = "Chat";
$vivant = true;
echo "1.Est-ce un Chat vivant : ";
if($animal == "Chat" && $vivant == true){
  //si toutes les conditions sont vraies
  echo "Oui";
}else{
  //si une ou toutes les conditions sont fausses
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = true;
echo "2.Est-ce un Chat vivant : ";
if($animal == "Chat" && $vivant){
  //si toutes les conditions sont vraies
  echo "Oui";
}else{
  //si une ou toutes les conditions sont fausses
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = true;
echo "3.Est-ce un Chat vivant : ";
if($animal == "Chat" && $vivant){
  //si toutes les conditions sont vraies
  echo "Oui";
}else{
  //si une ou toutes les conditions sont fausses
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = false;
echo "4.Est-ce un Chat vivant : ";
if($animal == "Chat" && $vivant){
  //si toutes les conditions sont vraies
  echo "Oui";
}else{
  //si une ou toutes les conditions sont fausses
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = false;
echo "5.Est-ce un Chat vivant : ";
if($animal == "Chat" && $vivant){
  //si toutes les conditions sont vraies
  echo "Oui";
}else{
  //si une ou toutes les conditions sont fausses
  echo "Non";
}
echo "<br><br>";

//----------------------------------------
//----------------------------------------

echo "Le 'OU' logique (||)  <br><br>";
echo "Avec le 'OU' une ou toutes conditions doivent etre vraie. <br><br>";

$animal = "Chat";
$vivant = true;
echo "6.Est-ce un Chat vivant ou un etre vivant : ";
if($animal == "Chat" || $vivant){
  //si au moins une des conditions est vraie
  echo "Oui";
}else{
  //si aucune des conditions est vraie
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = false;
echo "7.Est-ce un Chat vivant ou un etre vivant : ";
if($animal == "Chat" || $vivant){
  //si au moins une des conditions est vraie
  echo "Oui";
}else{
  //si aucune des conditions est vraie
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = false;
echo "8.Est-ce un Chat vivant ou un etre vivant : ";
if($animal == "Chat" || $vivant){
  //si au moins une des conditions est vraie
  echo "Oui";
}else{
  //si aucune des conditions est vraie
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = true;
echo "9.Est-ce un Chat vivant ou un etre vivant : ";
if($animal == "Chat" || $vivant){
  //si au moins une des conditions est vraie
  echo "Oui";
}else{
  //si aucune des conditions est vraie
  echo "Non";
}
echo "<br><br>";
