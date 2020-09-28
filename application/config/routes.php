<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Admin Controller Start
$route['login'] = 'admin/admin';
$route['check-login'] = 'admin/admin/login';
$route['dashboard'] = 'admin/dashboard';
$route['logout'] = 'admin/dashboard/logOut';

// User Registration
// $route['user-login'] = 'admin/dashboard/user';
$route['user-registration'] = 'admin/dashboard/user_registration';
$route['user-add'] = 'admin/dashboard/saveUser';
$route['user-details'] = 'admin/dashboard/user_details';
$route['get-name'] = 'admin/dashboard/getNameByAjax';
$route['edit-user/(:any)'] = 'admin/dashboard/edit_user';
$route['user-update'] = 'admin/dashboard/user_up';
$route['delete-user/(:any)/(:any)'] = 'admin/dashboard/user_delete';
$route['edit-password/(:any)'] = 'admin/dashboard/edit_password';
$route['update-password'] = 'admin/dashboard/update_password';

// Start

$route['user-form/(:any)'] = 'admin/dashboard/user_form';

// End

// Show Child's Start
$route['show-childs-dettails/(:any)'] = 'admin/dashboard/show_child_list';

// // Show Child's Endded
// Slots Creation
$route['slots-detail'] = 'admin/dashboard/slots_details';
$route['add-slots'] = 'admin/dashboard/add_slots';
$route['save-slots'] = 'admin/dashboard/save_slots';
$route['edit-slots/(:any)'] = 'admin/dashboard/edit_slots';
$route['update-slot'] = 'admin/dashboard/upSlots';
$route['delete-slots/(:any)'] = 'admin/dashboard/delSlots';

// Normal Pages
$route['table'] = 'admin/dashboard/load';


$route['edit-admin'] = 'admin/dashboard/edit_admin';
$route['up-admin'] = 'admin/dashboard/UpAdmin';

// Transaction Started
$route['manage-transaction'] = 'admin/dashboard/transaction_details';
$route['edit-transactions/(:any)'] = 'admin/dashboard/edit_transaction_status';
$route['update-transaction'] = 'admin/dashboard/update_transaction';

// Transaction End

// Show Debit or Credit Start
$route['show-debit-credit'] = 'admin/dashboard/show_debit_credit';
// Show Debit or Credit Ended

// Wallet Request Started
$route['show-request/(:any)'] = 'admin/dashboard/show_reuquest';
$route['update-request/(:any)/(:any)/(:any)/(:any)'] = 'admin/dashboard/update_request';
// Wallet Request Endded

// Buy Balance User Started
$route['add-topup'] = 'user/dashboard/Addtopuprequestt';
$route['by-balance'] = 'user/dashboard/by_balance_detail';
// Buy Balance User Endded

// Admin Controller End

// ---User Controller Start Here---
$route['user-login'] = 'user/user/user_login';
$route['user-auth'] = 'user/user/login';
$route['user-dashboard'] = 'user/dashboard';
$route['user-logout'] = 'user/dashboard/logout';
$route['user-x3'] = 'user/dashboard/x3Branch';
$route['user-partner'] = 'user/dashboard/partnerTree';

$route['new-registration/(:any)'] = 'user/dashboard/addNewPartner';
$route['save-user'] = 'user/dashboard/save_user';
$route['show-tree'] = 'user/dashboard/getDataByAjax';

$route['user-profile'] = 'user/dashboard/user_profile';
$route['save-user-details/(:any)'] = 'user/dashboard/update_user_profile';
$route['security'] = 'user/dashboard/upate_user_pass';
$route['update-credential'] = 'user/dashboard/update_user_credential';
$route['withdrawal'] = 'user/dashboard/balance_withdrawal';
$route['transfer'] = 'user/dashboard/transfer_wallet_bal';
$route['transfer-balance'] = 'user/dashboard/transfer_wallet_bal';
$route['get-partner-data'] = 'user/dashboard/getPartnerData';
$route['x4-cycles'] = 'user/dashboard/partnerTreeX4';
$route['show-tree-for-x4'] = 'user/dashboard/getX4Cycles';

// Direct Partner's 25-09-20 Started
$route['direct-partners'] = 'user/dashboard/directPartners';
// Direct Partner's 25-09-20 Endded
// -----------Urls For X4 Branch---------
$route['user-x4'] = 'user/dashboard/x4Branch';
// -----------Urls For X4 Branch END---------

// ---User Controller End Here---


