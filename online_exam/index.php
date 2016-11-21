<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>Welcome to Online Examination System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="test.css" rel="stylesheet" type="text/css">
    </head>

    <body background="images/exaimg.jpg">
        <?php
            include("header.php");
            include("database.php");
            extract($_POST);

            if(isset($submit))
            {
                $rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
                if(mysql_num_rows($rs)<1)
                {
                    $found="N";
                }
                
                else
                {
                    $_SESSION[login]=$loginid;
                }
            }
        
            if (isset($_SESSION[login]))
            {
                echo "<h1 class='style8' align=center>Welcome to Online Exam</h1>";
                echo '<table width="28%"  border="0" align="center">
                <tr>
                    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
                    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Test</a></td>
                </tr>
                <tr>
                    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
                    <td valign="bottom"> <a href="result.php" class="style4">Results</a></td>
                </tr>
            </table>';
            exit;
            }
        ?>
        
        <table width="100%" border="0">
        <tr>
            <td width="70%" height="25">&nbsp;</td>
            <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
            <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
        </tr>
        <tr>
            <td height="296" valign="top"><div align="center">
                <h1 class="style8">Welcome to Online Examination System - Learn and Grow</h1>
                <span class="style5"><img src="image/Exam.jpg" width="600" height="250"></span>
                <param name="movie" value="english theams two brothers.dat">
                <param name="quality" value="high">
                <param name="movie" value="Drag to a file to choose it.">
                <param name="quality" value="high">
                <param name="BGCOLOR" value="#FFFFFF">
                <p align="left" class="style5">&nbsp;</p>
                <blockquote>
                    <p align="left" class="style5"><span class="style7">Welcome to Online 
                        exam.<br> This Site will provide the examination question for various subject of interest.<br> 
                        You need to login to take the online exam.</span></p>
                </blockquote>
                </div></td>
                <td valign="top"><form name="form1" method="post" action="">
                <table width="200" border="0">
                <tr>
                    <td><span class="style2">Login ID </span></td>
                    <td><input name="loginid" type="text" id="loginid2"></td>
                </tr>
                <tr>
                    <td><span class="style2">Password</span></td>
                    <td><input name="pass" type="password" id="pass2"></td>
                </tr>
                <tr>
                    <td colspan="2"><span class="errors">
                    <?php
		            if(isset($found))
                    {
                        echo "Invalid Username or Password";
                    }
                    ?>
                    </span></td>
                </tr>
                <tr>
                    <td colspan=2 align=center class="errors">
                    <input name="submit" type="submit" id="submit" value="Login">		  </td>
                </tr>
                <tr>
                    <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
                </tr>
                </table>
                <div align="center">
                    <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
                </div>
                </form></td>
            </tr>
            </table>
    </body>
</html>
