<?php
/**
 * Site Editor Bulma CSS Test Page
 * Test file for verifying Bulma CSS integration in WordPress Site Editor
 */

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulma CSS - 全站编辑器测试</title>

    <!-- WordPress Core Styles -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bulma.min.css">

    <!-- Custom Components CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components.css">

    <!-- Custom Buttons CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/buttons.css">

    <!-- Editor-specific CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/editor-components.css">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }

        .site-editor-simulator {
            display: flex;
            min-height: 100vh;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        /* Left Sidebar - Block Library */
        .editor-sidebar {
            width: 260px;
            background: #1e1e1e;
            color: white;
            padding: 0.75rem;
            border-right: 1px solid #333;
        }

        .editor-sidebar h3 {
            color: #fff;
            margin: 1rem 0 0.5rem 0;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            opacity: 0.7;
        }

        .block-category {
            margin-bottom: 1rem;
        }

        .block-item {
            padding: 0.5rem;
            margin: 0.25rem 0;
            background: #2d2d2d;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .block-item:hover {
            background: #3d3d3d;
        }

        /* Main Editor Area */
        .editor-main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Top Toolbar */
        .editor-toolbar {
            background: white;
            padding: 0.5rem 0.75rem;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .toolbar-button {
            padding: 0.5rem 1rem;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .toolbar-button.primary {
            background: #485fc7;
            color: white;
            border-color: #3a51bb;
        }

        /* Editor Canvas */
        .editor-canvas {
            flex: 1;
            padding: 1.5rem;
            background: #f8f9fa;
            overflow-y: auto;
        }

        .editor-styles-wrapper {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 1.5rem;
            border-radius: 6px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Right Sidebar - Block Inspector */
        .editor-inspector {
            width: 300px;
            background: white;
            border-left: 1px solid #e0e0e0;
            padding: 0.75rem;
            overflow-y: auto;
        }

        .inspector-section {
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #eee;
        }

        .inspector-section h4 {
            margin: 0 0 0.75rem 0;
            color: #1e1e1e;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .inspector-control {
            margin-bottom: 0.5rem;
        }

        .inspector-control label {
            display: block;
            margin-bottom: 0.25rem;
            font-size: 0.8rem;
            color: #666;
            font-weight: 500;
        }

        .inspector-control input,
        .inspector-control select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        /* Block Styles */
        .block-preview {
            border: 1px dashed #e0e0e0;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border-radius: 4px;
            background: #fafafa;
        }

        .block-preview.is-selected {
            border-color: #485fc7;
            background: rgba(72, 95, 199, 0.05);
        }

        /* Status Indicators */
        .status-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }

        .status-active {
            background: #48c78e;
        }

        .status-inactive {
            background: #ddd;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .editor-sidebar {
                width: 240px;
            }

            .editor-inspector {
                width: 280px;
            }
        }

        @media (max-width: 900px) {
            .site-editor-simulator {
                flex-direction: column;
            }

            .editor-sidebar,
            .editor-inspector {
                width: 100%;
                border-right: none;
                border-left: none;
                border-bottom: 1px solid #333;
            }

            .editor-main {
                order: -1;
            }
        }

        /* Animation */
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        .loading {
            animation: pulse 1.5s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <div class="site-editor-simulator">
        <!-- Left Sidebar - Block Library -->
        <div class="editor-sidebar">
            <h3>区块库</h3>

            <div class="block-category">
                <h3>文本</h3>
                <div class="block-item">段落</div>
                <div class="block-item">标题</div>
                <div class="block-item">列表</div>
                <div class="block-item">引用</div>
            </div>

            <div class="block-category">
                <h3>媒体</h3>
                <div class="block-item">图片</div>
                <div class="block-item">画廊</div>
                <div class="block-item">音频</div>
                <div class="block-item">视频</div>
            </div>

            <div class="block-category">
                <h3>设计</h3>
                <div class="block-item">按钮</div>
                <div class="block-item">分组</div>
                <div class="block-item">列</div>
                <div class="block-item">分隔线</div>
            </div>

            <div class="block-category">
                <h3>小工具</h3>
                <div class="block-item">搜索</div>
                <div class="block-item">最新文章</div>
                <div class="block-item">分类</div>
                <div class="block-item">标签云</div>
            </div>
        </div>

        <!-- Main Editor Area -->
        <div class="editor-main">
            <!-- Top Toolbar -->
            <div class="editor-toolbar">
                <div class="toolbar-button">← 返回</div>
                <div class="toolbar-button">模板</div>
                <div class="toolbar-button">样式</div>
                <div class="toolbar-button primary">更新</div>
                <div class="toolbar-button">预览</div>
                <div style="flex: 1;"></div>
                <div class="toolbar-button">帮助</div>
                <div class="toolbar-button">设置</div>
            </div>

            <!-- Editor Canvas -->
            <div class="editor-canvas">
                <div class="editor-styles-wrapper">
                    <h1>全站编辑器 Bulma CSS 测试</h1>
                    <p>这个页面模拟 WordPress 全站编辑器界面，展示 Bulma CSS 集成效果。</p>

                    <!-- Button Block Preview -->
                    <div class="block-preview is-selected">
                        <h4>按钮区块</h4>
                        <div class="wp-block-button">
                            <a class="wp-block-button__link">主要按钮</a>
                        </div>
                        <div class="wp-block-button is-style-outline">
                            <a class="wp-block-button__link">轮廓按钮</a>
                        </div>
                    </div>

                    <!-- Group Block Preview -->
                    <div class="block-preview">
                        <h4>分组区块</h4>
                        <div class="wp-block-group has-background" style="background-color: #f0f9ff;">
                            <div class="wp-block-group__inner-container">
                                <h3>分组标题</h3>
                                <p>这是一个分组区块，包含背景色和圆角样式。</p>
                            </div>
                        </div>
                    </div>

                    <!-- Columns Block Preview -->
                    <div class="block-preview">
                        <h4>列区块</h4>
                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <h5>第一列</h5>
                                <p>左侧列内容</p>
                            </div>
                            <div class="wp-block-column">
                                <h5>第二列</h5>
                                <p>中间列内容</p>
                            </div>
                            <div class="wp-block-column">
                                <h5>第三列</h5>
                                <p>右侧列内容</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Block Preview -->
                    <div class="block-preview">
                        <h4>图片区块</h4>
                        <div class="wp-block-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2U4ZThlOCIvPgo8dGV4dCB4PSI1MCUiIHk9IjUwJSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0ibWlkZGxlIiBmaWxsPSIjOTk5Ij5JbWFnZSBQbGFjZWhvbGRlcjwvdGV4dD4KPC9zdmc+" alt="图片占位符" style="width:100%;height:auto;">
                            <figcaption>图片说明文字</figcaption>
                        </div>
                    </div>

                    <!-- Latest Posts Block Preview -->
                    <div class="block-preview">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar - Block Inspector -->
        <div class="editor-inspector">
            <div class="inspector-section">
                <h4>区块设置</h4>
                <div class="inspector-control">
                    <label>区块类型</label>
                    <select>
                        <option>按钮</option>
                        <option>分组</option>
                        <option>列</option>
                        <option>图片</option>
                    </select>
                </div>
                <div class="inspector-control">
                    <label>对齐方式</label>
                    <select>
                        <option>左对齐</option>
                        <option>居中</option>
                        <option>右对齐</option>
                        <option>宽对齐</option>
                    </select>
                </div>
            </div>

            <div class="inspector-section">
                <h4>样式设置</h4>
                <div class="inspector-control">
                    <label>背景颜色</label>
                    <input type="color" value="#f0f9ff">
                </div>
                <div class="inspector-control">
                    <label>文字颜色</label>
                    <input type="color" value="#000000">
                </div>
                <div class="inspector-control">
                    <label>边框圆角</label>
                    <input type="range" min="0" max="20" value="6">
                </div>
            </div>

            <div class="inspector-section">
                <h4>高级设置</h4>
                <div class="inspector-control">
                    <label>
                        <span class="status-indicator status-active"></span>
                        Bulma 样式
                    </label>
                    <select>
                        <option>启用</option>
                        <option>禁用</option>
                    </select>
                </div>
                <div class="inspector-control">
                    <label>
                        <span class="status-indicator status-active"></span>
                        响应式设计
                    </label>
                    <select>
                        <option>启用</option>
                        <option>禁用</option>
                    </select>
                </div>
            </div>

            <div class="inspector-section">
                <h4>状态信息</h4>
                <p style="font-size: 0.8rem; color: #666; margin: 0;">
                    Bulma CSS 集成状态: <strong style="color: #48c78e;">已启用</strong><br>
                    样式版本: 1.0.0<br>
                    最后更新: 刚刚
                </p>
            </div>
        </div>
    </div>

    <script>
        // 简单的交互效果
        document.addEventListener('DOMContentLoaded', function() {
            // 区块选择效果
            const blockPreviews = document.querySelectorAll('.block-preview');
            blockPreviews.forEach(block => {
                block.addEventListener('click', function() {
                    blockPreviews.forEach(b => b.classList.remove('is-selected'));
                    this.classList.add('is-selected');
                });
            });

            // 区块库交互
            const blockItems = document.querySelectorAll('.block-item');
            blockItems.forEach(item => {
                item.addEventListener('click', function() {
                    alert('添加区块: ' + this.textContent);
                });
            });

            // 模拟加载效果
            const canvas = document.querySelector('.editor-canvas');
            canvas.classList.add('loading');
            setTimeout(() => {
                canvas.classList.remove('loading');
            }, 1000);
        });
    </script>
</body>
</html>
