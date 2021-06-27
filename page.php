<?php get_header(); ?>
<!-- 
  <main class="container page section">
    < ?php while(have_posts() ): the_post(); ?>
    <h1 class="text-center text-primary">< ?php the_title(); ?></h1>

    <div class="text-center">
      < ?php the_content(); ?>
    </div>
    < ?php endwhile; ?>
  </main> -->

<?php 
  $id = $_GET['id'];
  $pokemon = json_decode(wp_remote_retrieve_body(wp_remote_get('https://pokeapi.co/api/v2/pokemon/' . $id)));
?>
  <div class="poke-container">
    <!-- main info -->
    <div class="w200px relative flex-column">
      <!-- ID -->
      <div class="poke-id">#<?php echo $pokemon->id?></div>
      <!-- Image -->
      <div class="poke-img-container">
        <img class="poke-img" src="<?php echo $pokemon->sprites->front_default ?>"  />
      </div>
      <!-- <img class="poke-img" src="<?php echo $pokemon->sprites->front_default ?>"  /> -->
      <!-- Name -->
      <div class="poke-name"><?php echo ucfirst($pokemon->name) ?></div>
      <!-- Types -->
      <div class="types-container">
        <?php 
          array_map('print_pokemon_type', $pokemon->types);
        ?>
      </div>
      
    </div>

    <!-- border -->
    <div class="side-border"></div>

    <!-- more info -->
    <div class="flex-column justify-evenly">
      <div>
        <?php 
        // Description
        print_pokemon_description($pokemon->species->url);
        ?>
      </div>
      <div>
        <?php 
        // Stats
        print_pokemon_stats($pokemon->stats);
        ?>
      </div>
    </div>

  </div>
  <?php get_footer(); ?>