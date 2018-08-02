<?php
 
 
             if($_REQUEST['user'] == $_COOKIE['user']  || $_COOKIE['user'] == 'Admin'){
 
          echo'<form   action="settings.php">
           <input id="button"    type="submit" value="Settings V"/>
           <input id="button"    type="submit" value="massege"/>
           </form>';
            }
             elseif($_REQUEST['user'] == 'user'){
                 //header("location:profile.php");
                 }
            else
            {
            echo'<form   action="follow.php">
           <input id="button"    type="submit" value="follow +"/>
           <input id="button"    type="submit" value="massege"/>
           </form>';
            }
            } 
 
           ?>
 
          </div>
            </div>
 
 
 
 
 
<?php
 
 
     //$man = $_GET[$username]
    if(isset($_REQUEST['user'])){
        echo $_REQUEST['user']."Profile";  //code here
 
     // class information ()/{     // this function To Get profile Information!
          $user  = $_REQUEST['user'];
          $sql   = "SELECT * FROM user WHERE username='$user'" ;
          $query = mysql_query($sql);
        while($rows = mysql_fetch_array($query))
        {
 
          $username =  $rows  ['username'];
         /* $Email    =  $rows  ['Email'];
          $pass     =  $rows  ['time'];
          $quetion  =  $rows  ['quetions'];
          $answer   =  $rows  ['answer']; */
 
 
 
          /*echo "<br/>".$username;
          echo "<br/>".$Email;
          echo "<br/>".$pass;
          echo "<br/>".$quetion;
          echo "<br/>".$answer;
          */
 
 
 
 
 
        }
 
      }
 
 
    else
    {
      header("location:profile.php?user=".$_COOKIE['user']);
    }
 
 
 
 
?>