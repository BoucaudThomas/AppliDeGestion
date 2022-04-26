<!-- Début Menu de gauche -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo($url_domaine); ?>index3.html" class="brand-link">
      <img src="<?php echo($url_domaine); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Console ADMIN</span>
    </a>

    <!-- Sidebar gauche -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo($url_domaine); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group">
          <form action="index.php" methode="GET">
            <input type="hidden" name="nav" value="<?php echo($_GET['nav']); ?>">
            <input class="form-control form-control-sidebar" size="15" type="text" name="q" placeholder="Recherche" aria-label="Search">
            <button type="submit" class="btn btn-sidebar" name="action" value="rechercher"><i class="fas fa-search fa-fw"></i></button>
          </form>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Début Menu MAXImini -->
          <?php if($_GET['nav'] == "1"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "1"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                MAXImini
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/maximini/requetes/index.php?nav=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Requêtes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/maximini/annonceurs/index.php?nav=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annonceurs</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin Menu MAXImini -->

          <!-- Début Menu Replay -->
          <?php if($_GET['nav'] == "2"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "2"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Replay.gp
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/videos/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vidéos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/sources/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sources</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/annuaire/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annuaire TV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/tags/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tags Categorie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/tags-sous/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sous Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/annonceurs/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annonceurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/meta/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Méta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/langue/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Langues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/replay/sitemap/index.php?nav=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sitemap</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://info.replay.gp/admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SynchroReplay</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin Menu Replay -->

          <!-- Début Menu Info.gp-->
            <?php if($_GET['nav'] == "6"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "6"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Info.gp
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/infogp/posts/index.php?nav=7" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posts Social</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://info.replay.gp/synchoreplay-infogp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import info.replay</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin Info.gp -->
          
          <!-- Début Menu Dev Expert-->
          <?php if($_GET['nav'] == "3"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "3"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DevExpert
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/devexpert/rapport/index.php?nav=3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rapport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/devexpert/hebergement/index.php?nav=3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hébergement</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://crm.developpeurexpert.com/admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compta</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://developpeurexpert.com/wp-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Site</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin Dev Expert -->
  
          <!-- Début Menu Extension-->
          <?php if($_GET['nav'] == "4"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "4"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Extension.gp
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/extension/clients/index.php?nav=4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/extension/domaines/index.php?nav=4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des domaines</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://extension.gp/wp-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Site</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin Extension -->

          <!-- Début Menu PageInfo-->
          <?php if($_GET['nav'] == "5"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "5"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Page Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/pageweb/index.php?nav=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Web</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/news/index.php?nav=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/article/index.php?nav=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/siteweb/index.php?nav=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Config Générale</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin PageInfo -->

          <!-- Début Menu MégaBase-->
          <?php if($_GET['nav'] == "6"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "6"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Méga Base
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/particulier/index.php?nav=6" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Particulier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/pageinfo/entreprise/index.php?nav=6" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entreprise</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin MégaBase -->

          
          <!-- Début Menu MégaBase-->
          <?php if($_GET['nav'] == "7"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "6"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo($url_domaine); ?>pages/administrateur/utilisateur/index.php?nav=7" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Utilisateur</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin MégaBase -->

          <!-- Début Menu Services-->
          <?php if($_GET['nav'] == "7"){ ?>
          <li class="nav-item menu-open">
          <?php } else { ?>
          <li class="nav-item">
          <?php } ?>  
            <a href="#" class="nav-link <?php if($_GET['nav'] == "7"){ ?>active<?php } ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a target="_blank" href="https://analytics.google.com/analytics/web/?utm_source=marketingplatform.google.com&utm_medium=et&utm_campaign=marketingplatform.google.com%2Fabout%2Fanalytics%2F#/report/visitors-overview/a278402w239837196p223990206/_u.date00=20211223&_u.date01=20211230" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analytics</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://search.google.com/search-console?hl=fr&resource_id=sc-domain:replay.gp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Console</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://www.google.com/adsense/new/u/0/pub-0097778991177298/home?sourceid=aso&noaccount=false&marketing=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adsense</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="https://app.neilpatel.com/fr/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neilpatel</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Fin MégaBase -->
          
          
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar gauche -->
  </aside>
<!-- Fin Menu de gauche -->
  

  