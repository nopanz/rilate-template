<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Social States
 * @since Social States Theme v1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php wp_title('&laquo;', true, 'right');?> <?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
  </head>
  <body class="<?php body_class();?>" >
    <div class="container">
       <div class="landing-page">
        <div class="header">
         <div class="logo-container">
            <img src="<?php bloginfo('template_url'); ?>/assets/logo.jpg" alt="Socail State Logo">
         </div>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-4">
              <div class="profile-detail">
                <h1 class="title">James Power</h2>
                <h4 class="email">james@socialstate.com.au</h4>
                <ul>
                  <li>Cantina, St Kilda, Vic</li>
                  <li>El Grotto, Scarborough, WA</li>
                  <li>Jimmy's Den, Northbridge, WA</li>
                  <li>Kay Street Entertainment, Traralgon, Vic</li>
                  <li>Live At The Orchad, Peth, WA</li>
                  <li>Prince Bandroom, St Kilda, Vic</li>
                  <li>Prince Public Bar, St Kilda, Vic</li>
                  <li>The Wool Exchange, Geelong, Vic</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="profile-detail">
                <h1 class="title">Jesse Barbera</h1>
                <h4 class="email">jesse@socialstate.com.au</h4>
                <ul>
                  <li>Black Bear Lodge, Brisbane, QlD</li>
                  <li>Max Watts, Brisbane, QLD</li>
                  <li>The Brightside Outdoor Stage, Brisbane, QLD</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="profile-detail">
                <h1 class="title">Cael Johnston</h1>
                <h4 class="email">cael@social.com.au</h4>
                <ul>
                  <li>The Brightside, Brisbane, QLD</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
       </div>
    </div>
  </body>
  <!--  Scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/bootstrap.min.js"></script>

</html>