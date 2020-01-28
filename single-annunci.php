<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <div class="container">
        <div class="row">
            <div class="col-8">
				<p class="title-ann mb-5">Title</p>
				<div id="slideshow">
					<img class="mb-5" src="<?php echo get_field("foto1")["url"];?>">
					<img class="mb-5" src="<?php echo get_field("foto2")["url"];?>">
					<img class="mb-5" src="<?php echo get_field("foto3")["url"];?>">
				</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="menusecondario">
                    <a href="#Description">Description</a>
                    <a href="#">Pages</a>
                    <a href="#">Location</a>
                    <a href="#">Ratings</a></div>
                    <a id="Description"></a>
                    <h2>Description</h2>
            </div>
            <div class="col-4">
                <div class="card">
                    <p class="prezzo">From 85€ 95€</p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
