<?php
/**
 * Created by PhpStorm.
 * User: Attract-01
 * Date: 12/21/2017
 * Time: 4:05 PM
 */

require_once ('common/html_open.php');
$_SESSION['CUSTOMER_ROOT'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once ('common/head_open.php');
require_once ('common/meta.php');
require_once ('common/link_css.php');
require_once ('dashboard/dashboard_common_css.php');
require_once ('plugins/datatables_css.php');
require_once ('plugins/bootstrap_fileinput_css.php');
require_once ('plugins/bootstrap_select_css.php');
require_once ('plugins/datatables_custom_css.php');
require_once ('common/head_close.php');

require_once ('common/body_open.php');

require_once ('dashboard/dashboard_main_container_open.php');
require_once ('dashboard/dashboard_left_side_content.php');
require_once ('dashboard/dashboard_top_navigation.php');

require_once ('dashboard/dashboard_main_content_open.php');
require_once('customer/branch/customer_branch_table_list.php');
require_once ('dashboard/dashboard_main_content_close.php');

require_once ('dashboard/dashboard_main_container_close.php');

require_once ('common/link_js.php');
require_once ('dashboard/dashboard_common_js.php');
require_once ('plugins/datatables_js.php');
require_once ('plugins/bootstrap_fileinput_js.php');
require_once ('plugins/bootstrap_select_js.php');
require_once('customer/branch/cuatomer_branch_datatables_js.php');
require_once ('common/body_close.php');

require_once ('customer/branch/customer_branch_edit_form.php');
require_once ('customer/branch/customer_branch_add_form.php');
require_once ('customer/branch/customer_branch_view_details_modal.php');

require_once ('common/html_open.php');
?>
