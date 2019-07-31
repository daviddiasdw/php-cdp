<?php
try{
    $BD = mysqli_connect('localhost', 'homestead', '', 'homestead');
}catch (Exception $e) {
    echo $e->getMessage();
}

?>;


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Notícias</title>
</head>
<body>
    <?php
    $sql = 'SELECT * FROM noticias';
    $result = mysqli_query($BD, $sql);

    if(mysqli_num_rows($result)>0){
        while($linha = mysqli_fetch_assoc($result)){
            echo $linha['title'];
            echo $linha['content'];

        }
    }else {
        echo 'Nenhuma Noticía encontrada';
    }
    ?>;
</body>
</html>

<?php
try{
    $BD = mysqli_connect('localhost', 'homestead', '', 'homestead');
}catch (Exception $e) {
    echo $e->getMessage();
}

?>;