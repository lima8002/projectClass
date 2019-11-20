<?php
    require('vendor/autoload.php');
    use oldspice\Product;

    $p = new Product();
    $products = $p -> getProducts();

    //Twig
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    //load the template
    $template = $twig ->load('home.twig');
    // output the template

    echo $template -> render([
        'products' => $products,
        'title' => 'Home Page'
    ])


?>