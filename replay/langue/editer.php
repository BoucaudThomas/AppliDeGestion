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
            $french = htmlspecialchars($_GET['french'],ENT_QUOTES);
            $english = htmlspecialchars($_GET['english'],ENT_QUOTES);
            $arabic = htmlspecialchars($_GET['arabic'],ENT_QUOTES);
            $dutch = htmlspecialchars($_GET['dutch'],ENT_QUOTES);
            $german = htmlspecialchars($_GET['german'],ENT_QUOTES);
            $russian = htmlspecialchars($_GET['russian'],ENT_QUOTES);
            $spanish = htmlspecialchars($_GET['spanish'],ENT_QUOTES);
            $turkish = htmlspecialchars($_GET['turkish'],ENT_QUOTES);
            $descriptif = htmlspecialchars($_GET['descriptif'],ENT_QUOTES);
            $langue = htmlspecialchars($_GET['langue'],ENT_QUOTES);
            $balise_h1_french = htmlspecialchars($_GET['balise_h1_french'],ENT_QUOTES);
            $meta_title_french = htmlspecialchars($_GET['meta_title_french'],ENT_QUOTES);
            $meta_description_french = htmlspecialchars($_GET['meta_description_french'],ENT_QUOTES);
            $meta_keywords_french = htmlspecialchars($_GET['meta_keywords_french'],ENT_QUOTES);
            $url_canonial_french = htmlspecialchars($_GET['url_canonial_french'],ENT_QUOTES);
            $url_canonial_next_french = htmlspecialchars($_GET['url_canonial_next_french'],ENT_QUOTES);
            $balise_h1_english = htmlspecialchars($_GET['balise_h1_english'],ENT_QUOTES);
            $meta_title_english = htmlspecialchars($_GET['meta_title_english'],ENT_QUOTES);
            $meta_description_english = htmlspecialchars($_GET['meta_description_english'],ENT_QUOTES);
            $meta_keywords_english = htmlspecialchars($_GET['meta_keywords_english'],ENT_QUOTES);
            $url_canonial_english = htmlspecialchars($_GET['url_canonial_english'],ENT_QUOTES);
            $url_canonial_next_english = htmlspecialchars($_GET['url_canonial_next_english'],ENT_QUOTES);
            $lang_key = htmlspecialchars($_GET['lang_key'],ENT_QUOTES);
            $active = htmlspecialchars($_GET['active'],ENT_QUOTES);
            $type = htmlspecialchars($_GET['type'],ENT_QUOTES);

            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE $db_table SET balise_h1_french='$balise_h1_french',
            meta_title_french='$meta_title_french',
            meta_description_french='$meta_description_french',
            url_canonial_french='$url_canonial_french',
            url_canonial_next_french='$url_canonial_next_french',
            balise_h1_english='$balise_h1_english',
            meta_title_english='$meta_title_english',
            meta_description_english='$meta_description_english',
            meta_keywords_english='$meta_keywords_english',
            meta_keywords_french='$meta_keywords_french',
            url_canonial_english='$url_canonial_english',
            url_canonial_next_english='$url_canonial_next_english',
            french='$french',
            english='$english',
            arabic='$arabic',
            dutch='$dutch',
            german='$german',
            russian='$russian',
            spanish='$spanish',
            turkish='$turkish',
            lang_key='$lang_key',
            active='$active',
            type='$type'
            WHERE id='$id'");

            //$db->query("UPDATE $db_table SET title='$title', content='$content' WHERE i
            
                                           

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
            $french = htmlspecialchars($_GET['french'],ENT_QUOTES);
            $english = htmlspecialchars($_GET['english'],ENT_QUOTES);
            $arabic = htmlspecialchars($_GET['arabic'],ENT_QUOTES);
            $dutch = htmlspecialchars($_GET['dutch'],ENT_QUOTES);
            $german = htmlspecialchars($_GET['german'],ENT_QUOTES);
            $russian = htmlspecialchars($_GET['russian'],ENT_QUOTES);
            $spanish = htmlspecialchars($_GET['spanish'],ENT_QUOTES);
            $turkish = htmlspecialchars($_GET['turkish'],ENT_QUOTES);
            $descriptif = htmlspecialchars($_GET['descriptif'],ENT_QUOTES);
            $langue = htmlspecialchars($_GET['langue'],ENT_QUOTES);
            $balise_h1_french = htmlspecialchars($_GET['balise_h1_french'],ENT_QUOTES);
            $meta_title_french = htmlspecialchars($_GET['meta_title_french'],ENT_QUOTES);
            $meta_description_french = htmlspecialchars($_GET['meta_description_french'],ENT_QUOTES);
            $meta_keywords_french = htmlspecialchars($_GET['meta_keywords_french'],ENT_QUOTES);
            $url_canonial_french = htmlspecialchars($_GET['url_canonial_french'],ENT_QUOTES);
            $url_canonial_next_french = htmlspecialchars($_GET['url_canonial_next_french'],ENT_QUOTES);
            $balise_h1_english = htmlspecialchars($_GET['balise_h1_english'],ENT_QUOTES);
            $meta_title_english = htmlspecialchars($_GET['meta_title_english'],ENT_QUOTES);
            $meta_description_english = htmlspecialchars($_GET['meta_description_english'],ENT_QUOTES);
            $meta_keywords_english = htmlspecialchars($_GET['meta_keywords_english'],ENT_QUOTES);
            $url_canonial_english = htmlspecialchars($_GET['url_canonial_english'],ENT_QUOTES);
            $url_canonial_next_english = htmlspecialchars($_GET['url_canonial_next_english'],ENT_QUOTES);
            $lang_key = htmlspecialchars($_GET['lang_key'],ENT_QUOTES);
            $active = htmlspecialchars($_GET['active'],ENT_QUOTES);
            $type = htmlspecialchars($_GET['type'],ENT_QUOTES);
            
                        
            // Enregistrement des données dans la db (ajouter)
            $db->query("INSERT INTO $db_table SET balise_h1_french='$balise_h1_french',
            meta_title_french='$meta_title_french',
            meta_description_french='$meta_description_french',
            url_canonial_french='$url_canonial_french',
            url_canonial_next_french='$url_canonial_next_french',
            balise_h1_english='$balise_h1_english',
            meta_title_english='$meta_title_english',
            meta_description_english='$meta_description_english',
            meta_keywords_english='$meta_keywords_english',
            meta_keywords_french='$meta_keywords_french',
            url_canonial_english='$url_canonial_english',
            url_canonial_next_english='$url_canonial_next_english',
            french='$french',
            english='$english',
            arabic='$arabic',
            dutch='$dutch',
            german='$german',
            russian='$russian',
            spanish='$spanish',
            turkish='$turkish',
            lang_key='$lang_key',
            active='$active',
            type='$type'
            ");

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

<?php } else { ?>
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            <h3 class="card-title">Langues N°<?php echo($donnees['id']); ?></h3>
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
                                                <input type="text" class="form-control" name="french"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['french']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">English</label>
                                                <input type="text" class="form-control" name="english" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['english']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Arabic</label>
                                                <input type="text" class="form-control" name="arabic" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['arabic']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dutch</label>
                                                <input type="text" class="form-control" name="dutch"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['dutch']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">German</label>
                                                <input type="text" class="form-control" name="german"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['german']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Russian</label>
                                                <input type="text" class="form-control" name="russian"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['russian']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Spanish</label>
                                                <input type="text" class="form-control" name="spanish"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['spanish']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Turkish</label>
                                                <input type="text" class="form-control" name="turkish"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['turkish']); ?><?php }?>">
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
                                                <label for="">lang_key (Pays)</label>
                                                <input type="text" class="form-control" name="lang_key"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['lang_key']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">type (Continent)</label>
                                                <input type="text" class="form-control" name="type"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['type']);?><?php }?>">
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
                                        </div>     
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card card-warning">
                                    <div class="card-header">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            <h3 class="card-title">Meta Tag</h3>
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
                                                <label for="">meta_title_french</label>
                                                <input type="text" class="form-control" name="meta_title_french"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_title_french']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">meta_description_french</label>
                                                <input type="text" class="form-control" name="meta_description_french" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_description_french']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">meta_keywords_french</label>
                                                <input type="text" class="form-control" name="meta_keywords_french" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_keywords_french']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">meta_title_english</label>
                                                <input type="text" class="form-control" name="meta_title_english"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_title_english']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">meta_description_english</label>
                                                <input type="text" class="form-control" name="meta_description_english"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_description_english']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">meta_keywords_english</label>
                                                <input type="text" class="form-control" name="meta_keywords_english"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['meta_keywords_english']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">balise_h1_french</label>
                                                <input type="text" class="form-control" name="balise_h1_french"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['balise_h1_french']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">balise_h1_english</label>
                                                <input type="text" class="form-control" name="balise_h1_english" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['balise_h1_english']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">url_canonial_french</label>
                                                <input type="text" class="form-control" name="url_canonial_french" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['url_canonial_french']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">url_canonial_next_french</label>
                                                <input type="text" class="form-control" name="url_canonial_next_french"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['url_canonial_next_french']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">url_canonial_english</label>
                                                <input type="text" class="form-control" name="url_canonial_english"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['url_canonial_english']); ?><?php }?>">
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
                                        </div>
                                        </form>         
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