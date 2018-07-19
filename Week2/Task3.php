<?php
require 'classes/new_post.php';
use wp\Post;

$posts=array();
$posts[0] = new Post(
    'Dan',
    'Hello, nice weather today!',
    'default.png',
    '20/03/2015');

$posts[1] = new Post(
    'Brad',
    'I don\'t like the rain :(',
    'default.png',
    '20/03/2015');

$posts[2] = new Post(
    'Sam',
    'Is this loss?',
    'default.png',
    '27/07/2017');

$posts[0]->addComment('Brad', 'Is it?!');
$posts[0]->addComment('Dylan', 'Think I see a few rainbows :)');

$posts[1]->addComment('Dan', 'Haha, sucked in!');

$posts[2]->addComment('Bob', 'yess');
$posts[2]->addComment('Dylan', 'whoa');
$posts[2]->addComment('Dolan', 'amazing');
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
            <img src="<?= $post->getImage() ?>" width=20px height=20px alt="user image"</img>
            <?= $post->getUser()        ?> <br>
            <?= $post->getMessage()     ?> <br>
            <?= $post->getDate()        ?> <br>
            
            <?php foreach($post->getComments() as $comment) { ?>
                <div id='comment'>
                    &emsp;&emsp; <?= $comment->getUser(), ': ', $comment->getCommentMessage(); ?> <br>
                </div>  
                <?php } ?> <br>
        </div>
        <?php } ?>
    </body>
</html>
