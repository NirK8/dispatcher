<?php get_header();?>
<?php
  get_template_part('partials/tag', null, array('crypto'));
  get_template_part('partials/button', null, array('navigate to dispatch', 'inline-button', true));
  get_template_part('partials/icon', null, array('arrow.png'));
  get_template_part('partials/select', null, array(array('one', 'two', 'three')));
  get_template_part('partials/progress-bar', null, array('Crypto', 70));
?>
<?php
?>
<?php get_footer(); ?>