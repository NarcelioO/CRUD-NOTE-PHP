<?php

use Core\Database;
$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id',[
    'id'=> $_GET['id'],
    ])->fetch();
    

if (! $note){
    abort();
}

if($note['user_id'] != $currentUserId){
    abort(403);
}

view('notes/show.view.php',[
    'heading' => 'Note',
    'note' => $note

]);






?>