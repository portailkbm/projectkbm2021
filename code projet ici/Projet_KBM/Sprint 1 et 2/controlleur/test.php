<?php
    var_dump($_FILES);
    if(!empty($_FILES)){
        $file_name = $_FILES ['file']['name'];
        $file_extension = strrchr($file_name, ".");

        $file_tmp_name = $_FILES ['file']['tmp_name'];
        $file_destination = '../Ressources/'.$file_name;


        $extension_autorisees = array('.png' ,'PNG','JPEG','JPG', '.jpeg','.jpg');
        
        if(in_array($file_extension,$extension_autorisees)){
            if(move_uploaded_file($file_tmp_name,$file_destination )){
                include_once ("../models/modelevenement.php");
                Inset_pdf($file_destination);
                echo "uplode reussi image";
            }else{
                echo "uplode echouer image";
            }
        }else{
            echo "ceci n'est pas un ficier jpeg ou png";
        }

        $file_name = $_FILES ['file2']['name'];
        $file_extension = strrchr($file_name, ".");

        $file_tmp_name = $_FILES ['file']['tmp_name'];
        $file_destination = '../Ressources/'.$file_name;

        $extension_autorisees = array('.pdf' , '.PDF');
        
        if(in_array($file_extension,$extension_autorisees)){
            if(move_uploaded_file($file_tmp_name,$file_destination )){
                include_once ("../models/modelevenement.php");
                Inset_pdf($file_destination);
                echo "uplode reussi pdf";
            }else{
                echo "uplode echouer pdf";
            }
        }else{
            echo "ceci n'est pas un ficier pdf";
        }

    }
?>