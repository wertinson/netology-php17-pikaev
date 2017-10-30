<?php

$name = "Алексей";
$age = "26";
$email = "mymail@hotmail.com";
$city = "Самара";
$caption = "Большие амбиции для маленьких учреждений";

?>

<h1>Страница пользователя <?php echo $name ?></h1>
<table>
  <tr>
    <td><p>Имя</p></td>
    <td><p><?php echo $name ?></p></td>
  </tr>
  <tr>
    <td><p>Возраст</p></td>
    <td><p><?php echo $age ?></p></td>
  </tr>
  <tr>
    <td><p>Адрес электронной почты</p></td>
    <td><a href='mailto:$email'><?php echo $email ?></a></td>
  </tr>
  <tr>
    <td><p>Город</p></td>
    <td><p><?php echo $city ?></p></td>
  </tr>
  <tr>
    <td><p>О себе</p></td>
    <td><p><?php echo $caption ?></p></td>
  </tr>
</table>
