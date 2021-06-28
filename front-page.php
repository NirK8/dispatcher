<?php get_header();?>
<?php
  $json_string = file_get_contents(get_template_directory_uri()."/mock/everything/bitcoin.json");
  $parsed_json = json_decode($json_string);
  $articles = $parsed_json->articles;
  // get_template_part('partials/tag', null, array('crypto'));
  // get_template_part('partials/button', null, array('navigate to dispatch', 'inline-button', true));
  // get_template_part('partials/icon', null, array('arrow.png'));
  // get_template_part('partials/select', null, array(array('one', 'two', 'three'), 'Sort By'));
  // get_template_part('partials/progress-bar', null, array('Crypto', 70));
  ?>
<div class="page-content">
  <div class="cards-container">
    <?php 
    array_map('print_article_card', $articles)
    // get_template_part('partials/card', null, array($articles[0]));
    ?>
  </div>
  <div class="widget"></div>
</div>
<?php get_footer(); ?>