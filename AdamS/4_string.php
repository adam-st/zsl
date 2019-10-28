<?php

  echo <<< FORM
  <form method="post">
    <input type="text" name="imie" placeholder="Wpisz imię"><br><br>
    <input type="submit" name="button" value="Zatwierdź"><br><br>
  </from>
FORM;

  if (isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    echo "Dane przed poprawą: ",$imie,'<br>','<br>';
  }
//zamiana na małe litery
  echo strtolower($imie),'<br>';

//zamiana na duże litery
  echo strtoupper($imie),'<br>';

//zamiana pierwszej litery na dużą
  echo ucfirst($imie),'<br>';

//zamiana pierwszej litery na dużą
  echo ucwords($imie),'<br>';

//zamiana wszystkich na małe a potem pierwszej na dużą
  echo ucfirst(strtolower($imie)),'<br>','<br>';

################################################################

$lorem= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


echo $lorem,'<br>';
$col = wordwrap($lorem,40,'<br>');
$col = wordwrap($lorem,40,'<hr>');
echo $col,'<br>';

//czyszczenie zawartosci buffora
ob_clean();

####################################################


$name='Tomasz';
$name1=' Tomasz  ';

echo "Długość zmiennej $name:  ", strlen($name),'<br>';//6
echo "Długość zmiennej $name1:  ", strlen($name1),'<br>';//9

echo strlen(ltrim($name1)),'<br>'; //7
echo strlen(rtrim($name1)),'<br>'; //8
echo strlen(trim($name1)),'<hr>'; //6

//przeszukiwanie ciągów znaków

$address = 'Poznań, ul.Przełajowa 4, tel. (61) 123-45-67';
$search = strstr($address, 'tel');
echo $search,'<br>';

$address = 'Poznań, ul.Przełajowa 4, tel. (61) 123-45-67<br>';
$search = strstr($address, 'tel', true);
echo $search,'<br>';

$address = 'Poznań, ul.Przełajowa 4, tel. (61) 123-45-67<br>';
$search = stristr($address, 'Tel');
echo $search,'<br>';

echo strstr('zsl@gmail.com', '@'),'<br>'; //@gmail.com
echo strstr('zsl@gmail.com', 64),'<br>'; //@-64 ASCII

//pozycja

$pos = strpos('abcdefg', 'cde');
echo $pos,'<br>';//2

$pos = strpos('abcabc', 'ab');
echo $pos,'<br>';//0

/*
Sprawdź czy ciąg o nazwie text2 znajduje się w ciągu text1
*/

$text1 = "abcdabcd";
$text2 = "ab";


if (strpos($text2,$text1) === false)
  {
      echo "Ciąg $text2 nie zostal znaleziony w ciagu $text1",'<br>';
  }
  else {
    echo "Ciąg $text2 zostal znaleziony w ciagu $text1",'<br>';
  }

//przetwarzanie ciagu znakow

$replace = str_replace('zsl','szkoła', 'zsl ul. Przełajowa 4');

echo $replace,'<br>';

//substr

echo substr('Janusz Kowalski', 3),'<br>';//usz Kowalski
echo substr('Janusz Kowalski', -3),'<br>';//usz Kowalski
echo substr('Janusz Kowalski', 7, 5),'<br>';//Kowal
echo substr('Janusz Kowalski', 7, -3),'<br>';//Kowal

//zamiana poskich znakow

$login = "żąkil";
$censore = array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
$replace = array('a','e','s','z','z','c','o','n','l');

$newLogin = str_ireplace($censore, $replace, $login);
echo $newLogin,'<hr>';

$text = <<< TEXT
  zsł - Zespół
  Szkół
  Łączności
TEXT;

echo "Przed wywołaniem funkcji nl2br:<br>$text<br>";
echo "<br>Po wywołaniu funkcji nl2br:<br>";
echo nl2br($text);





 ?>
