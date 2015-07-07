<?php 


//to determine if it's development or production. true if Development OR false if Production:-
$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(false){												//Force Mode
	define('Dev', true);
	define('DB', "courtaks_mainDB");
	define('DB_USER', "root");
	define('DB_PASS', "");
}elseif(!isset($_SERVER['SERVER_ADDR'])
			|| in_array($_SERVER['SERVER_ADDR'], $whitelist)){ 	//in development
	define('Dev', true);
	define('DB', "courtaks_mainDB");
	define('DB_USER', "root");
	define('DB_PASS', "");
}elseif(!in_array($_SERVER['SERVER_ADDR'], $whitelist) ){ 	//in production
	define('Dev', false);
	define('DB', "courtaks_mainDB");
	define('DB_USER', "courtaks_admin");
	define('DB_PASS', "159357Bad");
}


	define("CREATE_THUMBS",true);
	
//	define('LOAD_FONTS', !Dev);
	define('LOAD_FONTS', true);

	define('REMOTE_SITE_URL', "http://ahmed-badawy.com/site/");



	$base_url = (Dev) ?  "localhost/ahmed-badawy.com/site/" : "ahmed-badawy.com/site/";
	define('base_url', "http://".$base_url );
	define('base_url_without_http', $base_url );

	$public_dir = base_url."public/";
	define('public_dir', $public_dir );

	$theme_dir = public_dir."site-files/";
	define('theme_dir', $theme_dir );

	$imgs_dir = public_dir."site-imgs/";
	define('imgs_dir', $imgs_dir );

	$real_imgs_dir = public_path()."/site-imgs/";
	define('real_imgs_dir', $real_imgs_dir );


	define('SITE_NAME', "ahmed-badawy.com" );
	define('DEFAULT_LAYOUT', "bootstrap-watch" );

	$v_num = (Dev) ? rand(1,50000) : 3;
	define('VersionNumber', "?v=".$v_num );





	function social($key){
		$social_const = [
			"admin_email"	=>	"admin@site.ahmed-badawy.com",
			"admin_email_2"	=>	"admin@ahmed-badawy.com",

			"facebook" 		=>	"https://www.facebook.com/Ahmed.Badawy.Elsaid",
			"twitter" 		=>	"https://twitter.com/ahmed_badawy_x",
			"google-plus"	=>	"https://plus.google.com/u/0/112617558420458089489/about",
			"github"		=>	"https://github.com/courtaks",
			"pinterest"		=>	"http://www.pinterest.com/ahmedbadawyelsa/",
			"linkedin"		=>	"https://www.linkedin.com/profile/view?id=317402952",
			"instagram"		=>	"http://instagram.com/a7med.badawy"
		];
		return $social_const[$key];
	}
	


//die("hello");

