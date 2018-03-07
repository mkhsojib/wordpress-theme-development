<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

<header id="masthead">
    <h1><a href="<?php echo get_site_url(); ?>">PHP for WordPress</a></h1>
</header>

<div id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
        <?php the_date(); ?>



    <?php endwhile; else: ?>

        <?php _e("sorry! no post available", "phpforwp"); ?>

    <?php endif; ?>

</div>

</body>
</html>
