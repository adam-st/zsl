<?php

  $colors =  array("Red","Green","Blue");
  $colors[3] = "Magenta";

  function ShowArray($colors)
  {
    for ($i=0; $i < count($colors); $i++) {
      $j = $i +1;
      echo "Kolor $j:  $colors[$i] <br>";
    }
  }

  echo ShowArray($colors);
echo "<hr>";
##############################################
//tablica asociacyjna

  $data = array(
    "name" => "Janusz",
    "surname" => "Nowak",
    "age" => "20",
    "country" => "Polska"
  );

  echo $data["age"],'<br><br>';

  foreach ($data as $value) {
    echo "$value ";
  }
  echo "<hr>";

  function ShowArrayAssoc($data)
  {
    foreach ($data as $key => $value) {
      echo "$key: $value <br>";
    }
    echo "<hr>";
  }

  echo ShowArrayAssoc($data);

##############################################
//tablice wielowymiarowe

$student = array(
  array("Anna","Nowak","Poznań"),
  array("Tomasz"),
  array("Krystyna","Pawlak"),
  array("Anna","Pawlak")
);

echo $student[2][0];
echo "<hr>";

function student($student)
{
  for ($i=0; $i < count($student) ; $i++) {
    for ($j=0; $j < count($student[$i]); $j++) {
      echo $student[$i][$j];
      echo " ";
    }
    echo "<br>";
  }
}

echo student($student);
echo "<hr>";

function student1($student)
{
  foreach ($student as $key => $value) {
    foreach ($student[$key] as $key => $value) {
      echo "$value ";
    }
    echo "<br>";
  }
}
echo student1($student);
echo "<hr>";

//zad utworzyć tablicę trójwymiarową oraz 5-wymiarową, napisz do tych tablic funkcję wyświetlające dane

$zad = array(
  array(
    array(
      array(
        array(
          "dane";
        )
      )
    )
  )
)

//sortowanie

  $tab = array(10,1,15,20,100,8);

function ShowArraySort($tab){
    foreach ($tab as $value) {
      echo "$value ";
    }
    echo "<hr>";
  }

ShowArraySort($tab);

//niermalejąco
sort($tab);
ShowArraySort($tab);

//nierosnąco
rsort($tab);
ShowArraySort($tab);

//sortowanie tablicy asocjacyjnej

$tabAssoc = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "country" => "Polska"
);

  ShowArrayAssoc($tabAssoc);

  //sortowanie według wartosci niemalejąco

  asort($tabAssoc);
  ShowArrayAssoc($tabAssoc);

  //sortowanie według wartosci nierosnąco

  arsort($tabAssoc);
  ShowArrayAssoc($tabAssoc);

  //sortowanie według klucza niemalejąco

  ksort($tabAssoc);
  ShowArrayAssoc($tabAssoc);

  //sortowanie według klucza nieosnąco

  krsort($tabAssoc);
  ShowArrayAssoc($tabAssoc);

  //wyświetlanie danych

  var_dump($tabAssoc);
  echo "<hr>";

  print_r($tabAssoc);

  echo "<pre>";
    var_dump($tabAssoc);
    print_r($tabAssoc);
  echo "</pre>";


 ?>
