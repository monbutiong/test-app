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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// validate login
$route['validate-login'] = 'login/validate';

// employee routes
$route['employee'] = 'employee';

$route['add-new-employee'] = 'employee/add_employee_details';
$route['save-employee-details'] = 'employee/save_employee_details';

$route['view-employee-details/(:num)'] = 'employee/view_employee_details/$1';

$route['edit-employee-details/(:num)'] = 'employee/edit_employee_details/$1';
$route['update-employee-details/(:num)'] = 'employee/update_employee_details/$1';

$route['delete-employee-details/(:num)'] = 'employee/delete_employee_details/$1';

// department routes
$route['department'] = 'department';

$route['add-new-department'] = 'department/add_department_details';
$route['save-department-details'] = 'department/save_department_details'; 

$route['edit-department-details/(:num)'] = 'department/edit_department_details/$1';
$route['update-department-details/(:num)'] = 'department/update_department_details/$1';

$route['delete-department-details/(:num)'] = 'department/delete_department_details/$1';

// designation routes
$route['designation'] = 'designation';

$route['add-new-designation'] = 'designation/add_designation_details';
$route['save-designation-details'] = 'designation/save_designation_details'; 

$route['edit-designation-details/(:num)'] = 'designation/edit_designation_details/$1';
$route['update-designation-details/(:num)'] = 'designation/update_designation_details/$1';

$route['delete-designation-details/(:num)'] = 'designation/delete_designation_details/$1';

//logout
$route['logout'] = 'login/logout';

