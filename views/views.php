<?php
    require __DIR__ . '/../model/model.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <table>
        <tr><th>Новина</th><th>Дата</th></tr>
        <?php
        $ob=new SQL();
        foreach($ob->sql_query() as $news):?>
            <tr>
                <td><a href=""><?php echo $news['tittle']?></a></td>
                <td><?php echo $news['data']?></td>
            </tr>
        <?php endforeach;?>
</body>
</html>