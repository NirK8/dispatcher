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
  $url = $article->url;
  ?>
    <div class="card">
      <div class="image-container">
        <img class="card-image" src="<?php echo $image?>" alt="article"></img>
      </div>
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
        <div class="title"><?php echo cut_text($title, 120)?></div> 
        
        <!-- author + source -->
        <div class="author-and-source">
          <?php echo $author . ", " . $source ?>
        </div> 
        
        <!-- content -->
        <div class="content"><?php echo cut_text($content, 155) ?></div> 
        
        <!-- button -->
        <div class="button-container">
          <?php get_template_part('partials/button', null, array('navigate to dispatch', $url, true, true))?>
        </div> 
      </div>
    </div>
  <?php
}
?>