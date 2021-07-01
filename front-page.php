<?php get_header();?>
<?php
  $json_string = file_get_contents(get_template_directory_uri()."/mock/everything/bitcoin.json");
  $parsed_json = json_decode($json_string);
  $articles = $parsed_json->articles;
  ?>
<div class="page-content-wrapper">

  <div class="filters">
    <?php 
    get_template_part('partials/select', null, array(array(array('all', null), array('Germany', 'gr'), array('Israel', 'il'), array('USA', 'us')), true, 'Country'));
    get_template_part('partials/select', null, array(array(array('all', null), array('business', 'business'), array('entertainment', 'entertainment'), array('general', 'general')), true, 'Category' ));
    get_template_part('partials/select', null, array(array(array('all', null), array('techcrunch', 'techcrunch.com'), array('thenextweb', 'thenextweb.com')), true, 'Source'));
    get_template_part('partials/select', null, array(array(array('10', 10), array('20', 20), array('50', 50), array('100', 100)), true, 'Results per page'));    
    ?>
  </div>

  <div class="page-content">
  <div class="cards-container">
    <?php 
    array_map('print_article_card', $articles)
    ?>
  </div>
  <div class="widgets-column">
    <?php get_template_part('partials/widget', null, array()) ?>
  </div>

</div>
<div>
<?php get_footer(); ?>