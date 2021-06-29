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
<div class="page-content-wrapper">
  <div class="filters">
    <?php 
    get_template_part('partials/select', null, array('Country', array(array('all', null), array('Germany', 'gr'), array('Israel', 'il'), array('USA', 'us'))));
    get_template_part('partials/select', null, array('Category', array(array('all', null), array('business', 'business'), array('entertainment', 'entertainment'), array('general', 'general'))));
    get_template_part('partials/select', null, array('Sources', array(array('all', null), array('techcrunch', 'techcrunch.com'), array('thenextweb', 'thenextweb.com'))));
    get_template_part('partials/select', null, array('Results per page', array(array('10', 10), array('20', 20), array('50', 50), array('100', 100))));
    ?>
  </div>
  <div class="page-content">
  <div class="cards-container">
    <?php 
    array_map('print_article_card', $articles)
    ?>
  </div>
  <div class="widget"></div>
</div>
<div>
<?php get_footer(); ?>