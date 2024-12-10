<?php



$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');


$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/create', 'controllers/notes/create.php');

$router->get('/note', 'controllers/notes/show.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->delete('/note', 'controllers/notes/destroy.php');


$router->get('/services', 'controllers/services.php');
$router->get('/contact', 'controllers/contact.php');





?>