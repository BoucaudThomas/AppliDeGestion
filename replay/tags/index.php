<?php include('config_variable.php'); ?>
<?php include('../../connect_db_replay.php'); ?>
<?php include('../../include/header.php'); ?>
<?php include('../../include/navbar_left.php'); ?>

<?php
    // Action d'ACTIVATION de la fiche        
    if($_GET['action'] == "activation")
        {   
            // Récupération des données du formulaire
            $id = ($_GET['id']);
            $active = ($_GET['active']);
                        
            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE $db_table SET active='$active' WHERE id='$id'");

            // redirection aprés modification
            header("location:index.php?nav=".$nav."&msg=5");
        }
?>

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
            <h1><?php echo($page_titre); ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?nav=<?php echo($nav); ?>"><?php echo($page_menu); ?></a></li>
              <li class="breadcrumb-item active"><?php echo($page_titre_menu); ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Début message d'alerte Ajout (vert)-->
    <?php if($_GET['msg'] == "4"){ ?>
      <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Message de confirmation</h5>
                    <?php echo($msg4); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Modif (bleu) -->
    <?php if($_GET['msg'] == "3"){ ?>
      <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Message de Confirmation</h5>
                    <?php echo($msg3); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Suppression (rouge) -->
    <?php if($_GET['msg'] == "2"){ ?>
      <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Message de Suppression</h5>
                    <?php echo($msg2); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Annulation (jaune) -->
    <?php if($_GET['msg'] == "1"){ ?>
      <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Message d'Annulation</h5>
                    <?php echo($msg1); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <div id="example1_filter" class="dropdown">
      <div class="dt-button background" style></div>
      <div class="dt-button-collection" style="top: 38px; left: 0px;">
        <div class="" name="menuDeroule" id="menu">

        <?php if($_GET['q']){ ?>
        Résultat de recherche pour : <?php echo($_GET['q']); ?> <BR>
        <?php } ?>

        <strong>Rechercher sur : </strong>
          <a class="table" href="?v=1000&nav=<?php echo($nav); ?>">
            <?php if($_GET['v'] == "1000"){ ?><strong>1 000</strong>
            <?php } else { ?>1 000<?php } ?></a>
          /
          <a class="table" href="?v=2000&nav=<?php echo($nav); ?>">
            <?php if($_GET['v'] == "2000"){ ?><strong>2 000</strong>
            <?php } else { ?>2 000<?php } ?></a>
          /
          <a class="table" href="?v=3000&nav=<?php echo($nav); ?>">
            <?php if($_GET['v'] == "3000"){ ?><strong>3 000</strong>
            <?php } else { ?>3 000<?php } ?></a>
          /
          <a class="table" href="?v=10000&nav=<?php echo($nav); ?>">
            <?php if($_GET['v'] == "10000"){ ?><strong>10 000</strong>
            <?php } else { ?>10 000<?php } ?></a>
          / 
          <a class="table" href="?v=50000&nav=<?php echo($nav); ?>">
            <?php if($_GET['v'] == "50000"){ ?><strong>500 000</strong>
            <?php } else { ?>500 000<?php } ?></a>
          /
          
          derniers résultats
        </div>
        <br>
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length">
                <label>

                <form action="" methode="GET">
                  <input type="hidden" name="v" value="<?php echo($_GET['v']); ?>">
                  <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                  <select name="nbpg" aria-controls="example1" class="form-control input-sm">
                    <?php if($_GET['nbpg']){ ?><option selected value="<?php echo($_GET['nbpg']); ?>"><?php echo($_GET['nbpg']); ?></option><?php } ?>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500">500</option>
                  </select>
                  <button type="submit" class="btn btn-primary btn-sm" name="action" value="formajout">Afficher</button>
                </form>
                
                </label>
              </div>
            </div>
          <div class="col-sm-12 col-md-6">
            <form action="editer.php" methode="GET">
              <input type="hidden" name="id" value="1">
              <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                <div id="example1_filter" class="dataTables_filter">
                <button type="submit" class="btn btn-primary" name="action" value="formajout">Ajouter</button> 
                </div>
            </form>
          </div>
          
          </div>
          <!-- SHOW -->
          <table data-order='[[ 0, "desc" ]]' 

          <?php if($_GET['nbpg'] == "20"){ ?>
            data-page-length= '20'
          <?php } ?>
          
          <?php if($_GET['nbpg'] == "20"){ ?>
            data-page-length= '20'
          <?php } ?>  

          <?php if($_GET['nbpg'] == "50"){ ?>
            data-page-length= '50'
          <?php } ?>  
        
          <?php if($_GET['nbpg'] == "100"){ ?>
            data-page-length= '100'
          <?php } ?>  
        
          <?php if($_GET['nbpg'] == "500"){ ?>
            data-page-length= '500'
          <?php } ?>  
      
          id="example1" 
          class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>Tags (fr)</th>
                <th>Tags (de)</th>
                <th>Etat</th>
                <th>Edite</th>
              </tr>
            </thead>

            <tbody>       
              <?php

                if($_GET['q'])
                {
                  // Rechercher un mot dans le db (q)
                  $q = ($_GET['q']); // Récuération du mot à chercher

                  // Requête de la recherche dans la db
                  $resultat = $db->query(
                    "SELECT * FROM $db_table
                     WHERE categorie_french LIKE '%$q%'
                     OR descriptif LIKE '%$q%'
                     OR langue LIKE '%$q%'
                     OR active LIKE '%$q%'"
                     );

                  //$resultat = $db->query('SELECT * FROM recherche_mot ORDER BY id DESC LIMIT 5');

                }else{

                  // affiche les derniers enregistrement dans la db 
                  if($_GET['v'])
                  {
                    // limitter la récupération des X derniers enregistrement
                    $resultat = $db->query('SELECT * FROM '.$db_table.' ORDER BY id DESC LIMIT '.$_GET['v'].'');
                  }else{
                    // limitter la récupération des 1000 derniers enregistrement
                    $resultat = $db->query('SELECT * FROM '.$db_table.' ORDER BY id DESC LIMIT 1000');
                  }
                }
                      while($col=$resultat->fetch()){
              ?>
                                    
              <tr class="table table-bordered">

                  <td scope="row" id="info_annuaire">
                    <a title="éditer la fiche n° <?php echo($col['id']); ?>" href="editer.php?id=<?php echo($col['id']);?>&action=editer&nav=<?php echo($nav); ?>">
                      <?php echo($col['id']); ?>
                    </a>
                  </td>

                  <td>
                    <a href="index.php?nav=2&q=<?php echo($col['categorie_french']); ?>&action=rechercher">
                      <?php echo($col['categorie_french']); ?>
                    </a>
                  </td>

                  <td>
                      <?php echo($col['categorie_german']); ?>
                  </td>

                  <td>
                    <form action="" methode="GET">
                      <?php if($col['active'] == "1"){ ?>
                        <input type="hidden" name="id" value="<?php echo($col['id']); ?>">
                        <input type="hidden" name="active" value="0">
                        <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                        <button type="submit" class="btn btn-success btn-sm" name="action" value="activation">Activer</button> 
                      <?php } else { ?>
                        <input type="hidden" name="id" value="<?php echo($col['id']); ?>">
                        <input type="hidden" name="active" value="1">
                        <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                        <button type="submit" class="btn btn-warning btn-sm" name="action" value="activation">Désactiver</button> 
                      <?php } ?> 
                    </form>
                  </td>

                  <td>
                    <a class="btn btn-warning btn-sm" title="modifier la fiche complète" href="editer.php?id=<?php echo($col['id']);?>&action=editer&nav=<?php echo($nav); ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" title="supprimer la fiche n° <?php echo($col['id']); ?>" href="editer.php?id=<?php echo($col['id']);?>&action=confirmer_supprimer&nav=<?php echo($nav); ?>">
                        <i class="fas fa-trash"></i>
                    </a>
                  </td>

                  <!-- QUAND ON MODIF AVEC ID OUVRIR FORMULAIRE VOIR FEUILLE -->

                    <?php
                    //accolade de fin de boucle
                        }
                        ?>
            </tbody>
            <tfoot>
              <tr>
                <th>id</th>
                <th>Tags (fr)</th>
                <th>Tags (de)</th>
                <th>Etat</th>
                <th>Edite</th>
              </tr>
            </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include('../../include/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('../../include/script.php'); ?>


<style>
  input.selecteur{
    width: 60px;
  }
  div.ModifRight{
      display: inline-block;
      float: right;
      padding: 5px;
  }
</style>