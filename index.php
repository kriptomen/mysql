<?php
//defult path.
define ('B_ROOT', getcwd(). '/');

//load config and objects
require_once B_ROOT . 'common.php';

//init classes and config
b_init();

$mysql = new myMysql();
$page = new page();

//order
$order = $page->orderBy();

//Вот тут array нужно было получать динамически, но я так названия полей и не вытащил
if(array_search($order, array('id','name','author_id','year','rate')) === false){
    die("Шалим, батенька, нехорошо! <a href=?order=name> Попробуем еще раз? </a>");
};

$query = "SELECT book.name, author.soname, book.year, book.rate
      FROM author, book WHERE author.id = book.author_id
      ORDER BY $order
      LIMIT $page->lim, $page->num";
?>
<table border="1">
    <thead>Книги</thead>
    <tr>
        <td>Номер</td>
        <td><?php echo "<a href=?order=name> Название </a>";?></td>
        <td><?php echo "<a href=?order=author_id> Автор </a>";?></td>
        <td><?php echo "<a href=?order=year> Год </a>";?></td>
        <td><?php echo "<a href=?order=rate> Рейтинг </a>";?></td>
    </tr>
<?php
$result = $mysql->myQuery($query)->fetch_all();
foreach($result as $key=>$value){ ?>
    <tr>
        <td><?=$key+$page->pos?></td>
        <td><?=$value['name']?></td>
        <td><?=$value['soname']?></td>
        <td><?=$value['year']?></td>
        <td><?=$value['rate'] === null ? '-':$value['rate']?></td>
    </tr>
<?php } ?>
</table>
<?php
$count = $mysql->count('book');
$page->pager($count);
echo '<br>','Всего книг: ',$count;
?>