<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['(:any)'] = 'pages/view';
$route['admin/data-member'] = 'admin/member';
$route['register'] = 'users/register_form';
$route['auth/logout'] = 'auth/logout_admin';
$route['logout'] = 'auth/logout_member';
$route['admin'] = 'admin/dashboard';
$route['default_controller'] = 'home';

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
