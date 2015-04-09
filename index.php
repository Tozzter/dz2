<?php header('Content-type: text/html; charset=utf-8');
   
   $name=' Кирилл ';
   $age=' 27 ';
   
   echo 'Меня зовут'.$name, '<br>', 'Мне'.$age.'лет';
   unset ($name, $age);
   
   // задание готово
   
   
   
   define('CITY','Город Тюмень');
   
   defined('CITY','Город Тюмень');
   
   echo '<br>', CITY, '<br>';
   
   // задание готово
   
   
   $book=array();
   $book['title']="Ведьмак";
   $book['author']="Анджей Сапковский";
   $book['pages']="1344";
           
   echo ('Недавно я прочитал книгу '.$book['title']); 
   echo (', написанную автором '.$book['author']);
   echo (', я осилил все '.$book['pages']);
   echo (' страниц, мне она очень понравилась ');
   
   // задание готово
   
   
   
   $book1=array('title'=>'Ведьмак', 'author'=>'Анджей Сапковский', 'pages'=>'1344');
   $book2=array('title'=>'Бесплодные земли', 'author'=>'Стивен Кинг', 'pages'=>'688');
           
   $books=array($book1, $book2); 
   
   echo('<br> Недавно я прочитал книги '.$books[0]['title'].' и '.$books[1]['title']." , "
   . " написанные соответственно авторами ".$books[0]['author']." и ".$books[1]['author'].",
   я осилил в сумме ".($books[0]['pages'] + $books[1]['pages'])." страниц, не ожидал от себя подобного");
   
   // задание готово

?>