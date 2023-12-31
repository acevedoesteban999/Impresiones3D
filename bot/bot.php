<?php
    include_once "../includes/bot.php";
    $bot=new Bot();
    $update=$bot->reciveMessage();
    $chatID = $update["message"]["chat"]["id"];
    $usernametelegram=$update['message']['from']['username'];
    $array=explode(" ", $update["message"]['text']);
    switch($array[0])
    {
        case "/vincular":
            if($bot->existUser($chatID))
            {
                $message="Ya este usuario se encuentra registrado en 
                [impresiones3d](https://eacb2.duckdns.org/impresiones3d/impresiones3d.php)
                 como
                ";
            }
            else
            {
                if (count($array)==2 && strpos($array[1], "@") !== false) 
                {
                    $username=str_replace("@", "", $array[1]);
                    $resp=$bot->registerUser($usernametelegram,$chatID,$username);
                    if($resp===true)
                        $message="Completado :)%0AContinue en proceso de registro en la plataforma **impresiones3d**%0Ahttps://eacb2.duckdns.org/impresiones3d/telegram.php";
                    else if ($resp===null)
                        $message="No existe el usuario: @".$username." en la paltaforma :|";
                    else    
                        $message="Ha ocurrido un error en el proceso :(";
                } 
                else 
                    $message="Escriba el comando /vincular seguido del nombre de usuario de la paltaforma **impresiones3d** empezando por @ %0AEjemplo: /vincular @usuario";
                  
            }
            break;
        default:
            $message= "Hola @".$usernametelegram.". Bot @eacb2_bot de la plataforma **impresiones3d**%0AComandos válidos:%0A/vincular";
            break;
    }
    $bot->sendMessage($chatID,$message);
/*
ok	true
result	
    0	
        update_id	481154846
        message	
            message_id	72
            from	
                id	1033479354
                is_bot	false
                first_name	"Esteban"
                last_name	"Acevedo"
                username	"EstebanACB2"
                language_code	"es"
            chat	
                id	1033479354
                first_name	"Esteban"
                last_name	"Acevedo"
                username	"EstebanACB2"
                type	"private"
            date	1703978825
            text	"/start_link"
            entities	
            0	
                offset	0
                length	11
                type	"bot_command"
*/
?>
