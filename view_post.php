<?php

include('config/init.php');

$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);

echoHeader("Title of the blog post");

echo "
    <h1>".$blogPost['title']."</h1>
    ...
";