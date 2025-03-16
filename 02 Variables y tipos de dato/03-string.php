<?php
//print '<p>Hola</p>';

$title = 'My site';

//print $title;
// con \" es para que no de error
$content = " \"Lorem\" ipsum dolor 
sit amet, consectetur adipisicing elit. 
Nam soluta deleniti delectus atque quasi dolorum libero sit? 
Nostrum ex impedit animi odio fuga, necessitatibus vitae eligendi 
enim assumenda exercitationem provident!"; 
//print $content;

print <<<EOD
<header>$title</header>
<body>
<p>$content</p>
</body>
EOD;
 print '<hr>';
 print "Mi sitio se llama $title";//Con las comillas dobles permite hacer esto de la variable
?>