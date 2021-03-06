<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

	</head>

  <body <?php body_class(); ?>>
    <section class="group-page">
      <div class="container-fluid blog__topbar">
        <a href="../" class="back-home">Voltar para o site</a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php
              // query for the page
              $page_query = new WP_Query( 'pagename=grupos' );
              // "loop" through query (even though it's just one page) 
              while ( $page_query->have_posts() ) : $page_query->the_post();
                  the_content();
              endwhile;
              // reset post data (important!)
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
