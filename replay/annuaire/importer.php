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
	// MODULE D'IMPORT DES DONNEES .CSV
	if (isset($_POST["action"]) == "send") {
		
		$fileName = $_FILES["file"]["tmp_name"];
		
		if ($_FILES["file"]["size"] > 0) {
			
			$file = fopen($fileName, "r");
				
			while (($column = fgetcsv($file, 10000, "|")) !== FALSE) {
				// Enregistremement des données
				$db->query("INSERT INTO $db_table SET
                username='$column[0]',
                note='$column[1]',
				sub_category_id='$column[2]',
                category_id='$column[3]',
                website='$column[4]',
                facebook='$column[5]',
                twitter='$column[6]',
				youtube='$column[7]',
                avatar='$column[8]',
                base_source='$column[9]',
                active='$column[10]',
                active_television_gp='$column[11]',
                type_entreprise='$column[12]',
                published='$column[13]',
                active_chaine_replay='$column[14]'
				");
			}
            // redirection aprés import
		    header("location:index.php?nav=".$nav."&msg=4");
		}

		
	}
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
                                <h1> <?php if($_GET['action'] == "formimport") {?>
                                    Import
                                        <?php echo($page_titre_modif); ?></h1>
                                    <?php } ?>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php?nav=<?php echo($nav); ?>"><?php echo($page_menu); ?></a></li>
                                    <li class="breadcrumb-item active">
                                    <?php if($_GET['action'] == "formimport") {?>
                                        Import 
                                        <?php echo($page_titre_modif); ?></h1>
                                    <?php } ?>
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

<?php } elseif ($_GET['action'] == "formimport") {?>
                                    <!-- /.card-header -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Import de fichier</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <div class="card-body" style="display: block;">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Importer un fichier</label> (type <strong>.csv</strong>)
                                                        <form enctype="multipart/form-data" action="" method="POST">
                                                            <div class="input">
                                                                <input type="file" name="file" id="file" class="btn btn-secondary" accept=".csv, .xlsx">
                                                            </div>
                                                            <br>
                                                            <button type="submit" name="action" value="send" class="btn btn-primary">
                                                                <i class="fas fa-upload"></i>
                                                                Importer
                                                            </button>
                                                        </form>
                                                    </div>  
                                                    <p>Vous pouvez télécharger&nbsp;<a href="model-test.csv">un modèle type</a>.</p>
                                                </div>
                                            </div>
                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Exemple d'import</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <div class="card-body" style="display: block;">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="message" style="height: 150px" readonly>username|note|sub_category_id|category_id|website|facebook|twitter|youtube|avatar|base_source|ctive|active_televisiion_gp|type_entreprise|published|active_chaine_replay<?php $resultat = $db->query("SELECT * FROM $db_table ORDER BY id DESC LIMIT 10");
                                                            while($col=$resultat->fetch()){?>
                                                            <?php echo($col['username']); ?>|<?php echo($col['youtube']); ?>|<?php echo($col['dailymotion']); ?>|<?php echo($col['facebook']); ?>|<?php echo($col['twitter']); ?>|<?php echo($col['website']); ?>|<?php echo($col['category_id']); ?>|<?php echo($col['sub_category_id']); ?>|<?php echo($col['avatar']); ?>
                                                            <?php }?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-warning">
                                                <div class="card-header">
                                                    <h3 class="card-title">Code d'import</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <div class="card-body" style="display: block;">
                                                    Code à copier pour importer les données dans la table de la db 
                                                        php	<BR>
                                                        // Enregistremement des données<BR>
                                                        $db->query("INSERT INTO $db_table SET<BR>

                                                        <?php
                                                            //requete pour prendre les colonnes de la table dans le tableau champs
                                                            $prepare = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$db_table'";
                                                            $q = $db->prepare($prepare);
                                                            $q->execute();
                                                                    
                                                            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                                                            $chiffre = 0+$chiffre_2
                                                        ?>
                                                            <?php echo implode("", $donnees);?>='. $column[<?php echo ($chiffre);?>] .',<BR>
                                                        <?php 
                                                            $chiffre_2 = $chiffre+1;
                                                            } 
                                                        ?>

                                                        ");<BR>
                                                        ?><BR>
                                                    <!-- Fin Code à copier pour importer attention à la fin pas de virgule à mettre -->
                                                </div>
                                            </div>
                                        </div>

            
            <?php } ?>
            
             
                                </div>
                            </div>
                            
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