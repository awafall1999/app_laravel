<?php

namespace App\Utilities;



class Getweekend
{
    public function getWeekend()
    {
        if (date('N') >= 6){
            echo "C'est le wekkend";
        }else
      
            echo "C'est pas le weekend";
        
        }
        public function getMessageBienvenu()
        {
             echo "Bienvenu a ucab";
        }

   
}

