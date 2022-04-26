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
            $public = ($_GET['public']);
                        
            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE $db_table SET public='$public' WHERE id='$id'");

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
              <div class="row" style="float: right;">
              <form action="importer.php" methode="GET">
                  <input type="hidden" name="id" value="1">
                  <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                    <div id="example1_filter" class="dataTables_filter">
                      <button type="submit" class="btn btn-success" name="action" value="formimport">Importer</button>
                    </div>
              </form>
                &nbsp;
                <form action="editer.php" methode="GET">
                  <input type="hidden" name="id" value="1">
                  <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                    <div id="example1_filter" class="dataTables_filter">
                      <button type="submit" class="btn btn-primary" name="action" value="formajout">Ajouter</button>
                    </div>
                </form>
              </div>
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
                <th>Logo</th>
                <th>Chaîne TV</th>
                <th>Pays</th>
                <th>Web</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Daily</th>
                <th>YouTube</th>
                <th>Replay</th>
                <th>Editer</th>
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
                     WHERE username LIKE '%$q%'
                     OR type_entreprise LIKE '%$q%'
                     OR username LIKE '%$q%'
                     OR sub_category_id LIKE '%$q%'"
                     );

                  //$resultat = $db->query('SELECT * FROM recherche_mot ORDER BY id DESC LIMIT 5');

                }else{

        
                    // limitter la récupération des 1000 derniers enregistrement
                    $resultat = $db->query('SELECT * FROM '.$db_table.' ORDER BY id DESC LIMIT 10000');
               
                }
                      while($col=$resultat->fetch()){
              ?>
                                    
              <tr class="table table-bordered">
                  <td scope="row" id="users">
                    <?php if($col['avatar'] == "upload/photos/2020/07/GfjP7iNgGgCjfC1ID7kF_14_aa9f9f6db7c8e793bc76461f54e6b4b9_image.png"){ ?>
                      <?php } else { ?>
                      <center><img src="https://info.replay.gp/<?php echo($col['avatar']); ?>" width="30" height="30"></center>
                    <?php } ?> 
                  </td>

                  <td>
                    <?php if($col['active_chaine_replay']){ ?>
                      <a title="Replay <?php echo($col['type_entreprise']); ?>" target="_blank" href="https://replay.gp/@<?php echo($col['username']); ?>">
                      <center><?php echo($col['username']); ?></center>
                      </a>
                    <?php } else { ?>
                      <center><?php echo($col['username']); ?></center>
                    <?php } ?> 
                  </td>

                  <td>
                    <a title="Liste des chaînes " target="_blank" href="index.php?q=<?php echo($col['sub_category_id']); ?>&nav=2&action=rechercher">
                      <?php
                        // Afficher les données de la table : langs (pays)
                        $cat = $db->query('SELECT * FROM langs WHERE lang_key="'.$col['sub_category_id'].'"');
                        while($result_cat=$cat->fetch()){
                      ?> 
                      <center><?php echo($result_cat['french']); ?></center>
                      <?php } ?>
                    </a>
                  </td>

                  <td>
                    <?php if($col['website']){ ?>
                      <a title="Site Web <?php echo($col['type_entreprise']); ?>" target="_blank" href="<?php echo($col['website']); ?>">
                        <center><img src="https://television.gp/images/icone/site-web.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>

                  <td> 
                    <?php if($col['facebook']){ ?>
                      <a title="Page Facebook <?php echo($col['type_entreprise']); ?>" target="_blank" href="<?php echo($col['facebook']); ?>">
                        <center><img src="https://television.gp/images/icone/facebook.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>

                  <td>
                    <?php if($col['twitter']){ ?>
                      <a title="Twitter <?php echo($col['type_entreprise']); ?>" target="_blank" href="<?php echo($col['twitter']); ?>">
                        <center><img src="https://television.gp/images/icone/twitter.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>

                  <td>
                    <?php if($col['dailymotion']){ ?>
                      <a title="Dailymotion <?php echo($col['type_entreprise']); ?>" target="_blank" href="<?php echo($col['dailymotion']); ?>">
                        <center><img src="https://television.gp/images/icone/dailymotion.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>


                  <td>
                    <?php if($col['youtube']){ ?>
                      <a title="Chaîne Youtube <?php echo($col['type_entreprise']); ?>" target="_blank" href="<?php echo($col['youtube']); ?>">
                        <center><img src="https://television.gp/images/icone/youtube.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>

                  <td>
                    <?php if($col['active_chaine_replay']){ ?>
                      <a title="Replay <?php echo($col['type_entreprise']); ?>" target="_blank" href="https://replay.gp/@<?php echo($col['username']); ?>">
                        <center><img src="https://television.gp/images/icone/replay-tv.png" width="30" height="30"></center>
                      </a>
                    <?php } ?> 
                  </td>

                  
                  <td class="ModifRight">
                    <a class="btn btn-warning btn-sm" title="modifier la fiche complète" href="editer.php?id=<?php echo($col['id']);?>&action=editer&nav=<?php echo($nav); ?>">
                        <i class="fas fa-edit"></i>
                    </a>

                    <?php if($col['active_chaine_replay'] == "1"){ ?>
                    <a class="btn btn-info btn-sm" target="_blank" title="Récupérer le logo tv sur youtube" href="https://info.replay.gp/admin/recupe-logo-youtube.php?id=<?php echo($col['id']); ?>">
                        <i class="icon fas fa-check"></i>
                    </a>
                    <?php } ?>

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
                <th>Logo</th>
                <th>Chaîne TV</th>
                <th>Pays</th>
                <th>Web</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Daily</th>
                <th>YouTube</th>
                <th>Replay</th>
                <th>Editer</th>
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
  td.ModifRight{
      display: inline-block;
      float: right;
      padding: 5px;
  }
</style>