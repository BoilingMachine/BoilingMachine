<?php
// поиск одиночный

// данные клиента s4b - заменить на Ваши
$login = 'XXX';
$password = 'ZZZ';
$query = 'G240%20Logitech'; // ищем данный товар

// составляем запрос
$url = 'http://s4b.ru/s.jsp?a=10041&at=3&usrLogin='.$login.'&usrPassword='.$password.'&sr='.$query;
echo 'url = '.$url.'<br><br>';

// выполняем запрос
$res = file_get_contents($url);
echo 'res='.$res.'<br><br>';

// просмотр результата в виде таблицы
showResult($res);

// показать список найденных товаров
function showResult($res) {

$obj=json_decode($res, true);
echo '<table border=1><tr>';
foreach($obj['listStock']['headers'] as $item){ echo('<th>'.$item); }
foreach($obj['listStock']['rows'] as $row){
echo('<tr>');
foreach($row as $col){echo('<td>'.$col);}
}
echo '</table>';
}
?>