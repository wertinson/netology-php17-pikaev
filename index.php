<?php

$name = "Алексей";
$age = "26";
$email = "mymail@hotmail.com";
$city = "Самара";
$caption = "Большие амбиции для маленьких учреждений";

echo "<h1>Страница пользователя $name</h1>";
echo "<table>";
  echo "<tr>";
    echo "<td><p>Имя</p></td>";
    echo "<td><p>$name</p></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><p>Возраст</p></td>";
    echo "<td><p>$age</p></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><p>Адрес электронной почты</p></td>";
    echo "<td><a href='mailto:$email'>$email</a></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><p>Город</p></td>";
    echo "<td><p>$city</p></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><p>О себе</p></td>";
    echo "<td><p>$caption</p></td>";
  echo "</tr>";
echo "</table>";

?>
