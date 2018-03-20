<?php $title = 'Liste des Posts'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        Liste des posts
    </h3>    
</div>

<div class="content">
	<?php
	if ( !empty($aListposts) ) {
		while ($comment = $comments->fetch())
		{
		?>
		    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
		    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
			<?php
		}
	} else {
		?>
		<p>Aucun enregistrement trouvé</p>
		<?php
	}
	?>
</content>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
