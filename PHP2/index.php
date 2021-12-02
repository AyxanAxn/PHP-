<?php
    require "vars.php";

   if ($lang = isset($_GET['lang']) && $_GET['lang'] != "" && in_array($_GET['lang'],$langs)){
        $lang=$_GET['lang'];   
        setcookie('lang',$lang,time()+(86400*30),"/");

   }
   elseif (isset($_COOKIE['lang']))
        $lang=$_COOKIE['lang'];
   else
        $lang='az';
   
    if(isset($_GET['page']) && $_GET['page'] != "" )
    {
          $page=$_GET['page'];
          setcookie('page',$page,time()+(86400*30));     
    }
   
    elseif(isset($_COOKIE['page'])) $page=$_COOKIE['page'];
    
    else $page="main";

    $file = "$lang/$page.php";

    include "header.php";
    include file_exists($file) ? $file : "404.php";
    include "footer.php";
?>