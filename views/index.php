<?php

require 'vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../View');
$twig = new Twig\Environment($loader);
echo $twig->render('myView.html.twig');
