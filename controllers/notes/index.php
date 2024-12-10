<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);



$notes = $db->query('select * from notes')->fetchAll();

view('notes/index.view.php',[
    'heading' => 'My notes',
    'notes' => $notes

]);


?>