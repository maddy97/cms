<?php require VIEW_ROOT . '/templates/header.php'?>
  <?php if(!$page): ?>
  	<p>No page found sorry</p>
  <?php else: ?>
  	<h2><?php echo e($page['title']); ?></h2>
  	<?php echo e($page['body']);?>

<p class="faded">
Created on <?php echo $page['created'] ?>
<?php if($page['updated']):?>
	Last Updated<?php echo $page['updated'] ?>
	<?php endif;?>
</p>


  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'?>