<?php
// Arguments for the button.php template:
// article:object - the article to display
// tags:string[] - tags that are related to the article

if($args[0]) {
  $article = $args[0];
  $title = $article->title;
  $content = $article->content;
  $published_at = $article->publishedAt;
  $formatted_date = date("l M d, Y", strtotime($published_at));
  $image = $article->urlToImage;
  $author = $article->author;
  $source = $article->source->name;
  ?>
    <div class="card">
      <img class="card-image" src="<?php echo $image?>" alt="article"></img>
      <div class="card-content">
        <!-- date + tags -->
        <div class="date-and-tags">
          <div class="date">
            <?php echo $formatted_date ?>
          </div>
          <div>
            <?php get_template_part('partials/tag', null, array('crypto'))?>
          </div>
        </div> 

        <!-- title -->
        <div class="title"><?php echo $title?></div> 
        
        <!-- author + source -->
        <div class="author-and-source">
          <?php echo $author . ", " . $source ?>
        </div> 
        
        <!-- content -->
        <div class="content"><?php echo $content ?></div> 
        
        <!-- button -->
        <div class="button-container">
          <?php get_template_part('partials/button', null, array('navigate to dispatch', true, true))?>
        </div> 
      </div>
    </div>
  <?php
}
?>