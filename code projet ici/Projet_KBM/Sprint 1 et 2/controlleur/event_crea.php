<?php

    include("../models/modelevenement.php");
    if (isset($_POST["exp"])){
        if(!empty($_FILES)){
            $file_name = $_FILES ['file']['name'];
            $file_extension = strrchr($file_name, ".");
    
            $file_tmp_name = $_FILES ['file']['tmp_name'];
            $file_destination = '../Ressources/'.$file_name;
    
            $test = 0;
    
            $extension_autorisees = array('.png' ,'PNG','JPEG','JPG', '.jpeg','.jpg');
            
            if(in_array($file_extension,$extension_autorisees)){
                if(move_uploaded_file($file_tmp_name,$file_destination )){
                    echo "uplode reussi image";
                }else{
                    echo "uplode echouer image";
                    $file_destination ="";
                }
            }else{
                echo "ceci n'est pas un ficier jpeg ou png";
            }
    
            $file_name = $_FILES ['file2']['name'];
            $file_extension = strrchr($file_name, ".");
    
            $file_tmp_name = $_FILES ['file']['tmp_name'];
            $file_destination2 = '../Ressources/'.$file_name;
    
            $extension_autorisees = array('.pdf' , '.PDF');
            
            if(in_array($file_extension,$extension_autorisees)){
                if(move_uploaded_file($file_tmp_name,$file_destination )){
                    echo "uplode reussi pdf";
                }else{
                    echo "uplode echouer pdf";
                    $file_destination2 ="";
                }
            }else{
                echo "ceci n'est pas un ficier pdf";
            }
    
        }
        Modifier_Evenement($_POST["name"],$_POST["date_debut"],$_POST["date_fin"],$_POST["timedebut"],$_POST["timefin"],$_POST["cp"],$_POST["exp"],$file_destination,$file_destination2);
        header('Location: ../Views/connexion_client.php');
    }
    else
    {
        Cree_Evenement($_POST["name"],$_POST["date_debut"],$_POST["date_fin"],$_POST["timedebut"],$_POST["timefin"],$_POST["cp"]);
        header('Location: ../Views/connexion_client.php');
    }

    
    
?>
