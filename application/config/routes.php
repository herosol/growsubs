<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# SITE PAGES
$route['about-us']         = 'pages/about';
$route['packages']         = 'pages/packages';
$route['testimonials']     = 'pages/testimonials';
$route['faqs']             = 'pages/faq';
$route['contact-us']       = 'pages/contact';
$route['terms-conditions'] = 'pages/terms_conditions';
$route['privacy-policy']   = 'pages/privacy_policy';
# AUTHENTICATION PAGES
$route['signup']           = 'auth/auth/signup';
$route['signin']           = 'auth/auth/signin';
$route['forgot-password']  = 'auth/auth/forgot_password';
$route['reset/(:any)']     = 'auth/auth/reset/$1';
$route['reset-password']   = 'auth/auth/reset_password';
$route['resend-email']     = 'auth/auth/resend_email';
$route['verification/(:any)'] = 'auth/auth/verification/$1';
$route['newsletter']       = 'auth/auth/newsletter';
$route['signout']          = 'auth/auth/signout';
# ORDER PAGES
$route['order/(:any)']     = 'orders/index/$1';
$route['pay-now']          = 'orders/pay_now';
$route['order-success/(:any)'] = 'pages/success/$1'; 
# USER PAGES
$route['user/dashboard']        = 'user/dashboard/dashboard';
$route['user/profile-settings'] = 'user/dashboard/profile_settings';
$route['user/orders']           = 'user/dashboard/orders';
$route['user/orders/(:any)']    = 'user/dashboard/orders/$1';
$route['user/transactions']        = 'user/dashboard/transactions';
$route['user/transactions/(:any)'] = 'user/dashboard/transactions/$1';
$route['user/order-detail/(:any)'] = 'user/dashboard/order_detail/$1';
# PAYPAL
$route['pay-now/(:num)'] = 'paypal/pay_now/$1';
$route['success/(:any)'] = 'paypal/success/$1';
$route['cancel/(:any)'] = 'paypal/cancel/$1';
$route['order-notify'] = 'paypal/order_notify';
// $route['booking-notify'] = 'paypal/booking_notify';
$route['paypal/(:any)'] =  'Pages/paypal/$1';

# ADMIN
$route['admin/login']     = 'admin/index/login';
$route['admin/logout']    = 'admin/index/logout';
$route['admin/meta-info'] = 'admin/Meta_info/index';
$route['admin/meta-info/manage']        = 'admin/Meta_info/manage';
$route['admin/meta-info/manage/(:any)'] = 'admin/Meta_info/manage/$1';
$route['admin/meta-info/delete/(:any)'] = 'admin/Meta_info/delete/$1';