<?php
/**
 * Simple test page to verify Bulma button styles
 * This file can be accessed directly to test button styling
 */

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulma 按钮样式测试</title>

    <!-- Load WordPress styles -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- Load Bulma CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bulma.min.css">

    <!-- Load custom button styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/buttons.css">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            padding: 2rem;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .test-section {
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #eee;
        }

        .test-title {
            color: #363636;
            margin-bottom: 1.5rem;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .code-block {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 4px;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 14px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="test-title">Bulma 按钮样式测试页面</h1>
        <p>这个页面用于测试 WordPress 按钮块与 Bulma CSS 的集成效果。</p>

        <!-- Primary Buttons -->
        <div class="test-section">
            <h2 class="test-title">主要按钮样式</h2>
            <div class="buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">默认主要按钮</a>
                </div>
                <div class="wp-block-button is-style-outline">
                    <a class="wp-block-button__link">轮廓样式按钮</a>
                </div>
            </div>
            <div class="code-block">
&lt;div class="wp-block-button"&gt;
    &lt;a class="wp-block-button__link"&gt;默认主要按钮&lt;/a&gt;
&lt;/div&gt;

&lt;div class="wp-block-button is-style-outline"&gt;
    &lt;a class="wp-block-button__link"&gt;轮廓样式按钮&lt;/a&gt;
&lt;/div&gt;
            </div>
        </div>

        <!-- Color Variations -->
        <div class="test-section">
            <h2 class="test-title">颜色变体</h2>
            <div class="buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-success-background-color">成功按钮</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-error-background-color">错误按钮</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-warning-background-color">警告按钮</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-info-background-color">信息按钮</a>
                </div>
            </div>
            <div class="code-block">
&lt;div class="wp-block-button"&gt;
    &lt;a class="wp-block-button__link has-success-background-color"&gt;成功按钮&lt;/a&gt;
&lt;/div&gt;

&lt;div class="wp-block-button"&gt;
    &lt;a class="wp-block-button__link has-error-background-color"&gt;错误按钮&lt;/a&gt;
&lt;/div&gt;
            </div>
        </div>

        <!-- Size Variations -->
        <div class="test-section">
            <h2 class="test-title">尺寸变体</h2>
            <div class="buttons">
                <div class="wp-block-button is-style-small">
                    <a class="wp-block-button__link">小按钮</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">正常按钮</a>
                </div>
                <div class="wp-block-button is-style-large">
                    <a class="wp-block-button__link">大按钮</a>
                </div>
            </div>
            <div class="code-block">
&lt;div class="wp-block-button is-style-small"&gt;
    &lt;a class="wp-block-button__link"&gt;小按钮&lt;/a&gt;
&lt;/div&gt;

&lt;div class="wp-block-button is-style-large"&gt;
    &lt;a class="wp-block-button__link"&gt;大按钮&lt;/a&gt;
&lt;/div&gt;
            </div>
        </div>

        <!-- Special Styles -->
        <div class="test-section">
            <h2 class="test-title">特殊样式</h2>
            <div class="buttons">
                <div class="wp-block-button is-style-full-width">
                    <a class="wp-block-button__link">全宽按钮</a>
                </div>
                <div class="wp-block-button is-style-rounded">
                    <a class="wp-block-button__link">圆角按钮</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link disabled">禁用按钮</a>
                </div>
            </div>
            <div class="code-block">
&lt;div class="wp-block-button is-style-full-width"&gt;
    &lt;a class="wp-block-button__link"&gt;全宽按钮&lt;/a&gt;
&lt;/div&gt;

&lt;div class="wp-block-button is-style-rounded"&gt;
    &lt;a class="wp-block-button__link"&gt;圆角按钮&lt;/a&gt;
&lt;/div&gt;
            </div>
        </div>

        <!-- Button Groups -->
        <div class="test-section">
            <h2 class="test-title">按钮组</h2>
            <div class="wp-block-buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">按钮 1</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">按钮 2</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">按钮 3</a>
                </div>
            </div>

            <div class="wp-block-buttons is-vertical" style="margin-top: 1rem;">
                <div class="wp-block-button">
                    <a class="wp-block-button__link">垂直按钮 1</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">垂直按钮 2</a>
                </div>
                <div class="wp-block-button">
                    <a class="wp-block-button__link">垂直按钮 3</a>
                </div>
            </div>

            <div class="code-block">
&lt;div class="wp-block-buttons"&gt;
    &lt;div class="wp-block-button"&gt;
        &lt;a class="wp-block-button__link"&gt;按钮 1&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="wp-block-button"&gt;
        &lt;a class="wp-block-button__link"&gt;按钮 2&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="wp-block-buttons is-vertical"&gt;
    &lt;div class="wp-block-button"&gt;
        &lt;a class="wp-block-button__link"&gt;垂直按钮 1&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </div>
        </div>

        <div class="test-section">
            <h2 class="test-title">测试说明</h2>
            <p>这个测试页面展示了 WordPress 按钮块与 Bulma CSS 框架的集成效果。</p>
            <p>所有样式都通过 <code>assets/css/buttons.css</code> 文件实现，包括：</p>
            <ul>
                <li>主要按钮样式 (Bulma is-primary)</li>
                <li>轮廓按钮样式 (Bulma is-outline)</li>
                <li>颜色变体 (success, error, warning, info, light, dark)</li>
                <li>尺寸变体 (small, normal, large)</li>
                <li>特殊样式 (full-width, rounded, disabled)</li>
                <li>按钮组布局 (horizontal and vertical)</li>
            </ul>
        </div>
    </div>
</body>
</html>
