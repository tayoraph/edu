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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Edusoft_ctrl';
$route['404_override'] = '';

// videos upload is here .
$route['add_videos'] = 'V_upload_ctrl/add_videos';
$route['add_videos_upload'] = 'V_upload_ctrl/add_videos_upload';
$route['update_videos'] = 'V_upload_ctrl/index_video_update';
$route['update_videos2'] = 'V_upload_ctrl/index_video_update2';
$route['update_videos3'] = 'V_upload_ctrl/index_video_update3';
$route['update_videos4'] = 'V_upload_ctrl/index_video_update4';

$route['select/fee'] = 'Edusoft_ctrl/datagrid';
$route['select/department'] = 'Edusoft_ctrl/select_by_department';
$route['fee/select'] = 'Edusoft_ctrl/show_course_fee';
$route['Payment/input'] = 'Edusoft_ctrl/show_tution';
$route['Payment/show'] = 'Edusoft_ctrl/admin_payment';
$route['input_fee_payment'] = 'Edusoft_ctrl/price_add';
$route['vcinboxstudent'] = 'Edusoft_ctrl/vc_student_inbox';
$route['vcstudent'] = 'Edusoft_ctrl/view_student_mail';
$route['Payment'] = 'Edusoft_ctrl/make_payment';
$route['Admin_add'] = 'Edusoft_ctrl/add_upload_submit';
$route['accesspro'] = 'Edusoft_ctrl/accesspro';
$route['adminvalidation'] = 'Edusoft_ctrl/validate_credentials';
$route['contactus'] = 'Edusoft_ctrl/contactus';
$route['Aboutus'] = 'Edusoft_ctrl/aboutus';
$route['access'] = 'Edusoft_ctrl/access';
$route['adminlogin'] = 'Edusoft_ctrl/administrator';
$route['adminhome'] = 'Edusoft_ctrl/admin';
$route['Admin_certupload'] = 'Edusoft_ctrl/upload_certificates';
$route['search_student'] = 'Edusoft_ctrl/department';
$route['add_student'] = 'Edusoft_ctrl/add_new_student';




$route['addstu'] = 'Upload/add_student_pro';




$route['delete'] = 'Delete_ctrl/delete_student_id';

$route['Student_registration'] = 'Student_ctrl/frontend_add_upload_submit';
$route['tutionget'] = 'Student_ctrl/tutionget';
$route['tution/get'] = 'Student_ctrl/level_fee_get';
$route['stalite/fee'] = 'Student_ctrl/stalite_fee';
$route['profile'] = 'Student_ctrl/show_student';
$route['vcmail'] = 'Student_ctrl/vc_mail_pro_student';
$route['mailingvc'] = 'Student_ctrl/maildvc';
$route['staliteprofile'] = 'Student_ctrl/stalite_profile';
$route['stalitehome'] = 'Student_ctrl/stalitehome';
$route['stalite'] = 'Student_ctrl/stalite_login';
$route['profile'] = 'Student_ctrl/show_student';
$route['stureg'] = 'Student_ctrl/stureg';
$route['stulogin'] = 'Student_ctrl/stuform';
$route['formprocess'] = 'Student_ctrl/formprocess';
$route['Upload_file'] = 'Student_ctrl/upload_file';
$route['file_Uploaded'] = 'Student_ctrl/do_upload';
$route['studentvalidation'] = 'Student_ctrl/validate_students_credentials';
$route['stalitevalidation'] = 'Student_ctrl/Stalite_vali_credentials';
$route['update_student'] = 'Student_ctrl/update_student_id1';
$route['update_student'] = 'Student_ctrl/update_student_id1';
$route['show_student'] = 'Student_ctrl/show_student';
$route['forgot_password'] = 'Student_ctrl/forgot_password';
$route['recover_password'] = 'Student_ctrl/recover_password';
$route['enter_new_password'] = 'Student_ctrl/enter_new_password';
$route['course/form'] = 'Student_ctrl/course_form';




$route['Admin_uploadf'] = 'Upload';
$route['Admin_fUploaded'] = 'Upload/do_upload';
$route['Admin_test'] = 'Upload/add_upload_submit';
$route['Admin_test2'] = 'Upload/add_student_pro';

$route['chatp'] = 'Edusoft_ctrl/chat';


$route['logout'] = 'Edusoft_ctrl/logout';
/**$route['about'] = 'Sksctrl/about';
$route['html'] = 'Sksctrl/html'**/
$route['translate_uri_dashes'] = FALSE;
