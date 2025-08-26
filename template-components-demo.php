<?php
/**
 * Template Name: Bulma Components Demo
 * Template Post Type: page
 * Description: Demo page showing all Gutenberg blocks with Bulma CSS styling
 */

get_header();
?>

<div class="container">
    <div class="content">
        <header class="page-header">
            <h1 class="title is-1"><?php the_title(); ?></h1>
            <p class="subtitle">Bulma CSS Integration with WordPress Gutenberg Blocks</p>
        </header>

        <!-- Container & Layout Blocks -->
        <section class="section">
            <h2 class="title is-2">Container & Layout Blocks</h2>

            <h3 class="title is-3">Group Block</h3>
            <div class="wp-block-group has-background" style="background-color:#f5f5f5;">
                <div class="wp-block-group__inner-container">
                    <h4>Group with Background</h4>
                    <p>This is a group block with background styling using Bulma's section concept.</p>
                </div>
            </div>

            <h3 class="title is-3">Columns Block</h3>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <h4>Column 1</h4>
                    <p>First column content with Bulma column styling.</p>
                </div>
                <div class="wp-block-column">
                    <h4>Column 2</h4>
                    <p>Second column content with proper spacing.</p>
                </div>
                <div class="wp-block-column">
                    <h4>Column 3</h4>
                    <p>Third column demonstrating responsive design.</p>
                </div>
            </div>

            <h3 class="title is-3">Cover Block</h3>
            <div class="wp-block-cover" style="background-color:#485fc7;min-height:200px;">
                <div class="wp-block-cover__inner-container">
                    <h4 style="color:white;">Hero Section</h4>
                    <p style="color:white;">Cover block styled as Bulma hero component.</p>
                </div>
            </div>
        </section>

        <!-- Typography Blocks -->
        <section class="section">
            <h2 class="title is-2">Typography Blocks</h2>

            <h3 class="title is-3">Heading Blocks</h3>
            <div class="wp-block-heading">
                <h1>Heading 1 - Bulma Title Style</h1>
                <h2>Heading 2 - Section Title</h2>
                <h3>Heading 3 - Subsection Title</h3>
                <h4>Heading 4 - Minor Heading</h4>
                <h5>Heading 5 - Small Heading</h5>
                <h6>Heading 6 - Tiny Heading</h6>
            </div>

            <h3 class="title is-3">Paragraph Block</h3>
            <div class="wp-block-paragraph">
                <p>This is a paragraph block styled with Bulma typography. It includes proper line height, spacing, and responsive design. The text flows nicely and maintains readability across all device sizes.</p>
            </div>

            <h3 class="title is-3">List Blocks</h3>
            <div class="wp-block-list">
                <ul>
                    <li>Unordered list item 1</li>
                    <li>Unordered list item 2</li>
                    <li>Unordered list item 3 with longer content to demonstrate text wrapping</li>
                </ul>
            </div>

            <div class="wp-block-list">
                <ol>
                    <li>Ordered list item 1</li>
                    <li>Ordered list item 2</li>
                    <li>Ordered list item 3</li>
                </ol>
            </div>

            <h3 class="title is-3">Quote Block</h3>
            <div class="wp-block-quote">
                <p>This is a quote block styled with Bulma's blockquote design. It features a left border and proper spacing for citations.</p>
                <cite class="wp-block-quote__citation">— Author Name, Source</cite>
            </div>

            <h3 class="title is-3">Pullquote Block</h3>
            <div class="wp-block-pullquote">
                <blockquote>
                    <p>Pullquote block with centered text and emphasis styling, inspired by Bulma's design principles.</p>
                    <cite>Citation Source</cite>
                </blockquote>
            </div>

            <h3 class="title is-3">Code Block</h3>
            <div class="wp-block-code">
                <code>&lt;div class="container"&gt;
    &lt;h1&gt;Hello World&lt;/h1&gt;
    &lt;p&gt;This is code block styling&lt;/p&gt;
&lt;/div&gt;</code>
            </div>

            <h3 class="title is-3">Preformatted Block</h3>
            <div class="wp-block-preformatted">
                <pre>Preformatted text block
