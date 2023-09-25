<?php
if(isset($_POST["submit"])){
    echo "It is working";
}
else{
    header("location: ../pages/login.php");
}