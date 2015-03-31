<?php header('Content-type: text/html; charset=utf-8');
   
   $name=' Кирилл ';
   $age=' 27 ';
   
   echo 'Меня зовут'.$name, '<br>', 'Мне'.$age.'лет';
   unset ($name, $age);
   
   // задание готово
   
   
   
   define('CITY','Город','Тюмень');
   
   echo '<br>Город '.'Тюмень';
   
   define('CITY','Город','Тюмень123');
   
   // задание готово
   
   
   $book=array('title', 'author', 'pages');
   $massive['title']='Ведьмак';
   $massive['author']='Анджей Сапковский';
   $massive['pages']='1344';
           
   print_r ('Недавно я прочитал книгу '.$massive['title']); 
   print_r (', написанную автором '.$massive['author']);
   print_r (', я осилил все '.$massive['pages']);
   print_r (' страниц, мне она очень понравилась ');
   
   // задание готово
   
   
   
   $book1=array('title'=>'Ведьмак', 'author'=>'Анджей Сапковский', 'pages'=>'1344');
   $book2=array('title'=>'Бесплодные земли', 'author'=>'Стивен Кинг', 'pages'=>'688');
           
   $books=array($book1, $book2); 
   
   echo('Недавно я прочитал книги '.$books[0]['title'].' и '.$books[1]['title']." , "
   . " написанные соответственно авторами ".$books[0]['author']." и ".$books[1]['author'].",
   я осилил в сумме ".($books[0]['pages'] + $books[1]['pages'])." страниц, не ожидал от себя подобного");
   
   // задание готово

?>