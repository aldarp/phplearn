<?php

 class Post 
 {
     public $title;
     public $published;
     public $author;
     public function __construct($title, $published, $author)
     {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
     }
 }

 $posts = [
    new Post('My First Post', true, 'AP'),
    new Post('My Second Post ', true, 'AP'),
    new Post('My Third Post', true, 'JQ'),
    new Post('My Fourth Post', false, 'ML')
 ];

// ***** Array filter method *****//

//  $publishedPosts = array_filter($posts, function($post) {
//     return $post->published;
// });
// var_dump($publishedPosts);

//  $unpublishedPosts = array_filter($posts, function($post) {
//      return ! $post->published;
//  });
//  var_dump($unpublishedPosts);

// ***** Array map method - use when you want to modify/change something *****//

// $modified = array_map(function($post) {
//     return ['title' => $post->title];
// }, $posts);

// var_dump($modified);

// ***** array column method *****// - variable has to be publid

// $titles = array_column($posts, 'title');
// var_dump($titles);


// $posts = array_map(function($post) {
//     return (array) $post;
// }, $posts);

// var_dump($posts);


$authors = array_column($posts, 'author');
var_dump($authors);