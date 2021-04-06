<?php
if($_COOKIE["user"]==1)
{
   echo '<script language="javascript">';
   echo 'alert("message successfully sent")';
   echo '</script>';
}
else
{
   echo '<script language="javascript">';
   echo 'alert("message not sent")';
   echo '</script>';
}