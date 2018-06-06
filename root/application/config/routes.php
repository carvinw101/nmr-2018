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
$route[''] = 'BNEC';
$route['default_controller'] = 'BNEC';
$route['404_override'] = 'BNEC/err404';

$route['(?i)Admin/'] = "Admin/";
$route['(?i)Admin/(:any)'] = "Admin/$1";

$route['(?i)Admin/product/attendance/class_list'] = 'Product/attendance_class_list_noDirectLink';
$route['(?i)Admin/product/attendance/form/(:any)'] = 'Product/attendance_form_noDirectLink/$1';
$route['(?i)Admin/product/attendance/result/(:any)'] = 'Product/view_attendance_noDirectLink/$1';


$route['(?i)Admin/product/attendance/class/approval/(:num)'] = 'Product/approve_class_form/$1';
$route['(?i)Admin/product/attendance/class/(:any)/(:num)'] = 'Product/class_attend_data/$1/$2';


$route['(?i)Admin/product/attendance/tutee/cancel/(:num)'] = 'Product/cancel_tutee_form/$1';
$route['(?i)Admin/product/attendance/tutee/(:any)/(:num)/(:num)'] = 'Product/tutee_attend_data/$1/$2/$3';


$route['(?i)Admin/Product/(:any)/(:any)'] = 'Product/$1/$2';
$route['(?i)Admin/Product/(:any)'] = 'Product/$1';

// $route['(?i)admin/product/attendance/d/e'] = 'Admin';

$route['(?i)professional_class'] = 'ProfClass';
$route['(?i)professional_class/(:any)'] = 'ProfClass/$1';

$route['translate_uri_dashes'] = FALSE;

