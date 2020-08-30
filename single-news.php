<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="/img/favicon.ico" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>練習</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/style.css" media="all" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

 <?php get_header(); ?>
 <?php if(have_posts()): the_post(); ?> 
<div class="eyecatch">
    <div class="single-eyecatch page-eyecatch">
        <img src="<?php echo get_template_directory_uri(); ?>/img/news-eyecatch.jpg" alt="no-img">
        <div class="page-title">
            <h1 class="page-title__h1">NEWS</h1>
            <p class=></p>
        </div>
    </div>
    <div class="single-container container">
        <div class="single-header__contain">
            <div class="style__border">
                <h1 class="single-title">
                      <?php the_title(); ?>
                </h1>
                <div class="flex tags-date">
                    <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p> 
                </div>
            </div>
        </div>
        <div class="main-text">
             <?php the_content(); ?> 
        </div>
    </div>
</div>
 <?php endif; ?>
 <?php get_footer(); ?>

</body>

</html>