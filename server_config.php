<?php
	/***********************************************************************************************************
	 *   Notice: Please do not change the order of the following files                                         *
	 ***********************************************************************************************************/

	/**
	 * PHP setting
	 */
	error_reporting(0);
	ini_set('memory_limit', '100M');
	ini_set('default_charset', "utf-8");
	ini_set('mbstring.language', "neutral");
	ini_set('mbstring.internal_encoding', "utf-8");
	ini_set('mbstring.http_input', "auto");	
	ini_set('display_errors', "on");	
	ini_set('display_startup_errors', "on");
	date_default_timezone_set("UTC");
	set_time_limit(0);

	/**
	 * Loac Constants and Definations
	 */
	//Constans 'INCLUDE_PATH','ADMIN_SCRIPT' are loaded from admin/index.php
	require_once(INCLUDE_PATH."includes/constant.php");
	require_once(INCLUDE_PATH."includes/defination.php");
	require_once(INCLUDE_PATH."includes/server_status.php");
	require_once(INCLUDE_PATH."includes/table_config.php");

	/**
	 * Variables
	 */
	$serAddress[] =	'localhost';
	$info['db_host'] = DB_HOST;
	$info['db_un'] = DB_USERNAME;
	$info['db_pw'] = DB_PASSWORD;
	$info['db_name'] = DB_DATABASE;
	$site['URL'] = LIVE_SITE;
	$api_url = API_PATH;
	$LIVE_URL = LIVE_SITE;
	$group_base_id = GROUP_BASE_ID; //different number in every environment
	$language_file = $language ? "language_".$language.".php" : "language_en.php"; //$language loaded from index.php
	$main_admin_email = ADMIN_EMAIL;
	
	/**
	 * Load Classes Files
	 */
    require_once(INCLUDE_PATH."includes/common/mysql_function.php");
	require_once(INCLUDE_PATH."includes/common/class.Calender.php");
    require_once(INCLUDE_PATH."includes/common/function.php");
    require_once(INCLUDE_PATH."includes/common/main_common_function.php");
    require_once(INCLUDE_PATH."includes/common/paging.php");
    require_once(INCLUDE_PATH."includes/common/send_mail.php");
	require_once(INCLUDE_PATH."includes/common/mimemail.class.php");
	require_once(INCLUDE_PATH."includes/common/class.Image.php");
    require_once(INCLUDE_PATH."includes/smarty/Smarty.class.php");
    include_once(INCLUDE_PATH."includes/language/".$language_file);
	
    /**
	 * Create Global Objects
	 */
    $smarty = new Smarty();
   	$imgObj = new Image();			//Object of image crop Function
	$obj_mysql = new mysql_function(); 	//Object of Mysql Function
	$obj_common = new main_common();  	//Object of Common Function
	$obj_paging	= new cls_search(); 		//Object for Paging
	$obj_mail =	new multipartmail(); 	//Object for Mail
	$obj_mimemail =	new mimemail(); 	//Object for Mail
	$obj_calender =	new Calendar(); 	//Object for Calender

	/**
	 * Establish Connection With Database
	 */
	$obj_mysql->connect($info['db_host'],$info['db_un'],$info['db_pw'],$info['db_name']);
	
	/**
	 * Load Customized Classes
	 */
	foreach (glob(INCLUDE_PATH."includes/class/*.php") as $filename) {
		if(is_file($filename)){
			include_once ($filename);
		}
	}

	/**
	 * Create Other Global Objects
	 */
	$obj_elasticsearch = new elasticsearch();
	$obj_trip = new Trip();

	/**
	 * Smarty Processing
	 */
	//Set template for site
	if(!defined("ADMIN_SCRIPT")){
		//Load User & Driver Dashboard
 		$smarty->template_dir_image = LIVE_SITE."/templates/".SITE_CODE;
		$smarty->template_dir 	= "./templates/".SITE_CODE;
	    require_once(INCLUDE_PATH."includes/common/module.php"); //include module file only frontend
	}else{
		//Load Admin Dashboard
		$smarty->template_dir = "./templates";
		$smarty->compile_dir = "./templates_c";
	}
	
	$tpl_image_path = $smarty->template_dir_image."/";
	$tpl_path = $smarty->template_dir."/";
	$smarty->assign('tpl_path',$tpl_path);
	$smarty->assign('tpl_image_path',$tpl_image_path);
	$smarty->assign('include_path',$site['URL']);
	$smarty->assign('company_name',COMPANY_NAME);
	$smarty->assign('website_version',WEBSITE_VERSION);
	$smarty->assign('api_url',$api_url);
	$smarty->assign('live_url',$LIVE_URL);
?>