<?php $title = 'Liste des Clients'; ?>

<?php ob_start(); ?>


<?php

foreach ( $listClients as $listClient ) {
    ?><p>Id client : <?php echo $listClient['id_client']?></p><?php
    ?><p>Nom client : <?php echo $listClient['nom_client']?></p><?php
    ?><p>Pseudo client : <?php echo $listClient['pseudo_client']?></p><?php
}
?>
<?php $content = ob_get_clean(); ?>



<?php require('template.php'); ?>

