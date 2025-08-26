<?php
/**
 * Comprehensive Bulma Components Test Page
 * Direct access test file for verifying all Gutenberg block styles
 */

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulma 组件样式测试 - 完整版</title>

    <!-- WordPress Core Styles -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bulma.min.css">

    <!-- Custom Components CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components.css">

    <!-- Custom Buttons CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/buttons.css">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #485fc7 0%, #3a51bb 100%);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .content {
            padding: 2rem;
        }

        .section {
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #f0f0f0;
        }

        .section:last-child {
            border-bottom: none;
        }

        .section-title {
            color: #485fc7;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #485fc7;
            font-size: 2rem;
            font-weight: 600;
        }

        .subsection-title {
            color: #363636;
            margin: 1.5rem 0 1rem 0;
            font-size: 1.5rem;
            font-weight: 500;
        }

        .component-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .component-card {
            background: #fafafa;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #485fc7;
        }

        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 1rem;
            border-radius: 6px;
            font-family: 'Fira Code', 'Monaco', 'Menlo', monospace;
            font-size: 0.9rem;
            margin-top: 1rem;
            overflow-x: auto;
        }

        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            background: #48c78e;
            color: white;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .color-swatch {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 4px;
            margin-right: 0.5rem;
            vertical-align: middle;
        }

        @media (max-width: 768px) {
            .component-grid {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 2rem;
            }

            .content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h1>🎨 Bulma 组件样式测试</h1>
            <p>完整的 WordPress 古腾堡区块 Bulma CSS 集成验证</p>
        </div>

        <div class="content">
            <!-- 容器和布局区块 -->
            <section class="section">
                <h2 class="section-title">📦 容器和布局区块</h2>

                <h3 class="subsection-title">Group 区块</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>普通 Group</h4>
                        <div class="wp-block-group">
                            <div class="wp-block-group__inner-container">
                                <p>这是一个普通的 Group 区块，使用 Bulma 的间距和布局样式。</p>
                            </div>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>带背景的 Group</h4>
                        <div class="wp-block-group has-background" style="background-color: #f0f9ff;">
                            <div class="wp-block-group__inner-container">
                                <p>带有背景色的 Group 区块，具有圆角和内边距。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="subsection-title">Columns 区块</h3>
                <div class="wp-block-columns">
                    <div class="wp-block-column">
                        <h4>第一列</h4>
                        <p>使用 Bulma 的列系统布局，自动响应式设计。</p>
                    </div>
                    <div class="wp-block-column">
                        <h4>第二列</h4>
                        <p>均匀的列宽和间距，移动端自动堆叠。</p>
                    </div>
                    <div class="wp-block-column">
                        <h4>第三列</h4>
                        <p>完美的网格对齐和内容分布。</p>
                    </div>
                </div>

                <h3 class="subsection-title">Cover 区块</h3>
                <div class="wp-block-cover" style="background-color: #667eea; min-height: 250px;">
                    <div class="wp-block-cover__inner-container">
                        <h4 style="color: white;">Hero 区域标题</h4>
                        <p style="color: white;">Cover 区块 styled as Bulma hero component with centered content.</p>
                    </div>
                </div>
            </section>

            <!-- 排版区块 -->
            <section class="section">
                <h2 class="section-title">✏️ 排版区块</h2>

                <h3 class="subsection-title">标题区块</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>H1 - 主要标题</h4>
                        <div class="wp-block-heading"><h1>H1 标题样式</h1></div>
                    </div>
                    <div class="component-card">
                        <h4>H2 - 次要标题</h4>
                        <div class="wp-block-heading"><h2>H2 标题样式</h2></div>
                    </div>
                    <div class="component-card">
                        <h4>H3 - 小节标题</h4>
                        <div class="wp-block-heading"><h3>H3 标题样式</h3></div>
                    </div>
                </div>

                <h3 class="subsection-title">段落和列表</h3>
                <div class="wp-block-paragraph">
                    <p>这是一个段落区块，使用 Bulma 的排版样式。包含适当的行高、间距和响应式设计。文本流畅并在所有设备尺寸上保持可读性。</p>
                </div>

                <div class="component-grid">
                    <div class="component-card">
                        <h4>无序列表</h4>
                        <div class="wp-block-list">
                            <ul>
                                <li>列表项 1</li>
                                <li>列表项 2</li>
                                <li>列表项 3 - 较长的内容演示文本换行</li>
                            </ul>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>有序列表</h4>
                        <div class="wp-block-list">
                            <ol>
                                <li>第一步</li>
                                <li>第二步</li>
                                <li>第三步</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <h3 class="subsection-title">引用和代码</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>引用区块</h4>
                        <div class="wp-block-quote">
                            <p>这是一个引用区块，使用 Bulma 的引用设计。具有左边框和适当的引用样式。</p>
                            <cite class="wp-block-quote__citation">— 作者名称, 来源</cite>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>代码区块</h4>
                        <div class="wp-block-code">
                            <code>&lt;div class="container"&gt;
    &lt;h1&gt;Hello World&lt;/h1&gt;
    &lt;p&gt;代码区块样式&lt;/p&gt;
&lt;/div&gt;</code>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 媒体区块 -->
            <section class="section">
                <h2 class="section-title">🖼️ 媒体区块</h2>

                <h3 class="subsection-title">图片和画廊</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>图片区块</h4>
                        <div class="wp-block-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5JbWFnZSBQbGFjZWhvbGRlcjwvdGV4dD4KPC9zdmc+" alt="图片占位符" style="width:100%;height:auto;">
                            <figcaption>图片说明文字</figcaption>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>画廊区块</h4>
                        <div class="wp-block-gallery">
                            <div class="blocks-gallery-grid" style="grid-template-columns: repeat(2, 1fr);">
                                <div class="blocks-gallery-item">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5JbWFnZSAxPC90ZXh0Pgo8L3N2Zz4=" alt="图片1">
                                </div>
                                <div class="blocks-gallery-item">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5JbWFnZSAyPC90ZXh0Pgo8L3N2Zz4=" alt="图片2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="subsection-title">音视频和文件</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>音频区块</h4>
                        <div class="wp-block-audio">
                            <audio controls style="width:100%;">
                                <source src="#" type="audio/mpeg">
                                您的浏览器不支持音频元素。
                            </audio>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>文件区块</h4>
                        <div class="wp-block-file">
                            <a href="#" class="wp-block-file__link">示例文档.pdf</a>
                            <a href="#" class="wp-block-file__button">下载</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 设计区块 -->
            <section class="section">
                <h2 class="section-title">🎨 设计区块</h2>

                <h3 class="subsection-title">分隔线和间距</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>分隔线区块</h4>
                        <p>普通分隔线：</p>
                        <div class="wp-block-separator"></div>
                        <p>宽分隔线：</p>
                        <div class="wp-block-separator is-style-wide"></div>
                        <p>点状分隔线：</p>
                        <div class="wp-block-separator is-style-dots"></div>
                    </div>

                    <div class="component-card">
                        <h4>间距区块</h4>
                        <p>上面的内容</p>
                        <div class="wp-block-spacer" style="height: 40px;"></div>
                        <p>下面的内容 - 40px 间距</p>
                    </div>
                </div>
            </section>

            <!-- 小工具区块 -->
            <section class="section">
                <h2 class="section-title">🔧 小工具区块</h2>

                <h3 class="subsection-title">搜索和最新文章</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>搜索区块</h4>
                        <div class="wp-block-search">
                            <input type="search" class="wp-block-search__input" placeholder="搜索内容...">
                            <button type="submit" class="wp-block-search__button">搜索</button>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>最新文章区块</h4>
                        <div class="wp-block-latest-posts">
                            <li>
                                <a href="#">第一篇最新文章标题</a>
                                <div class="wp-block-latest-posts__post-date">2024年1月15日</div>
                            </li>
                            <li>
                                <a href="#">第二篇最新文章标题较长以测试换行</a>
                                <div class="wp-block-latest-posts__post-date">2024年1月10日</div>
                            </li>
                            <li>
                                <a href="#">第三篇文章</a>
                                <div class="wp-block-latest-posts__post-date">2024年1月5日</div>
                            </li>
                        </div>
                    </div>
                </div>

                <h3 class="subsection-title">分类和标签</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>分类区块</h4>
                        <div class="wp-block-categories">
                            <li><a href="#">技术</a></li>
                            <li><a href="#">设计</a></li>
                            <li><a href="#">开发</a></li>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>标签云区块</h4>
                        <div class="wp-block-tag-cloud">
                            <a href="#">WordPress</a>
                            <a href="#">Bulma</a>
                            <a href="#">CSS</a>
                            <a href="#">响应式设计</a>
                            <a href="#">前端开发</a>
                            <a href="#">UI设计</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 功能区块 -->
            <section class="section">
                <h2 class="section-title">⚡ 功能区块</h2>

                <h3 class="subsection-title">按钮和表单</h3>
                <div class="component-grid">
                    <div class="component-card">
                        <h4>按钮区块</h4>
                        <div class="wp-block-button">
                            <a class="wp-block-button__link">主要按钮</a>
                        </div>
                        <div class="wp-block-button is-style-outline" style="margin-top: 0.5rem;">
                            <a class="wp-block-button__link">轮廓按钮</a>
                        </div>
                    </div>

                    <div class="component-card">
                        <h4>按钮组</h4>
                        <div class="wp-block-buttons">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link">按钮一</a>
                            </div>
                            <div class="wp-block-button">
                                <a class="wp-block-button__link">按钮二</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="subsection-title">表单区块</h3>
                <div class="component-card">
                    <h4>联系表单</h4>
                    <div class="wp-block-form">
                        <div class="wp-block-form-input">
                            <label for="test-name">姓名</label>
                            <input type="text" id="test-name" placeholder="请输入姓名">
                        </div>
                        <div class="wp-block-form-input">
                            <label for="test-email">邮箱</label>
                            <input type="email" id="test-email" placeholder="example@email.com">
                        </div>
                        <div class="wp-block-form-input">
                            <label for="test-message">消息</label>
                            <textarea id="test-message" placeholder="请输入您的消息" rows="4"></textarea>
                        </div>
                        <div class="wp-block-button" style="margin-top: 1rem;">
                            <button type="submit" class="wp-block-button__link">提交</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 总结 -->
            <section class="section">
                <h2 class="section-title">✅ 集成总结</h2>

                <div class="component-card">
                    <h4>已实现的组件样式</h4>
                    <ul>
                        <li>✅ 容器和布局区块 (Group, Columns, Cover)</li>
                        <li>✅ 排版区块 (标题、段落、列表、引用、代码)</li>
                        <li>✅ 媒体区块 (图片、画廊、音频、视频、文件)</li>
                        <li>✅ 设计区块 (分隔线、间距)</li>
                        <li>✅ 小工具区块 (搜索、最新文章、分类、标签)</li>
                        <li>✅ 功能区块 (按钮、按钮组、表单)</li>
                        <li>✅ 响应式设计支持</li>
                        <li>✅ 无障碍访问支持</li>
                        <li>✅ 动画和交互效果</li>
                    </ul>

                    <p style="margin-top: 1rem; padding: 1rem; background: #e8f5e8; border-radius: 4px;">
                        <strong>🎉 所有古腾堡区块现已集成 Bulma CSS 样式！</strong><br>
                        您可以在 WordPress 编辑器中使用这些区块，它们将自动应用 Bulma 设计风格。
                    </p>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
