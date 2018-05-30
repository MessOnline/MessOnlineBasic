<?php
    $local_host = 'localhost';          //host doman.com
    $db_host    =  $local_host;
 
    $db_user    = 'root';            // database username
    $user       =  $db_user;
 
    $db_pass    = '';             //db password
    $pass       =  $db_pass;
 
    $db_name    = 'member';    //
    $db       =  $db_name;
 
// connect to mysql
    $sql_con    = mysql_connect("$db_host","$db_user","");   
    $sql_db     = mysql_select_db("$db") ;
 
    $sql    = "SELECT * FROM user";
    $query  = mysql_query($sql);
 
while($row = mysql_fetch_array($query)){
 
     $username = $row['username'];
     $time     = $row    ['time'];
 
 
//make a user link when you click in any user this link well open his profile
    echo '<div style="font-size:18px; color:blue; margin-top:-5px;" ><a href="profile.php?'.$_COOKIE['user'].'">'.$username.'</a></div>';
 
    //$n = $_REQUEST[$time];
//setcookie('user','manassa');
}
 
 
?>