<?
/*
Plugin Name: InsiderData360 Express Installer
Plugin URI: https://Insiderdata360.com
Description: When activated this plugin will insert the InsiderData360 initialization code to the header of your website. If you deactivate it, the code will not be placed anywhere on your website
Developer Note: This uses the wp_head hook to insert or not insert the initialization code upon rendering the closing </head> tag
Since we are using a hook to initialize our plugin, we do not need to include a remove_insiderData360_init_code method
because once the user disables the plugin this code will not run and nothing is hooked.
Author: InsiderData360 development team
Version: 1.0.0
License: LGPL v2.1
*/

add_action("wp_head", "InsiderData360_RunExpressInstallationScript");

function InsiderData360_RunExpressInstallationScript()
{
  echo "<script type='text/javascript'> 
    (function(){ 
        var a = Math.random(); 
        var e = document.getElementsByTagName('script')[0]; 
        var d = document.createElement('script'); 
        d.src = '//insiderdata360online.com/service/platform.js?ran='+a; 
        d.type = 'text/javascript'; 
        d.async = true; 
        d.defer = true; 
        e.parentNode.insertBefore(d,e);
    })(); 
    </script>";
}
