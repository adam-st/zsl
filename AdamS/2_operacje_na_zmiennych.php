<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>operacje na zmiennych</title>
    <style>
    body{background-color:#303035;color:#F0F0F0;}
    </style>
  </head>
  <body>
    <?php
    $potega = 2 ** 10;
      echo $potega,'<hr>';//1024

      $a = 1;
      $b = 1.0;

      if($a == $b)
        echo " Zmienna a jest rowna b<br>";
      else {
        echo " Zmienna a nie jest rowna b<br>";
      }

      if($a === $b)
        echo " Zmienna a jest rowna b<br>";
      else {
        echo " Zmienna a nie jest rowna b<br>";
      }

    echo gettype($a),'<br>'; //intinger
    echo gettype($b),'<hr>'; //double

    $x=1;
    $y=2;

    $result = $x <=> $y;//0-równe,1-lewa wieksza,-1-prawa wieksza
    echo $result,'<hr>';

    #####################################

    $x = 2;
    echo $x++;//2
    echo ++$x;//4
    echo $x;//4
    $y = $x++;
    echo $y;//4
    $y = ++$x;
    echo $y;//6
    echo ++$y,'<hr>';//7

    #####################################
    //operatory rzutowania
    //bool,int,float,string,array,object,unset

    $text1 = '123abc';
    $text1 = (int)$text1;
    echo $text1,'<br>'; //123

    $text2 = '-1';
    $text2 = (bool)$text2;
    echo $text2,'<br>'; //1- true, nic - false
    echo gettype($text2),'<br>';//Bolean

    $text3 = '123';
    $text3 = (unset)$text3;
    echo $text3; //
    echo gettype($text3),'<br><hr>';//NULL

    #####################################

    $x = 10;
    echo is_string($x);//false
    echo is_bool($x);//false
    echo is_float($x);//false
    echo is_int($x);//1>true
    echo is_null($x),'<hr>';//false

    //@ operator ignorowania bledow

    $w;
    echo @gettype($w),'<hr>'; //NULL

    #####################################
    //zmienne superglobalne
    //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

    echo $_SERVER['SERVER_PORT'],'<br>'; //80
    echo $_SERVER['SERVER_NAME'],'<br>'; //127.0.0.1
    echo $_SERVER['SCRIPT_NAME'],'<br>'; ///AdamS/AplikacjeInternetowe/2_operacje_na_zmiennych.php
    echo $_SERVER['SERVER_PROTOCOL'],'<br>';//HTTP/1.1
    echo $_SERVER['DOCUMENT_ROOT'],'<br>','<br>';//C:/xampp/htdocs

    $localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
    echo $localFile,"<br>";


    $localFile = $_SERVER['DOCUMENT_ROOT'];
    $localFile .=$_SERVER['SCRIPT_NAME'];
    echo $localFile,"<hr>";

    ######################################
    //stałe
    //nazwy z dużych liter!

    define('NAZWISKO', 'Kowalski');
    echo NAZWISKO,'<br>';

    define('imie', 'Janusz');
    echo imie,'<br>';

    define('SURNAME', 'Nowak', true);//w 8 wersji php brak 3 argumentu
    echo sURnAME,'<br><hr>';

    ######################################
    //stałe predefiniowane

    echo PHP_VERSION,'<br>';
    echo gettype(PHP_VERSION),'<br>';

    if(PHP_VERSION > 5.6) {
      echo "Nowa wersja";
    } else {
      echo "Stara wersja";
    }

    echo PHP_OS, '<br>'; //WINNT
    echo __LINE__, '<br>'; //115
    echo __FILE__, '<br>'; //C:\xampp\htdocs\AdamS\AplikacjeInternetowe\2_operacje_na_zmiennych.php
    echo __DIR__, '<br>'; //xampp\htdocs\AdamS\AplikacjeInternetowe






     ?>
  </body>
</html>
