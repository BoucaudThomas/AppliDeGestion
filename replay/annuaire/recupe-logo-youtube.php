<?php include('config_variable.php'); ?>
<?php include('../../connect_db_replay.php'); ?>
<?php include('../../include/header.php'); ?>
 
<?php
    // Action de MODIFICATION des données dans la db        
    if($_GET['action'] == "modifier")
        {   
            // Récupération des données du formulaire
            $id = ($_GET['id']);
            $username = ($_GET['username']);
            $base_source = ($_GET['base_source']);
            $categorie = ($_GET['categorie']);
            $souscategorie = ($_GET['souscategorie']);
            $youtube = ($_GET['youtube']);
            $dailymotion = ($_GET['dailymotion']);
            //$youtube = htmlspecialchars($_GET['youtube'],ENT_QUOTES);
          
            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE users SET 
            base_source='$base_source',
            youtube='$youtube',
            category_id='$categorie',
            sub_category_id='$souscategorie',
            dailymotion='$dailymotion' WHERE id='$id'");

            // redirection aprés modification
            header("location:https://www.replay.gp/@".$username."?page=about");
        }
?>

<h1>Synchonisation base info.replay vers Replay</h1>
    <div>
        <form action="" methode="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['user_id']); ?>">
                                            
            <div>
                <label for="">Fiche Replay N°<?php echo($_GET['user_id']); ?></label>
                    <input type="text" class="form-control" name="username" 
                    value="<?php echo($_GET['username']); ?>">
            </div>
            
            <div>
                <label for="">Base Source</label>
                    <input type="text" class="form-control" name="base_source" 
                    value="<?php echo($_GET['base_source']); ?>">
            </div>
 
            <div>
                <label for="">Categorie</label>
                    <input type="text" class="form-control" name="categorie" 
                    value="<?php echo($_GET['categorie']); ?>">
                </div>

            <div>
                <label for="">Sous Categorie</label>
                    <input type="text" class="form-control" name="souscategorie" 
                    value="<?php echo($_GET['souscategorie']); ?>">
            </div>

            <div>
                <label for="">Youtube</label>
                    <input type="text" class="form-control" name="youtube" 
                    value="<?php if($_GET['type'] == "youtube"){ ?><?php echo($_GET['youtube']); ?><?php } ?>">
            </div>

            <div>
                <label for="">Dailymotion</label>
                    <input type="text" class="form-control" name="dailymotion" 
                    value="<?php if($_GET['type'] == "dailymotion"){ ?><?php echo($_GET['youtube']); ?><?php } ?>">
            </div>
   
            <div class="card-footer" style="float:right">
                <button type="submit" class="btn btn-primary" name="action" value="modifier">Modifier</button> 
            </div>
        
        </form> 

    </div>
                                    
                                
