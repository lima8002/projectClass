<?php
    require('vendor/autoload.php');

    use oldspice\Navigation;
    use oldspice\Product;

    $navigation = Navigation::getNavigation(); 
    // call a static function from navigation class 

    $p = new Product(); // declare new product
    $products = $p -> getProducts();

    //Twig
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    //load the template
    $template = $twig ->load('home.twig');
    // output the template

    echo $template -> render([
        'navigation' => $navigation,
        'products' => $products,
        'title' => 'Home Page'
    ]);


?>