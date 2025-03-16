<?php
$archivo = @file('no-existe.txt');//Esto dara error por que no existe este directorio
//pero como puse en @ antes de file va a oculpar el error
?> 