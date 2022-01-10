<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
// $route['pinisi']='home/pinisi';
$route['blog/(:any)']='blog/detail/$1';
$route['blog/page/(:any)']='blog/index/$1';
$route['send_comment']='blog/submit_komentar';
$route['category/(:any)']='category/detail/$1';
$route['category/(:any)/(:num)']='category/detail/$1/$2';
$route['tag/(:any)']='tag/detail/$1';
$route['tag/(:any)/(:num)']='tag/detail/$1/$2';
$route['search']='result/search/';
$route['halamaninputnya']='halamanbelakang/login';
$route['logout']='halamanbelakang/login/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['post/(:any)']='post/detail/$1';
$route['post/page/(:any)']='post/index/$1';

$route['berita/(:any)']='berita/detail/$1';
$route['berita/page/(:any)']='berita/index/$1';

$route['artikel/(:any)']='artikel/detail/$1';
$route['artikel/page/(:any)']='artikel/index/$1';

$route['pengumuman/(:any)']='pengumuman/detail/$1';
$route['pengumuman/page/(:any)']='pengumuman/index/$1';

$route['buletin/(:any)']='buletin/detail/$1';
$route['buletin/page/(:any)']='buletin/index/$1';

$route['album/(:any)']='album/detail/$1';
$route['album/page/(:any)']='album/index/$1';

$route['page/(:any)']='page/detail/$1';
$route['page/page/(:any)']='page/index/$1';



$route['agenda/(:any)']='agenda/detail/$1';
$route['agenda/page/(:any)']='agenda/index/$1';