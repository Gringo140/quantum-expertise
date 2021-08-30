<?php
require ('./../src/Controller/FormController.php');
require ('./../src/Model/Model.php');

$url = filter_input(INPUT_SERVER, "REQUEST_URI");


if ("/" === $url) {
    include './../index.html';
}elseif ("/blog" === $url) {
    include './../blog.html';
}elseif ("/confidentialité" === $url) {
    include './../confidentialite.html';
}elseif ("/en-bref" === $url) {
    include './../enbref.html';
}elseif ("/formulaire" === $url) {
    $controller = new FormController();
    $controller->manage();
}elseif ("/acceuil" === $url) {
    include './../index.html';
}elseif ("/mentions-légales" === $url) {
    include './../mentionslegales.html';
}elseif ("/offres" === $url) {
    include './../offres.html';
}elseif ("/merci" === $url) {
    include './../merci.html';
}else {
    echo "page non trouvée";
}