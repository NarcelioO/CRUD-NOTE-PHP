<?php

use core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


if (! Validator::string($_POST['body'], 1,  250)){
    $errors[] = 'A body of no more than 250 characters is required.';
}

if(! empty($errors)){
    return view('notes/create',[
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

if(empty($errors)){
    $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)',[
        'body'=> $_POST['body'], 
        'user_id' => 1
    ]);
    header('location:/notes');
    $sucess[] = "Note created.";
    $_POST = '';
}
  
