<!DOCTYPE html>
<html><head><title>Ansible Application</title></head><body><center>
<?php
  $db=mysqli_connect("appdb.example.com","devops","redhat","userdb");
  if (mysqli_connect_errno()){ 
    echo "<h1> Failed to connect </h1>";}
  else{
    echo "<h1> <img src=images/ansible_bg.png alt='Ansible Automation Platform' width=300 height=100>";
    echo "You are connected to backend application server" . " : " . gethostname();
    echo " </h1><br />"; }
  $sql="SELECT username,userpass,usershell,userhome from login where username=\"$_GET[name]\"";
  if($result=mysqli_query($db,$sql)){
    while ($row=mysqli_fetch_row($result)){
      echo $row[0] . " " . $row[1] ." " .  $row[2]. " ", $row[3]. "<br />";
      exit();
  }}
?>	
<form action="<?php $_PHP_SELF?>" method="GET" >
  Enter User Name: <input type=text name="name" />
<input type="submit" /></form></center></body></html>
