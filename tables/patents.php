<?php


//Задаем имя таблицы
$table['header']="Товарные знаки и патенты (".$GLOBALS['countries'][get_country()]['name_rus'].")";

//Толщина сетки таблицы (толщина рамки всегда на один пиксель больше)
$table['border']=1;

//Задаем название счетчика
$table['counter']="Количество";

//Задаем сортировку по умолчанию
$table['sort_default']='id';

//Задаем направление сортировки по умолчанию
$table['sort_direction_default']='asc';
?>
