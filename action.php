<?php


require_once 'vendor/autoload.php';
use App\classes\product;



if($_GET['page']=='home')
{
    $product = new Product();
    $products = $product->index();

    include 'pages/home.php';
}
elseif ($_GET['page']=='about')
{
    include 'pages/about.php';
}
elseif ($_GET['page']=='service')
{
    include 'pages/service.php';
}
elseif ($_GET['page']=='contact')
{
    include 'pages/contact.php';
}
elseif ($_GET['page']=='portfolio')
{
    include 'pages/portfolio.php';
}
elseif ($_GET['page']=='product-details')
{   $product = new Product();
    $productDetails = $product->getProductDetails($_GET['id']);
    include 'pages/product-details.php';
}
