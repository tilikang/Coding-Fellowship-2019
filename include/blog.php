<?php

function getBlogPost($blogPostId){
    $allBlogPosts = getAllBlogPosts();

    return $allBlogPosts[$blogPostId];
}

function getAllBlogPosts(){
    $allBlogPosts = [
        1 => [
            'blogPostId' => 1,
            'title' => "Blog post #1",
            'datePublished' => '2019-05-28',
            'body' => "<h2>hello world</h2>"
        ],
        2 => [
            'blogPostId' => 2,
            'title' => "This is my second post",
            'datePublished' => '2019-05-28',
            'body' => "<h2>this is a different body</h2>"
        ],
    ];
    return $allBlogPosts;
}