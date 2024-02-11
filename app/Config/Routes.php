<?php

use App\Controllers\CatalogController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function()
{
    return view('home/index.php', ['title' => 'Home']);
});

$routes->get('/harga', function()
{
    return view('harga/index.php' ,['title' => 'Harga']);
});

$routes->get('/portofolio', function()
{
    return view('portfolio/index.php',['title' => 'Portofolio']);
});

$routes->get('/catalog','CatalogController::index');

$routes->get('/wa', function()
{
    $message = "Saya ingin menanyakan apakah saya bisa melakukan pesanan untuk jasa percetakan di simpleclothindustries?. Saya tertarik dan ingin mendapatkan informasi lebih lanjut. Terima kasih!";
    $phoneNumber = '6285174446580';

    // URL WhatsApp dengan nomor yang diinginkan
    $waUrl = 'https://wa.me/' . $phoneNumber;

    // Mengarahkan pengguna ke halaman WhatsApp
    return redirect()->to($waUrl.[$message]);
});
