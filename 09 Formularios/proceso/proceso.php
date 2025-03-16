<?php
    include "../validar/validar.php";//trae el codigo de otro archivo

    $user = $_GET['user'] ?? "Invitado";//Se trae la info dependiendo lo que se traiga de user en name 
    print "<h1> bienvenido ".$user."</h1>";
//Se recibe informacion de los campos mediante la variable superglobal $_GET
//text_input es la funcion que se trae desde el otro documento
    $email = text_input($_GET['email']);
    $idioma = text_input($_GET['idioma']);
    $estado = text_input($_GET['estado']??'');
    $comentarios = text_input($_GET['comentarios']);
    $pasatiempos = $_GET['pasatiempos']?? null;

$datos = [
    'email'=>$email,
    'idioma'=>$idioma,
    'estado'=>$estado,
    'comentarios'=>$comentarios
];

vacio($datos);

//print var_dump($error);

    ?>
    <?php if(count($error)==0){ ?>
    <p>Correo: <?php print$email; ?></p>
    <p>Idioma: <?php print$idioma; ?></p>
    <p>Estado: <?php print$estado; ?></p>
    <p>Comentarios: <?php print$comentarios; ?></p>
    <p>Pasatiempos: <?php print isset($pasatiempos)?implode(',',$pasatiempos):'Sin pasatiempos'; ?></p>
    <p>Token: <?php print $_GET['token']; ?></p>
         <!--<p>Pasatiempos 2:
        <   ?php
            foreach($pasatiempos as $pasatiempo){
               print $pasatiempo . ", ";
            }
        ?>
        </p>-->
    <?php }else{
        foreach($error as $erro){
            print $erro."<br>";
        }
    }?>
    <a href="../2-RecibirInformacion.php">volover</a>