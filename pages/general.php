<?php
    session_start();
    include_once(dirname(__DIR__).'/configs/db.php');
    include_once(dirname(__DIR__).'/libraries/functions.php');
    $post_id = $_GET['p'] ?: null;
    if ($post_id) {
        $post = get_post($post_id);
    } else {
        die('no page was found');
    }
?>
    <div><?=$post['title']?></div>
    <div><?=$post['content']?></div>