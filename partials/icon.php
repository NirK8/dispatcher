<?php 
// arguments:
// path:string - path to the icon file
// id:string - id to give to the icon
$icon_path = $args[0];
$icon_id = $args[1] ?: null;
?>

<img id="<?php echo $icon_id ?>" src="<?php echo get_template_directory_uri().'/icons/'.$icon_path ?>" class="icon"/>