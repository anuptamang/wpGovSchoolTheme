<?php /*
Block title: Team
Description: Team block.
Keywords: Team
Other Avaliable options: Icon, Category.
*/ ?>

<!-- <h1>team</h1>
<?php while( have_rows('team') ) : the_row() ?>
	<?php if( $name = get_sub_field('name') ) : ?>
		<h2><?php echo $name ?></h2>
  <?php endif ?>
  <?php if( $role = get_sub_field('role') ) : ?>
		<h2><?php echo $role ?></h2>
  <?php endif ?>
  <?php if( $description = get_sub_field('description') ) : ?>
		<h2><?php echo $description ?></h2>
	<?php endif ?>
<?php endwhile ?> -->