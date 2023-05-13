<?php
function permited($u){
    $oks="";
    $arr=".";
       $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_@ $arr";
       for ($i=0; $i<strlen($u); $i++){
        for($a=0;$a<strlen($permitidos);$a++){
            if($u[$i] == $permitidos[$a]){
                $oks=$oks.$u[$i];
            }
            
        }
       }
      if(strlen($oks)==strlen($u)){
          return true;
      }else{
          return false;
      }
      
    }
    function permitedNumber($u){
        $oks="";
           $permitidos = "0123456789";
           for ($i=0; $i<strlen($u); $i++){
            for($a=0;$a<strlen($permitidos);$a++){
                if($u[$i] == $permitidos[$a]){
                    $oks=$oks.$u[$i];
                }
                
            }
           }
          if(strlen($oks)==strlen($u)){
              return true;
          }else{
              return false;
          }
          
        }
?>