<?php
    $posts=array();
    $posts[0] = array(
        'user'      => 'Dan',
        'message'   => 'Hello, nice weather today!',
        'image'     => 'default.png',
        'date'      => '20/03/2015');
    $posts[1] = array(
        'user'      => 'Brad',
        'message'   => 'I don\'t like the rain :(',
        'image'     => 'default.png',
        'date'      => '20/03/2015');
    $posts[2] = array(
        'user'      => 'Sam',
        'message'   => 'Is this loss?',
        'image'     => 'default.png',
        'date'      => '27/07/2017');
?>

<html>
    <head>
        <title>Social Media</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body id="body">
        <h1>Social Media</h1> <br>
        <?php foreach($posts as $post) { ?>
        <div id='post'>
            <img src="<?= $post['image'] ?>" width=20px height=20px alt="user image"</img>
            <?= $post['user'] ?>    <br>
            <?= $post['message'] ?> <br>
            <?= $post['date'] ?>    <br> <br>
        </div>
        <?php } ?>
    </body>
</html
