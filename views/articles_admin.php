
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Kонцепция MVC</title>
    <link rel="stylesheet" href="../style.css"> 
    <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.mi
n.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWVTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="index.php?action">
        <h1>Концепция МVC</h1>
        <a href="index.php?action=add">Добавить статью</a>
        <div>
            <table class="admin-table">
                <tr>
                <th>Дaтa</th><th>Зaголовок</th><th></th><th></th>
                </tr>
            <?php foreach ($articles as $a): ?>
                <tr>
                <td><?=$a['data']?></td> 
                <td><?=$a['title']?></td>
                <td><a
href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td> 
                <td><a
href="index.php?action=delete&id=<?=$a['id']?>">удалить</a></td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
        <footer>
            <р>Концепция MVC<bг>Соруright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>