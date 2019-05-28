<?php

include('config/init.php');

echoHeader("My homepage");

$blogPosts = getAllBlogPosts();

echo "
  <h1>Check out all my blog posts</h1>
";

foreach($blogPosts as $blogPost){
    echo "<a href='/view_post.php?blogPostId=".$blogPost['blogPostId']."'>
        ".$blogPost['title']."
    </a><br />";
}

