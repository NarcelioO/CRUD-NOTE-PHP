<?php

use Core\Database;
$config = require base_path('config.php');
$db = new Database($config['database']);


$currentUserId = 1;

$note = $db->query('select * from notes where id = :id',[
    'id'=> $_POST['id'],
    ])->fetch();
    

$db->query('delete from notes where id = :id and user_id = 1',[
    'id' => $_POST['id']
]);

header('location:/notes');
exit();

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