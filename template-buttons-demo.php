<?php
/**
 * Template Name: Bulma Buttons Demo
 * Template Post Type: page
 * Description: Demo page showing all Bulma button styles integrated with WordPress
 */

get_header();
?>

<div class="container">
    <div class="content">
        <header class="page-header">
            <h1 class="title is-1"><?php the_title(); ?></h1>
            <p class="subtitle">Bulma Button Styles Integration with WordPress</p>
        </header>

        <div class="section">
            <h2 class="title is-2">Primary Buttons</h2>
            <div class="buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Default Primary</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link" style="background-color:#00d1b2;border-color:#00d1b2;">Custom Primary</a>
                </div>
                <div class="wp-block-button is-style-outline">
                    <a class="wp-block-button__link">Outline Primary</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="title is-2">Color Variations</h2>
            <div class="buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-success-background-color">Success</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-error-background-color">Danger</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-warning-background-color">Warning</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-info-background-color">Info</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-light-background-color">Light</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-dark-background-color">Dark</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="title is-2">Size Variations</h2>
            <div class="buttons">
                <div class="wp-block-button is-style-small">
                    <a class="wp-block-button__link">Small Button</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Normal Button</a>
                </div>
                <div class="wp-block-button is-style-large">
                    <a class="wp-block-button__link">Large Button</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="title is-2">Special Styles</h2>
            <div class="buttons">
                <div class="wp-block-button is-style-full-width">
                    <a class="wp-block-button__link">Full Width Button</a>
                </div>
                <div class="wp-block-button is-style-rounded">
                    <a class="wp-block-button__link">Rounded Button</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link disabled">Disabled Button</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="title is-2">Button Groups</h2>
            <div class="wp-block-buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">First</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Second</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Third</a>
                </div>
            </div>

            <div class="wp-block-buttons is-vertical" style="margin-top: 2rem;">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Vertical First</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Vertical Second</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Vertical Third</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="title is-2">Real WordPress Button Blocks</h2>
            <p>Below are examples using actual WordPress button blocks with Bulma styling:</p>

            <!-- This would be replaced with actual block content in editor -->
            <div class="wp-block-button">
                <a class="wp-block-button__link">Editor Button</a>
            </div>

            <div class="wp-block-button is-style-outline">
                <a class="wp-block-button__link">Outline Editor Button</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
