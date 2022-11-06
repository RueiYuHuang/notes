<?php
setcookie("name", "Joe", time()+3600, "/");
setcookie("job", "Engineer", time()+3600, "/");


if(isset($_COOKIE["name"])){
    // echo $_COOKIE["name"];
    var_dump($_COOKIE);

}

?>