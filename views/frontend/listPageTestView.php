<?php $title = 'Liste Page test'; ?>

<?php ob_start(); ?>

<?php
if ( !empty($listposts) ) {
    foreach ( $listposts as $post )
	{
	?>
	    <p>
	    	<strong>
    	    	<a href="index.php?action=affichedetailpost&id=<?=$post['id']?>">
    	    		<?=$post['title']?>
    	    	</a>
	    	</strong>
	    </p>
	    <p><?=$post['content']?></p>
		<?php
	}
} else {
	?>
	<p>Aucun enregistrement trouvé</p>
	<?php
}
?>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
