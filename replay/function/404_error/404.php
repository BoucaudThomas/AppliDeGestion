<?php

$lien = ($_POST['lien']);
//var_dump($lien);

  if (!filter_var($lien) === false) {
      echo 'Nous avons trouver votre video !'."<br>"."";?>
      <a target="_blank" href="<?php echo($lien); ?>"><?php echo($lien); ?></a>
    <?php } else {?>
        
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> 404</font>
                    </font>
                </h2>
                <div class="error-content">
                    <h3>
                        <i class="fas fa-exclamation-triangle text-warning"></i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Oups!</font>
                            <font style="vertical-align: inherit;">Video non trouvée.</font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nous n'avons pas pu trouver la video que vous cherchiez. <br> <a target="_blank" href="<?php echo($lien); ?>"><?php echo($lien); ?></a> </font> 
                        </font>
                    </p>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>

    <?php } ?>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>