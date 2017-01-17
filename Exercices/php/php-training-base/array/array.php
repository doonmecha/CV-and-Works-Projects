<?php

/*****************************************/
/********** Les tableaux : Array *********/
/*****************************************/
//déclaration de tableau méthode 1
$legumes = array('Salade', 'Asperge', 'Carotte');
//déclaration de tableau méthode 2
$fruits = ['Pomme', 'Cerise', 'Banane'];
echo 'Legumes<br>';
//La fonction print_r sert à afficher les tableaux (et objets) en profondeur. Pour un tableau, ça affichera
//les index (aussi appelé "clé") et leur valuer.
print_r($legumes);
echo '<br>';
echo 'Fruits<br>';
print_r($fruits);
echo '<br><br>';

//----------------------------------------

echo 'Afficher un element du tableau (l\'index d\'un tableau commence à 0)';
echo '<br>';
echo 'Le fruit a la 1er position dans le tableau '.$fruits[0].'<br>';
echo 'Le fruit a la 2eme position dans le tableau '.$fruits[1].'<br>';
echo 'Le fruit a la 3eme position dans le tableau '.$fruits[2];
echo '<br><br>';

//----------------------------------------

echo 'Remplacer des valeurs du tableau. Pomme devient Mangue, Cerise devient Letchis et Banane devient Fruit de la Passion';
echo '<br>';
echo 'Fruits[avant]<br>';
print_r($fruits);
echo '<br>';
$fruits[0] = 'Mangue';
$fruits[1] = 'Letchis';
$fruits[2] = 'Fruit de la passion';
echo 'Fruits[apres]<br>';
print_r($fruits);
echo '<br><br>';

/***** Tableaux multidimensionnel ***/
//------------------------------------
echo 'Tableau multidimensionnel <br>';
$vehicules = [
  ['Twingo', 'Aygo', 'C1', '107'],
  ['Clio', 'Golf', 'i30', '308'],
  ['Freelander', '3008', 'Santa fe', 'Sportage'],
];
print_r($vehicules);
echo '<br>';
echo 'Afficher les vehicules de la 1ere ligne du tableau : ';
echo $vehicules[0][0].', '.$vehicules[0][1].', '.$vehicules[0][2].', '.$vehicules[0][3];
echo '<br>';
echo 'Afficher les vehicules de la 2eme  ligne du tableau : ';
echo $vehicules[1][0].', '.$vehicules[1][1].', '.$vehicules[1][2].', '.$vehicules[1][3];
echo '<br>';
echo 'Afficher les vehicules de la 3eme ligne du tableau : ';
echo $vehicules[2][0].', '.$vehicules[2][1].', '.$vehicules[2][2].', '.$vehicules[2][3];
echo '<br><br>';

/***** Tableaux associatif **********/
//------------------------------------
echo 'Tableau associatif : ';
$vehicule = array(
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
/*
 * On aurait pu déclarer le tableau de cette façon aussi :
 * $vehicule = [
 *   'nom' => 'Aventador LP 700-4',
 *   'marque' => 'Lamborghini',
 *   'puissance' => 700,
 *   'prix' => 200000,
 * ];
 */
print_r($vehicule);
echo '<br><br>';

//------------------------------------

echo 'Acceder aux valeurs du tableau : <br>';
echo 'Mon vehicule est un(e) '.$vehicule['marque'].' '.$vehicule['nom'].' avec une puissance de '.$vehicule['puissance'].' cv qui coute '.$vehicule['prix'].' Euros';
echo '<br><br>';

/***** Tableaux associatif multidimensionnel **********/
//-----------------------------------------------------
echo 'Tableau associatif multidimensionnel : <br>';
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);
print_r($vehiculeConcession);
echo '<br>';
echo 'Le vehicule de bas de gamme s\'appelle '.$vehiculeConcession['Bas de gamme']['nom'].' de marque '.$vehiculeConcession['Bas de gamme']['marque'].' pour une puissance de '.
      $vehiculeConcession['Bas de gamme']['puissance'].'cv et coute '.$vehiculeConcession['Bas de gamme']['prix'].' Euros';
echo '<br>';
echo 'Le vehicule de Milieu de gamme s\'appelle '.$vehiculeConcession['Milieu de gamme']['nom'].' de marque '.$vehiculeConcession['Milieu de gamme']['marque'].' pour une puissance de '.
      $vehiculeConcession['Milieu de gamme']['puissance'].'cv et coute '.$vehiculeConcession['Milieu de gamme']['prix'].' Euros';
echo '<br>';
echo 'Le vehicule de Haut de gamme s\'appelle '.$vehiculeConcession['Haut de gamme']['nom'].' de marque '.$vehiculeConcession['Haut de gamme']['marque'].' pour une puissance de '.
      $vehiculeConcession['Haut de gamme']['puissance'].'cv et coute '.$vehiculeConcession['Haut de gamme']['prix'].' Euros';