with multiple lines
and preserved whitespace</pre>
            </div>
        </section>

        <!-- Media Blocks -->
        <section class="section">
            <h2 class="title is-2">Media Blocks</h2>

            <h3 class="title is-3">Image Block</h3>
            <div class="wp-block-image">
                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5JbWFnZSBQbGFjZWhvbGRlcjwvdGV4dD4KPC9zdmc+" alt="Placeholder Image" style="width:100%;height:auto;">
                <figcaption>Image caption with Bulma styling</figcaption>
            </div>

            <h3 class="title is-3">Gallery Block</h3>
            <div class="wp-block-gallery">
                <div class="blocks-gallery-grid" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="blocks-gallery-item">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5HYWxsZXJ5IDE8L3RleHQ+Cjwvc3ZnPg==" alt="Gallery Image 1">
                    </div>
                    <div class="blocks-gallery-item">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5HYWxsZXJ5IDI8L3RleHQ+Cjwvc3ZnPg==" alt="Gallery Image 2">
                    </div>
                    <div class="blocks-gallery-item">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5HYWxsZXJ5IDM8L3RleHQ+Cjwvc3ZnPg==" alt="Gallery Image 3">
                    </div>
                </div>
            </div>

            <h3 class="title is-3">Audio Block</h3>
            <div class="wp-block-audio">
                <audio controls style="width:100%;">
                    <source src="#" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>

            <h3 class="title is-3">Video Block</h3>
            <div class="wp-block-video">
                <video controls style="width:100%;height:auto;">
                    <source src="#" type="video/mp4">
                    Your browser does not support the video element.
                </video>
            </div>

            <h3 class="title is-3">File Block</h3>
            <div class="wp-block-file">
                <a href="#" class="wp-block-file__link">Document.pdf</a>
                <a href="#" class="wp-block-file__button">Download</a>
            </div>
        </section>

        <!-- Design Blocks -->
        <section class="section">
            <h2 class="title is-2">Design Blocks</h2>

            <h3 class="title is-3">Separator Block</h3>
            <div class="wp-block-separator"></div>
            <div class="wp-block-separator is-style-wide"></div>
            <div class="wp-block-separator is-style-dots"></div>

            <h3 class="title is-3">Spacer Block</h3>
            <p>Content before spacer</p>
            <div class="wp-block-spacer" style="height:50px;"></div>
            <p>Content after spacer</p>
        </section>

        <!-- Widget Blocks -->
        <section class="section">
            <h2 class="title is-2">Widget Blocks</h2>

            <h3 class="title is-3">Search Block</h3>
            <div class="wp-block-search">
                <input type="search" class="wp-block-search__input" placeholder="Search...">
                <button type="submit" class="wp-block-search__button">Search</button>
            </div>

            <h3 class="title is-3">Latest Posts Block</h3>
            <div class="wp-block-latest-posts">
                <li>
                    <a href="#">Recent Post Title 1</a>
                    <div class="wp-block-latest-posts__post-date">January 1, 2024</div>
                </li>
                <li>
                    <a href="#">Recent Post Title 2</a>
                    <div class="wp-block-latest-posts__post-date">December 15, 2023</div>
                </li>
                <li>
                    <a href="#">Recent Post Title 3</a>
                    <div class="wp-block-latest-posts__post-date">December 1, 2023</div>
                </li>
            </div>

            <h3 class="title is-3">Categories Block</h3>
            <div class="wp-block-categories">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
            </div>

            <h3 class="title is-3">Archives Block</h3>
            <div class="wp-block-archives">
                <li><a href="#">January 2024</a></li>
                <li><a href="#">December 2023</a></li>
                <li><a href="#">November 2023</a></li>
            </div>

            <h3 class="title is-3">Tag Cloud Block</h3>
            <div class="wp-block-tag-cloud">
                <a href="#">WordPress</a>
                <a href="#">Bulma</a>
                <a href="#">CSS</a>
                <a href="#">Design</a>
                <a href="#">Theme</a>
                <a href="#">Development</a>
            </div>

            <h3 class="title is-3">Calendar Block</h3>
            <div class="wp-block-calendar">
                <table class="wp-calendar-table">
                    <thead>
                        <tr>
                            <th scope="col" title="Monday">M</th>
                            <th scope="col" title="Tuesday">T</th>
                            <th scope="col" title="Wednesday">W</th>
                            <th scope="col" title="Thursday">T</th>
                            <th scope="col" title="Friday">F</th>
                            <th scope="col" title="Saturday">S</th>
                            <th scope="col" title="Sunday">S</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Embed Blocks -->
        <section class="section">
            <h2 class="title is-2">Embed Blocks</h2>

            <h3 class="title is-3">YouTube Embed</h3>
            <div class="wp-block-embed">
                <div class="wp-block-embed__wrapper">
                    <div style="background:#f0f0f0;padding-bottom:56.25%;position:relative;">
                        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:#666;">
                            YouTube Embed Placeholder
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="title is-3">Twitter Embed</h3>
            <div class="wp-block-embed">
                <div class="wp-block-embed__wrapper">
                    <div style="background:#f0f0f0;padding:1rem;border-radius:4px;">
                        Twitter Embed Placeholder
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Blocks -->
        <section class="section">
            <h2 class="title is-2">Form Blocks</h2>

            <h3 class="title is-3">Contact Form</h3>
            <div class="wp-block-form">
                <div class="wp-block-form-input">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your Name">
                </div>
                <div class="wp-block-form-input">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="your@email.com">
                </div>
                <div class="wp-block-form-input">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Your message" rows="4"></textarea>
                </div>
                <div class="wp-block-button">
                    <button type="submit" class="wp-block-button__link">Send Message</button>
                </div>
            </div>
        </section>

        <!-- Utility Classes Demo -->
        <section class="section">
            <h2 class="title is-2">Utility Classes</h2>

            <div class="wp-block-group has-background has-background-light has-shadow">
                <div class="wp-block-group__inner-container has-text-centered">
                    <h3 class="title is-3">Centered Content with Shadow</h3>
                    <p>This demonstrates Bulma-like utility classes for alignment and styling.</p>
                </div>
            </div>

            <div class="wp-block-buttons is-justify-content-center" style="margin-top:2rem;">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">Centered Button</a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>
