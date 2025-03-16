<?php
//desde aqui se borra una cookie
setcookie('MiCookie','',time()-1);
unset($_COOKIE['MiCookie']);
?>

<h1>Boorar cookies</h1>
<?php
    if(isset($_COOKIE['MiCookie'])){
        print "Existe";
    }else{
        print "No existe";
    }
?>