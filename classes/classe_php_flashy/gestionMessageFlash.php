<?php
class gestionMessageFlash
{
    public static $flash_default;
    public static $icone;
    public  static $message;
     
    public static function gestionMessage($flash_default){
        switch($flash_default){
            
            case 1:
                   self::$flash_default="flash_success";
                   self::$icone="fa fa-commenting fa-2x";
                   self::$message="Nous vous repondrons très bientot";
            break;
            
            case 2:
                 self::$flash_default="flash_warning";
                 self::$icone="fa fa-exclamation-circle fa-2x";
                 self::$message= " Attention votre requète a échouer veuillez essayer plus tard";
            break;
            
            case 3:
                 self::$flash_default="flash_error";
                 self::$icone="fa fa-exclamation-circle fa-2x";
                 self::$message="Erreur fatal lors de l'opération!";
 
            break;
       }
    }
    public static function  getFlashDefault(){
        return self::$flash_default;
    }
    public static function getIcone(){
        return self::$icone;
    }
    public static function getMessage(){
        return self::$message;
    }

}


?>