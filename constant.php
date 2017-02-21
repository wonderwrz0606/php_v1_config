<?php
	/**
	 * DATABASE
	 */
	define('DB_HOST','ecarridecluster.cluster-csludvxcarnc.us-west-2.rds.amazonaws.com');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','bynfortech');
	define('DB_DATABASE','ecarride_db');

	/**
	 * Website
	 */
	define('LIVE_SITE','http://'.$_SERVER['HTTP_HOST'].'/~sam/eCarRide_Dsp_website');
	define('ADMIN_EMAIL','admin@operr.com');
	define('COMPANY_NAME','Operr Technologies Inc.');
	define('WEBSITE_VERSION','1.1.1');
	define('SITE_CODE', 'ww_beta');
	define('GROUP_BASE_ID',23);

	/**
	 * System
	 */
	define('ROOT_PATH','/Users/sam/Sites/eCarRide_Dsp_website/');

	/**
	 * AWS
	 */
	define('AWS_KEY','AKIAIZHOPTUOXBKEWKZQ');
	define('AWS_SECRET','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');
	define('AWS_S3_BUCKET','ecarride');
	define('AWS_S3_BASE_FOLDER','ecarride');
	define('AWS_S3_BASE_URL','https://s3.amazonaws.com');

	/**
	 * Image Path
	 */
	define('DRIVER_IMG_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/driver/");
	define('VEHICLE_IMG_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/vehicle/");
	define('BASE_IMG_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/base/");
	define('ADMIN_IMG_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/admin/");
	define('USER_SIGNATURE_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/trip/");
	define('EMPLOYEE_SIGNATURE_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/trip/");
	define('EMPLOYEE_ROUTE_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/employee/");
	define('USER_IMG_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/".AWS_S3_BASE_FOLDER."/user/");
	define('HEADER_LOGO_PATH', AWS_S3_BASE_URL."/".AWS_S3_BUCKET."/logo.png");

	/**
	 * ELASTICSEARCH
	 */
	define('ES_BASE_URL', 'http://52.35.155.129:9200');
	define('ES_LOCATION_INDEX', 'location_filter');
	define('ES_DISPATCH_INDEX', 'dispatch');
	define('ES_TRIP_INDEX', 'trip');
	define('ES_TRACKING_INDEX', 'employee_tracking');

	/**
	 * Operr API
	 */
	define('API_PATH',"https://platform.ecarride.com/laravel");
	
	/**
	 * Google API Key
	 */
	define('GOOGLE_API_KEY', 'AIzaSyAi49lL84Iw110hJppU4AyXwb7OmGyFvOU');
	
	/**
	 * Parse Notification
	 */
	define('PARSE_DRIVER_SERVER_URL','http://54.69.119.9:1338');
	define('PARSE_DRIVER_APP_ID','25A0iOOC350rhi7nfH12d5VkRZcCx35IxcDdIXiO');
	define('PARSE_DRIVER_REST_KEY','SAF4BwPBZzmo42OIVSYDxyvrl6rQMGtvv9ciLbsZ');
	define('PARSE_DRIVER_MASTER_KEY','yxZpMjV13roVtKnqdF4Y0Rqyd0Af8r4nUnccGBPJ');
	define('PARSE_DRIVER_ACTION','com.ecarride.driver.RECEIVE_PUSH');
	
	define('PARSE_USER_SERVER_URL','http://54.69.119.9:1337');
	define('PARSE_USER_APP_ID','zaDzjVOIKythRAVaBzuJo8IrykQVyuVTwFyUHL3X');
	define('PARSE_USER_REST_KEY','MlP3GI5xqUVyCAY4wJRe6FtkdTrBemOi81fHOfL9');
	define('PARSE_USER_MASTER_KEY','rJu4WCLrxdOGk0EA1ftLqLYsBsPMD7fLXAcQ3HYA');
	define('PARSE_USER_ACTION','com.ecarride.user.RECEIVE_PUSH');
?>