<?php include('config_variable.php'); ?>
<?php include('../../connect_db_replay.php'); ?>
<?php include('../../include/header.php'); ?>
 
<?php
    // Redirection en cas de demande d'ANNULATION de modification         
    if($_GET['action'] == "annuler")
        {   
            header("location:index.php?nav=".$nav."&msg=1");
        }
?>

<?php
    // Action de SUPPRESSION de la fiche        
    if($_GET['action'] == "supprimer")
        {   
            // Suppression de la Fiche N°xxx
            $id = ($_GET['id']); // Récuération du numéro de ligne à supprimer
            $nav = ($_GET['nav']);
            $db->query("DELETE FROM $db_table WHERE id='$id'"); // Suppression

            // redirection après suppression
            header("location:index.php?nav=".$nav."&msg=2");
        }
?>

<?php
    // Action de MODIFICATION des données dans la db        
    if($_GET['action'] == "modifier")
        {   
            // Récupération des données du formulaire
            $id = ($_GET['id']);
            $mot_french = htmlspecialchars($_GET['mot_french'],ENT_QUOTES);
            $mot_english = htmlspecialchars($_GET['mot_english'],ENT_QUOTES);
            $mot_arabic = htmlspecialchars($_GET['mot_arabic'],ENT_QUOTES);
            $mot_dutch = htmlspecialchars($_GET['mot_dutch'],ENT_QUOTES);
            $mot_german = htmlspecialchars($_GET['mot_german'],ENT_QUOTES);
            $mot_russian = htmlspecialchars($_GET['mot_russian'],ENT_QUOTES);
            $mot_spanish = htmlspecialchars($_GET['mot_spanish'],ENT_QUOTES);
            $mot_turkish = htmlspecialchars($_GET['mot_turkish'],ENT_QUOTES);
            $categorie = htmlspecialchars($_GET['categorie'],ENT_QUOTES);
            $langue = htmlspecialchars($_GET['langue'],ENT_QUOTES);
                        
            // Enregistrement des données dans la db (modifier)
            // $db->query("UPDATE $db_table SET mot_french='$mot_french', mot_english='$mot_english', mot_arabic='$mot_arabic', mot_dutch='$mot_dutch', mot_german='$mot_german', mot_russian='$mot_russian', mot_spanish='$mot_spanish', mot_turkish='$mot_turkish', langue='$langue', descriptif='$descriptif', active='$active' WHERE id='$id'");
            $db->query("UPDATE $db_table SET mot_french='$mot_french',mot_english='$mot_english',mot_arabic='$mot_arabic',mot_german='$mot_german',mot_dutch='$mot_dutch',mot_russian='$mot_russian',mot_spanish='$mot_spanish',mot_turkish='$mot_turkish',langue='$langue',categorie='$categorie' WHERE id='$id'");
            
                                           

            // redirection aprés modification
            header("location:index.php?nav=".$nav."&msg=3");
        }
?>

<?php
    // AJOUTER les données dans la db         
    if($_GET['action'] == "ajouter")
        {   
            // Récupération des données du formulaire à ajouter
            $id = ($_GET['id']);
            $mot_french = htmlspecialchars($_GET['mot_french'],ENT_QUOTES);
            $mot_english = htmlspecialchars($_GET['mot_english'],ENT_QUOTES);
            $mot_arabic = htmlspecialchars($_GET['mot_arabic'],ENT_QUOTES);
            $mot_dutch = htmlspecialchars($_GET['mot_dutch'],ENT_QUOTES);
            $mot_german = htmlspecialchars($_GET['mot_german'],ENT_QUOTES);
            $mot_russian = htmlspecialchars($_GET['mot_russian'],ENT_QUOTES);
            $mot_spanish = htmlspecialchars($_GET['mot_spanish'],ENT_QUOTES);
            $mot_turkish = htmlspecialchars($_GET['mot_turkish'],ENT_QUOTES);
            $categorie = htmlspecialchars($_GET['categorie'],ENT_QUOTES);
            $langue = htmlspecialchars($_GET['langue'],ENT_QUOTES);
                        
                        
            // Enregistrement des données dans la db (ajouter)
            $db->query("INSERT INTO $db_table SET mot_french='$mot_french',mot_english='$mot_english',mot_arabic='$mot_arabic',mot_german='$mot_german',mot_dutch='$mot_dutch',mot_russian='$mot_russian',mot_spanish='$mot_spanish',mot_turkish='$mot_turkish',langue='$langue',categorie='$categorie'");

            // redirection aprés ajout
            header("location:index.php?nav=".$nav."&msg=4");
        }
?>

<?php

            // Afficher les données de la db dans le formulaire pour les modifier
            $resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id ='.$_GET['id'].'');
            while ($donnees = $resultat->fetch()) {

?> 

<?php include('../../include/navbar_left.php'); ?>

<body class="hold-transition sidebar-mini">k
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>    <?php if($_GET['action'] == "editer"){ ?>
                                            Modification
                                            <?php } else { ?>
                                                <?php if($_GET['action'] == "confirmer_supprimer"){ ?>
                                                    Suppression
                                                <?php } else { ?>
                                                    Ajout
                                                <?php } ?> 
                                        <?php } ?> 
                                        <?php echo($page_titre_modif); ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php?nav=<?php echo($nav); ?>"><?php echo($page_menu); ?></a></li>
                                    <li class="breadcrumb-item active">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            Modification
                                            <?php } else { ?>
                                                <?php if($_GET['action'] == "confirmer_supprimer"){ ?>
                                                    Suppression
                                                <?php } else { ?>
                                                    Ajout
                                                <?php } ?> 
                                        <?php } ?> 
                                        <?php echo($page_titre_modif); ?></h1>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                
                <section class="content">
                    <div class="container-fluid">


