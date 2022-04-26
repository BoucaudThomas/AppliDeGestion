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
            $title = ($_GET['title']);
            $video_id = ($_GET['video_id']);
            $short_id = ($_GET['short_id']);
            $daily = ($_GET['daily']);
            $youtube = ($_GET['youtube']);
            $time_date = ($_GET['time_date']);
            $thumbnail = ($_GET['thumbnail']);
            $source_domain = ($_GET['source_domain']);
            $date_enregistrement = ($_GET['date_enregistrement']);
                        
            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE $db_table SET title='$title', video_id='$video_id', short_id='$short_id', daily='$daily', youtube='$youtube', time_date='$time_date', thumbnail='$thumbnail', date_enregistrement='$date_enregistrement', source_domain='$source_domain' WHERE id='$id'");
            //$db->query("UPDATE $db_table SET title='$title', content='$content' WHERE id='$id'");                        

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
            $title = ($_GET['title']);
            $video_id = ($_GET['video_id']);
            $short_id = ($_GET['short_id']);
            $daily = ($_GET['daily']);
            $youtube = ($_GET['youtube']);
            $time_date = ($_GET['time_date']);
            $thumbnail = ($_GET['thumbnail']);
            $source_domain = ($_GET['source_domain']);
            $date_enregistrement = ($_GET['date_enregistrement']);
                        
            // Enregistrement des données dans la db (ajouter)
            $db->query("INSERT INTO $db_table SET title='$title', video_id='$video_id', short_id='$short_id', daily='$daily', youtube='$youtube', time_date='$time_date', thumbnail='$thumbnail', date_enregistrement='$date_enregistrement', source_domain='$source_domain'");

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
        <body class="hold-transition sidebar-mini">
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
                        </section>
                                <?php } else { ?>
                                    <div class="row">
                                        <!-- left column -->
                                        <div class="col-md-6">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <?php if($_GET['action'] == "editer"){ ?>
                                                        <h3 class="card-title">Vidéo N°<?php echo($donnees['id']); ?></h3>
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
                                                            <label for="">Titre</label>
                                                            <input type="text" class="form-control" name="title"
                                                            value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['title']);?><?php } ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Video_id</label>
                                                            <input type="text" class="form-control" name="video_id"
                                                            value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['video_id']);?><?php } ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short_id</label>
                                                            <input type="text" class="form-control" name="short_id"
                                                            value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['short_id']);?><?php } ?>">
                                                        </div>
                                                        <div>
                                                            <?php if ($donnees['daily']) { ?>
                                                                <div class="form-group">
                                                                    <label for="">Dailymotion</label>
                                                                        <input type="text" class="form-control" name="daily"
                                                                        value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['daily']);?><?php } ?>">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="form-group">
                                                                    <label for="">Youtube</label>
                                                                    <input type="text" class="form-control" name="youtube"
                                                                    value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['youtube']);?><?php } ?>">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Date</label>
                                                            <input type="text" class="form-control" name="time_date"
                                                            value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['time_date']);?><?php } ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Thumbnail</label>
                                                            <input type="text" class="form-control" name="thumbnail"
                                                            value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['thumbnail']);?><?php } ?>">
                                                            <?php echo($donnees['thumbnail_ancien']);?>
                                                        </div>
                                                        <div class="card-footer" style="float:right">
                                                            <?php if($_GET['action'] == "editer"){ ?>
                                                                <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button>
                                                            <?php } else { ?>
                                                                <button type="submit" class="btn btn-primary" name="action" value="ajouter">Ajouter</button> 
                                                            <?php } ?>
                                                            <button type="submit" class="btn btn-primary" name="action" value="modifier">Modifier</button>
                                                        </div> 

                                                </div>
                                                <!-- /.card-body -->
                                            </div>
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
                                                <!-- /.card-header -->
                                                <div class="card-body" style="display: block;">
                                                    <?php if($_GET['action'] == "editer"){ ?>
                                                        <input type="hidden" name="id" value="<?php echo($donnees['id']); ?>">
                                                    <?php } ?> 
                                                    <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                                                    <div class="form-group">
                                                        <label for="">Source_domain</label>
                                                        <input type="text" class="form-control" name="source_domain"
                                                        value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['source_domain']);?><?php } ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Date_enregistrement</label>
                                                        <input type="text" class="form-control" name="date_enregistrement"
                                                        value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['date_enregistrement']);?><?php } ?>">
                                                    </div>
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
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                    </form>         
                                </div>
                                <!-- /.card-body -->
                            </div>
                                <?php } ?>

                                <?php } ?>
                                
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