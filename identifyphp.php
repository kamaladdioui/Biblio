 <?php
            include 'config.php';
            $bdd = $GLOBALS['bdd'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $typeOfUser=$_POST['type'];
            if ($typeOfUser == "admins") {
                $reponse = $bdd->prepare('SELECT * FROM admins WHERE email= ? ');
                $reponse->execute(array($email));
                $donnees=$reponse->fetch();
                if($donnees)
                    {
                        if($donnees['mot_de_passe']==$password)
                            {
                                echo "success1";
                            }
                        else{
                            echo 'mot de passe est incorrect !';
                        }
                    }
                    else{
                        echo 'cette email nexist pas !';
                    }
            } else if($typeOfUser == "utilisateurs"){
                $reponse = $bdd->prepare('SELECT * FROM utilisateurs WHERE email= ? ');
                $reponse->execute(array($email));
                $donnees=$reponse->fetch();
                if($donnees)
                {
                    if($donnees['mot_de_passe']==$password && $donnees['statu']=='active')
                        {
                            echo "success2";
                        }
                    elseif($donnees['mot_de_passe']==$password && $donnees['statu']='desactive'){
                            echo "success3";
                    }
                    else{
                        echo 'mot de passe est incorrect !';
                    }
                }
                else{
                    echo 'cette email nexist pas !';
                }
            }
            
            $reponse->closeCursor();
       ?>