<?php if($_GET['action'] == "confirmer_supprimer"){ ?>

            <!-- Début container confirmation de suppression -->
            <div class="card card-warning card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-edit"></i>
                    Demande de Confirmation
                    </h3>
                </div>

                <div class="card-body">
                    <div class="text-muted mt-3">
                        Confirmez-vous la suppression de la fiche n°<b><?php echo($_GET['id']); ?></b> ?
                        <BR><BR>
                    </div>

                    <form action="" methode="POST">
                        <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>">
                        <input type="hidden" name="nav" value="<?php echo($_GET['nav']); ?>">
                            <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">
                            Non Annuler
                            </button>

                            <button type="submit" class="btn btn-danger toastrDefaultError" name="action" value="supprimer">
                            Oui Supprimer
                            </button>
                    </form>
                </div>

            </div>
            <!-- Fin container confirmation de suppression -->

<?php } else { ?>
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            <h3 class="card-title">Sous-Tags N°<?php echo($donnees['id']); ?></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        <?php } else { ?>
                                            <h3 class="card-title">Ajouter <?php echo($page_titre_ajout_cadre); ?></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        <?php } ?>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="display: block;">
                                        <form action="" methode="POST">
                                            <?php if($_GET['action'] == "editer"){ ?>
                                                <input type="hidden" name="id" value="<?php echo($donnees['id']); ?>">
                                            <?php } ?> 
                                            <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                                            <div class="form-group">
                                                <label for="">French</label>
                                                <input type="text" class="form-control" name="mot_french"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_french']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">English</label>
                                                <input type="text" class="form-control" name="mot_english" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_english']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Arabic</label>
                                                <input type="text" class="form-control" name="mot_arabic"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_arabic']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dutch</label>
                                                <input type="text" class="form-control" name="mot_dutch"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_dutch']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">German</label>
                                                <input type="text" class="form-control" name="mot_german"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_german']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Russian</label>
                                                <input type="text" class="form-control" name="mot_russian"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_russian']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Spanish</label>
                                                <input type="text" class="form-control" name="mot_spanish"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_spanish']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Turkish</label>
                                                <input type="text" class="form-control" name="mot_turkish"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['mot_turkish']); ?><?php }?>">
                                            </div>
                                            <div class="card-footer" style="float:right">
                                                <?php if($_GET['action'] == "editer"){ ?>
                                                    <button type="submit" class="btn btn-primary" name="action" value="modifier">Modifier</button>
                                                <?php } else { ?>
                                                    <button type="submit" class="btn btn-primary" name="action" value="ajouter">Ajouter</button> 
                                                <?php } ?>
                                                <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button>
                                            </div>                 
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <!-- /.card-body -->
                                
                            </div>    
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            <h3 class="card-title">Options</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        <?php } else { ?>
                                            <h3 class="card-title">Ajouter <?php echo($page_titre_ajout_cadre); ?></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        <?php } ?>
                                        <!-- /.card-tools -->
                                    </div>
                                    <div class="card-body" style="display: block;">
                                    <div class="form-group">
                                        <label for="">Categorie</label>

                                            <select name="categorie" aria-controls="example1" class="form-control input-sm">
                                                <?php
                                                    // Afficher les données de la table : tags_categorie
                                                    $cat = $db->query('SELECT * FROM tags_categorie');
                                                    while($result_cat=$cat->fetch()){
                                                ?> 
                                                    <option 
                                                    <?php if($donnees['categorie'] == $result_cat['id']){ ?>selected<?php } ?>
                                                    value="<?php echo($result_cat['id']); ?>"><?php echo($result_cat['categorie_french']); ?> (<?php echo($result_cat['id']); ?>)</option>
                                                <?php } ?>

                                            </select>
                                          
                                    </div>
                                    <div class="form-group">
                                        <label for="">Langue</label>
                                        <input type="text" class="form-control" name="langue"
                                        value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['langue']); ?><?php }?>">
                                    </div>
                                    <!-- /.card-header -->
                                        <div class="card-body" style="display: block;">
                                            <?php if($_GET['action'] == "editer"){ ?>
                                                <input type="hidden" name="id" value="<?php echo($donnees['id']); ?>">
                                            <?php } ?> 
                                            <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                                            
                                            <div class="card-footer" style="float:right">
                                                <?php if($_GET['action'] == "editer"){ ?>
                                                    <button type="submit" class="btn btn-primary" name="action" value="modifier">Modifier</button> 
                                                <?php } else { ?>
                                                    <button type="submit" class="btn btn-primary" name="action" value="ajouter">Ajouter</button> 
                                                <?php } ?>
                                                    <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button> 
                                                <?php if($_GET['action'] == "editer"){ ?>
                                                    <button type="submit" class="btn btn-danger toastrDefaultError" name="action" value="confirmer_supprimer">Supprimer</button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form> 
                                    </div>        
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
            <?php
                }
            ?> 
                                </div>
                            </div>
                            
                                            <?php
                                                }
                                            ?> 
                                        </section>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../include/footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</body>
    <!-- ./wrapper -->
    <?php include('../../include/script.php'); ?>

<style>
    form.border{
        border : solid ;
        border-color : black ;
    }
</style>