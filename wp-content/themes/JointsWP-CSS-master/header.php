<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png"
              rel="apple-touch-icon"/>
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <?php wp_head(); ?>

    <style>
        #map {height: 100%;width: auto;  }
    </style>
</head>