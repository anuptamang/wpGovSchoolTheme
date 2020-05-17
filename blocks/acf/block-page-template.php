<?php /*
Block title: Block page template
Description: Block page template block.
Keywords: Block page template
Other Avaliable options: Icon, Category.
*/ ?>

<?php if( $block_template = get_field('block_template') ) : ?>
<?php echo $block_template ?>
<?php endif ?>