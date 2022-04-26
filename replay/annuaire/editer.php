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
            $first_name = htmlspecialchars($_GET['first_name'],ENT_QUOTES);
            $last_name = htmlspecialchars($_GET['last_name'],ENT_QUOTES);
            $registered = htmlspecialchars($_GET['registered'],ENT_QUOTES);
            $cover = htmlspecialchars($_GET['cover'],ENT_QUOTES);
            $base_source = htmlspecialchars($_GET['base_source'],ENT_QUOTES);
            $youtube = htmlspecialchars($_GET['youtube'],ENT_QUOTES);
            $dailymotion = htmlspecialchars($_GET['dailymotion'],ENT_QUOTES);
            $facebook = htmlspecialchars($_GET['facebook'],ENT_QUOTES);
            $twitter = htmlspecialchars($_GET['twitter'],ENT_QUOTES);
            $instagram = htmlspecialchars($_GET['instagram'],ENT_QUOTES);
            $google = htmlspecialchars($_GET['google'],ENT_QUOTES);
            $gender = htmlspecialchars($_GET['gender'],ENT_QUOTES);
            $username = htmlspecialchars($_GET['username'],ENT_QUOTES);
            $avatar = htmlspecialchars($_GET['avatar'],ENT_QUOTES);
            $vimeo = htmlspecialchars($_GET['vimeo'],ENT_QUOTES);
            $website = htmlspecialchars($_GET['website'],ENT_QUOTES);
            $linkedin = htmlspecialchars($_GET['linkedin'],ENT_QUOTES);
            $printerest = htmlspecialchars($_GET['printerest'],ENT_QUOTES);
            $type_entreprise = htmlspecialchars($_GET['type_entreprise'],ENT_QUOTES);
            $about = htmlspecialchars($_GET['about'],ENT_QUOTES);
            $category_id = htmlspecialchars($_GET['category_id'],ENT_QUOTES);
            $sub_category_id = htmlspecialchars($_GET['sub_category_id'],ENT_QUOTES);
            $email = htmlspecialchars($_GET['email'],ENT_QUOTES);
            $password = htmlspecialchars($_GET['password'],ENT_QUOTES);
            $active_chaine_replay = htmlspecialchars($_GET['active_chaine_replay'],ENT_QUOTES);
            $langue_video = htmlspecialchars($_GET['langue_video'],ENT_QUOTES);
            $source_domain = htmlspecialchars($_GET['source_domain'],ENT_QUOTES);
            $published = htmlspecialchars($_GET['published'],ENT_QUOTES);
            $news_number = htmlspecialchars($_GET['news_number'],ENT_QUOTES);
            $auto_update_period = htmlspecialchars($_GET['auto_update_period'],ENT_QUOTES);
            $position = htmlspecialchars($_GET['position'],ENT_QUOTES);
            $etoile = htmlspecialchars($_GET['etoile'],ENT_QUOTES);
            $note = htmlspecialchars($_GET['note'],ENT_QUOTES);
                        
            // Enregistrement des données dans la db (modifier)
            $db->query("UPDATE $db_table SET 
            active_chaine_replay='$active_chaine_replay',
            langue_video='$langue_video',
            source_domain='$source_domain',
            published='$published',
            news_number='$news_number',
            auto_update_period='$auto_update_period',
            position='$position',
            etoile='$etoile',
            note='$note',
            password='$password',
            email='$email',
            category_id='$category_id',
            sub_category_id='$sub_category_id',
            about='$about',
            type_entreprise='$type_entreprise',
            vimeo='$vimeo',
            website='$website',
            linkedin='$linkedin',
            printerest='$printerest',
            username='$username',
            avatar='$avatar',
            gender='$gender',
            base_source='$base_source',
            youtube='$youtube',
            dailymotion='$dailymotion',
            facebook='$facebook',
            twitter='$twitter',
            instagram='$instagram',
            google='$google',
            first_name='$first_name',
            last_name='$last_name',
            registered='$registered',
            cover='$cover',
            about='$about' 
            WHERE id='$id'");
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
            $first_name = htmlspecialchars($_GET['first_name'],ENT_QUOTES);
            $last_name = htmlspecialchars($_GET['last_name'],ENT_QUOTES);
            $registered = htmlspecialchars($_GET['registered'],ENT_QUOTES);
            $cover = htmlspecialchars($_GET['cover'],ENT_QUOTES);
            $base_source = htmlspecialchars($_GET['base_source'],ENT_QUOTES);
            $youtube = htmlspecialchars($_GET['youtube'],ENT_QUOTES);
            $dailymotion = htmlspecialchars($_GET['dailymotion'],ENT_QUOTES);
            $facebook = htmlspecialchars($_GET['facebook'],ENT_QUOTES);
            $twitter = htmlspecialchars($_GET['twitter'],ENT_QUOTES);
            $instagram = htmlspecialchars($_GET['instagram'],ENT_QUOTES);
            $google = htmlspecialchars($_GET['google'],ENT_QUOTES);
            $gender = htmlspecialchars($_GET['gender'],ENT_QUOTES);
            $username = htmlspecialchars($_GET['username'],ENT_QUOTES);
            $avatar = htmlspecialchars($_GET['avatar'],ENT_QUOTES);
            $vimeo = htmlspecialchars($_GET['vimeo'],ENT_QUOTES);
            $website = htmlspecialchars($_GET['website'],ENT_QUOTES);
            $linkedin = htmlspecialchars($_GET['linkedin'],ENT_QUOTES);
            $type_entreprise = htmlspecialchars($_GET['type_entreprise'],ENT_QUOTES);
            $printerest = htmlspecialchars($_GET['printerest'],ENT_QUOTES);
            $about = htmlspecialchars($_GET['about'],ENT_QUOTES);
            $category_id = htmlspecialchars($_GET['category_id'],ENT_QUOTES);
            $sub_category_id = htmlspecialchars($_GET['sub_category_id'],ENT_QUOTES);
            $email = htmlspecialchars($_GET['email'],ENT_QUOTES);
            $password = htmlspecialchars($_GET['password'],ENT_QUOTES);
            $active_chaine_replay = htmlspecialchars($_GET['active_chaine_replay'],ENT_QUOTES);
            $langue_video = htmlspecialchars($_GET['langue_video'],ENT_QUOTES);
            $source_domain = htmlspecialchars($_GET['source_domain'],ENT_QUOTES);
            $published = htmlspecialchars($_GET['published'],ENT_QUOTES);
            $news_number = htmlspecialchars($_GET['news_number'],ENT_QUOTES);
            $auto_update_period = htmlspecialchars($_GET['auto_update_period'],ENT_QUOTES);
            $position = htmlspecialchars($_GET['position'],ENT_QUOTES);
            $etoile = htmlspecialchars($_GET['etoile'],ENT_QUOTES);
            $note = htmlspecialchars($_GET['note'],ENT_QUOTES);

            
            // Enregistrement des données dans la db (ajouter)
            $db->query("INSERT INTO $db_table SET etoile='$etoile',note='$note',news_number='$news_number',auto_update_period='$auto_update_period',position='$position',source_domain='$source_domain',published='$published',active_chaine_replay='$active_chaine_replay',langue_video='$langue_video',password='$password',email='$email',category_id='$category_id',sub_category_id='$sub_category_id',type_entreprise='$type_entreprise',vimeo='$vimeo',website='$website',linkedin='$linkedin',printerest='$printerest',username='$username',avatar='$avatar',gender='$gender',base_source='$base_source',youtube='$youtube',dailymotion='$dailymotion',facebook='$facebook',twitter='$twitter',instagram='$instagram',google='$google',first_name='$first_name', last_name='$last_name', registered='$registered', cover='$cover', about='$about'");

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
                                            <h3 class="card-title">Identification fiche n°<?php echo($donnees['id']); ?></h3>
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
                                            <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                                            <?php if($_GET['action'] == "editer"){ ?>
                                                <input type="hidden" name="id" value="<?php echo($donnees['id']); ?>">
                                            <?php } ?> 
                                            <input type="hidden" name="nav" value="<?php echo($nav); ?>">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" class="form-control" name="username"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['username']); ?><?php }?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Entreprise</label>
                                                <input type="text" class="form-control" name="type_entreprise" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['type_entreprise']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Date (AAAA/MM)</label>
                                                <input type="text" class="form-control" name="registered" placeholder="2022/12"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['registered']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Avatar</label>
                                                <input type="text" class="form-control" name="avatar"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['avatar']); ?><?php } else { ?>upload/photos/2020/07/GfjP7iNgGgCjfC1ID7kF_14_aa9f9f6db7c8e793bc76461f54e6b4b9_image.png<?php } ?>">
                                            </div>             
                                            <div class="form-group">
                                                <label for="">Cover</label>
                                                <input type="text" class="form-control" name="cover"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['cover']); ?><?php } else { ?>upload/photos/d-cover.jpg<?php } ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Langue Officiel de la vidéo</label>
                                             
                                                    <select name="langue_video" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['langue_video']){ ?>
                                                            <option selected value="<?php echo($donnees['langue_video']); ?>"><?php echo($donnees['langue_video']); ?></option>
                                                        <?php } ?>
                                                        <option value="English">English</option>
                                                        <option value="French">French</option>
                                                        <option value="Spanish">Spanish</option>
                                                        <option value="German">German</option>
                                                        <option value="Arabic">Arabic</option>
                                                        <option value="Dutch">Dutch</option>
                                                        <option value="Russian">Russian</option>
                                                        <option value="Turkish">Turkish</option>
                                                        <option value="Autre">Autre</option>
                                                    </select>
                                            </div>

                                            <div>
                                                <label for="">Civilité (Genre)</label>
                                                <select name="gender" aria-controls="example1" class="form-control input-sm" style="margin-top: 0px; margin-bottom: 0px; width: 150px;">
                                                    <?php if($donnees['gender']){ ?>
                                                        <option selected value="<?php echo($donnees['gender']); ?>"><?php echo($donnees['gender']); ?></option>
                                                    <?php } ?>
                                                    <option value="male">male</option>
                                                    <option value="femelle">femelle</option>
                                                    <option value="entreprise">entreprise</option>
                                                    <option value="Autre">autre</option>
                                                    <option value="non spécifié">non spécifié</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nom du Responsable (Lastname)</label>
                                                <input type="text" class="form-control" name="last_name" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['last_name']); ?><?php } ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Prénom (Firstname)</label>
                                                <input type="text" class="form-control" name="first_name"
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['first_name']); ?><?php }?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" name="email" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['email']); ?><?php } else { ?>guyane1ere@replay.gp<?php } ?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" class="form-control" name="password" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['password']); ?><?php } else { ?>5485e5c589d4e7e2d34467640714b0d5056e7c66<?php } ?>">
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
                                <!-- /.card -->
                                <!-- /.card-body -->
                                
                                <div class="card card-warning">
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

                                            <!-- Selecteur liste des Continents  -->
                                            <div class="form-group">
                                                <label for="">Continent (category_id)</label>
                                                    <select name="category_id" aria-controls="example1" class="form-control input-sm">
                                                      
                                                        <?php
                                                            // Afficher les données de la table : langs (contient)
                                                            $cat = $db->query('SELECT * FROM langs WHERE type="category"');
                                                            while($result_cat=$cat->fetch()){
                                                        ?> 
                                                            <option 
                                                            <?php if($donnees['category_id'] == $result_cat['id']){ ?>selected<?php } ?>
                                                            value="<?php echo($result_cat['id']); ?>"><?php echo($result_cat['french']); ?> (<?php echo($result_cat['id']); ?>)</option>
                                                        <?php } ?>

                                                    </select>
                                            </div>
                                            <!-- fin Selecteur  -->
                                            
                                            <!-- Selecteur Liste des Pays  -->
                                            <?php if($_GET['action'] == "editer"){ ?>
                                            <div class="form-group">
                                                <label for="">Pays (sub_category_id)</label>
                                                    <select name="sub_category_id" aria-controls="example1" class="form-control input-sm">
                                                        <?php
                                                            // Afficher les données de la table : langs (pays)
                                                            $cat = $db->query('SELECT * FROM langs WHERE type="'.$donnees['category_id'].'"');
                                                            while($result_cat=$cat->fetch()){
                                                        ?> 
                                                            <option 
                                                            <?php if($donnees['sub_category_id'] == $result_cat['id']){ ?>selected<?php } ?>
                                                            value="<?php echo($result_cat['id']); ?>"><?php echo($result_cat['french']); ?> (<?php echo($result_cat['id']); ?>)</option>
                                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <?php } ?>
                                            <!-- fin Selecteur  -->

                                            <div class="form-group">
                                                <label for="">Synchro Type source video Site</label>
                                             
                                                    <select name="source_domain" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['source_domain']){ ?>
                                                            <option selected value="<?php echo($donnees['source_domain']); ?>"><?php echo($donnees['source_domain']); ?></option>
                                                        <?php } ?>
                                                        <option value="youtube">YouTube</option>
                                                        <option value="vimeo">Vimeo</option>
                                                        <option value="dailymotion">DailyMotion</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">État des vidéos *</label>
                                             
                                                    <select name="published" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['published']){ ?>
                                                            <option selected value="<?php echo($donnees['published']); ?>"><?php echo($donnees['published']); ?></option>
                                                        <?php } ?>
                                                        <option value="1">Publié</option>
                                                        <option value="0">Brouillon (réviser avant de publier)</option>
                                                    </select>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="">Nb de Videos à synchroniser</label>
                                             
                                                    <select name="news_number" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['news_number']){ ?>
                                                            <option selected value="<?php echo($donnees['news_number']); ?>"><?php echo($donnees['news_number']); ?></option>
                                                        <?php } ?>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Auto Update Period</label>
                                             
                                                    <select name="auto_update_period" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['auto_update_period']){ ?>
                                                            <option selected value="<?php echo($donnees['auto_update_period']); ?>"><?php echo($donnees['auto_update_period']); ?></option>
                                                        <?php } ?>
                                                        <option value="1800" >30 Minutes (1800)</option>
                                                        <option value="2700" >45 Minutes (2700)</option>
                                                        <option value="3600" >1 Heure (3600)</option>
                                                        <option value="7200" >2 Heures (7200)</option>
                                                        <option value="10800" >3 Heures (10800)</option>
                                                        <option value="14400" >4 Heures (14400)</option>
                                                        <option value="18000" >5 Heures (18000)</option>
                                                        <option value="21600" >6 Heures (21600)</option>
                                                        <option value="25200" >7 Heures (25200)</option>
                                                        <option value="28800" >8 Heures (28800)</option>
                                                        <option value="32400" >9 Heures (32400)</option>
                                                        <option value="36000" >10 Heures (36000)</option>
                                                        <option value="39600" >11 Heures (39600)</option>
                                                        <option value="43200" >12 Heures (43200)</option>
                                                        <option value="46800" >13 Heures (46800)</option>
                                                        <option value="50400" >14 Heures (50400)</option>
                                                        <option value="54000" >15 Heures (54000)</option>
                                                        <option value="57600" >16 Heures (57600)</option>
                                                        <option value="61200" >17 Heures (61200)</option>
                                                        <option value="64800" >18 Heures (64800)</option>
                                                        <option value="68400" >19 Heures (68400)</option>
                                                        <option value="72000" >20 Heures (72000)</option>
                                                        <option value="75600" >21 Heures (75600)</option>
                                                        <option value="79200" >22 Heures (79200)</option>
                                                        <option value="82800" >23 Heures (82800)</option>
                                                        <option value="86400" >1 Jour (86400)</option>
                                                        <option value="172800" >2 Jours (172800)</option>
                                                        <option value="259200" >3 Jours (259200)</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Position dans l'annuaire</label>
                                                <input type="text" class="form-control" name="position" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['position']); ?><?php } ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Etoile</label>
                                                    <select name="etoile" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['etoile']){ ?>
                                                            <option selected value="<?php echo($donnees['etoile']); ?>"><?php echo($donnees['etoile']); ?></option>
                                                        <?php } ?>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Note admin</label>
                                                <textarea type="text" style="margin-top: 0px; margin-bottom: 0px; height: 115px;" class="form-control" name="note"><?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['note']); ?><?php } ?></textarea>
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
                                            <h3 class="card-title">Url Source</h3>
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
                                            
                                            <div class="form-group">
                                                <label for="">Activer la chaîne Replay ?</label>
                                                    <select name="active_chaine_replay" aria-controls="example1" class="form-control input-sm">
                                                
                                                        <option 
                                                        <?php if($donnees['active_chaine_replay'] == "1"){ ?>selected<?php } ?>
                                                        value="1">Oui</option>

                                                        <option 
                                                        <?php if($donnees['active_chaine_replay'] == "0"){ ?>selected<?php } ?>
                                                        value="0">Non</option>
                                                    </select>
                                            </div>



                                            <div class="form-group">
                                                    <label for="">Television</label>
                                                    <select name="base_source" aria-controls="example1" class="form-control input-sm">
                                                        <?php if($donnees['base_source']){ ?>
                                                            <option selected value="<?php echo($donnees['base_source']); ?>"><?php echo($donnees['base_source']); ?></option>
                                                        <?php } ?>
                                                        <option value="replay">replay</option>
                                                        <option value="finance">finance</option>
                                                        <option value="education">education</option>
                                                        <option value="formation">formation</option>
                                                        <option value="automobile">automobile</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Youtube</label>
                                                <input type="text" class="form-control" name="youtube" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['youtube']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dailymotion</label>
                                                <input type="text" class="form-control" name="dailymotion" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['dailymotion']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Facebook</label>
                                                <input type="text" class="form-control" name="facebook" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['facebook']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Twitter</label>
                                                <input type="text" class="form-control" name="twitter" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['twitter']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Instagram</label>
                                                <input type="text" class="form-control" name="instagram" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['instagram']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Website</label>
                                                <input type="text" class="form-control" name="website" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['website']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Google</label>
                                                <input type="text" class="form-control" name="google" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['google']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Linkedin</label>
                                                <input type="text" class="form-control" name="linkedin" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['linkedin']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Printerest</label>
                                                <input type="text" class="form-control" name="printerest" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['printerest']); ?><?php } ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Vimeo</label>
                                                <input type="text" class="form-control" name="vimeo" 
                                                value="<?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['vimeo']); ?><?php } ?>">
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
                                </div>
                                <!-- /.card-body -->
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <?php if($_GET['action'] == "editer"){ ?>
                                            <h3 class="card-title">Présentation</h3>
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
                                                <label for="">A Propos</label>
                                                <div class="card-body">
                                                    <textarea id="summernote" name="rapport" style="height: 300px;">
                                                        <?php if($_GET['action'] == "editer"){ ?><?php echo($donnees['rapport']); ?><?php } ?>
                                                    </textarea> 
                                                </div>                          
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
                                </form> 
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