<?php

use League\CommonMark\Extension\Embed\Bridge\OscaroteroEmbedAdapter;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkRenderer;

return [
    'code_highlighting'       => [
        /*
         * To highlight code, we'll use Shiki under the hood. Make sure it's installed.
         *
         * More info: https://spatie.be/docs/laravel-markdown/v1/installation-setup
         */
        'enabled' => true,

        /*
         * The name of or path to a Shiki theme
         *
         * More info: https://github.com/shikijs/shiki/blob/main/docs/themes.md
         */
        'theme'   => 'github-light',
    ],

    /*
     * When enabled, anchor links will be added to all titles
     */
    'add_anchors_to_headings' => true,

    /*
     * These options will be passed to the league/commonmark package which is
     * used under the hood to render markdown.
     *
     * More info: https://spatie.be/docs/laravel-markdown/v1/using-the-blade-component/passing-options-to-commonmark
     */
    'commonmark_options'      => [
        "embed"             => [
            "adapter" => new OscaroteroEmbedAdapter(),
        ],
        "footnote"          => [
            "backref_class"      => "footnote-backref",
            "backref_symbol"     => "",
            "container_add_hr"   => true,
            "container_class"    => "footnotes",
            "ref_class"          => "footnote-ref",
            "ref_id_prefix"      => "fnref:",
            "footnote_class"     => "footnote",
            "footnote_id_prefix" => "fn:",
        ],
        "heading_permalink" => [
            "html_class"        => "heading-permalink",
            "id_prefix"         => "content",
            "fragment_prefix"   => "content",
            "insert"            => "before",
            "min_heading_level" => 1,
            "max_heading_level" => 6,
            "title"             => "Permalink",
            "symbol"            => HeadingPermalinkRenderer::DEFAULT_SYMBOL,
            "aria_hidden"       => true,
        ],
        "table_of_contents" => [
            "html_class"        => "table-of-contents",
            "position"          => "top",
            "style"             => "bullet",
            "min_heading_level" => 1,
            "max_heading_level" => 6,
            "normalize"         => "relative",
            "placeholder"       => null,
        ],
    ],

    /*
     * Rendering markdown to HTML can be resource intensive. By default
     * we'll cache the results.
     *
     * You can specify the name of a cache store here. When set to `null`
     * the default cache store will be used. If you do not want to use
     * caching set this value to `false`.
     */
    'cache_store'             => null,

    /*
     * This class will convert markdown to HTML
     *
     * You can change this to a class of your own to greatly
     * customize the rendering process
     *
     * More info: https://spatie.be/docs/laravel-markdown/v1/advanced-usage/customizing-the-rendering-process
     */
    'renderer_class'          => Spatie\LaravelMarkdown\MarkdownRenderer::class,

    /*
     * These extensions should be added to the markdown environment. A valid
     * extension implements League\CommonMark\Extension\ExtensionInterface
     *
     * More info: https://commonmark.thephpleague.com/2.1/extensions/overview/
     */
    'extensions'              => [
        \League\CommonMark\Extension\GithubFlavoredMarkdownExtension::class,
        \League\CommonMark\Extension\Attributes\AttributesExtension::class,
        \League\CommonMark\Extension\DescriptionList\DescriptionListExtension::class,
        \League\CommonMark\Extension\Embed\EmbedExtension::class,
        \League\CommonMark\Extension\Footnote\FootnoteExtension::class,
        \League\CommonMark\Extension\FrontMatter\FrontMatterExtension::class,
        \League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension::class,
        \League\CommonMark\Extension\TableOfContents\TableOfContentsExtension::class,
        \ElGigi\CommonMarkEmoji\EmojiExtension::class,
    ],

    /*
     * These block renderers should be added to the markdown environment. A valid
     * renderer implements League\CommonMark\Renderer\NodeRendererInterface;
     *
     * More info: https://commonmark.thephpleague.com/2.1/customization/rendering/
     */
    'block_renderers'         => [
        // ['class' => FencedCode::class, 'renderer' => new MyCustomCodeRenderer(), 'priority' => 0]
    ],

    /*
     * These inline renderers should be added to the markdown environment. A valid
     * renderer implements League\CommonMark\Renderer\NodeRendererInterface;
     *
     * More info: https://commonmark.thephpleague.com/2.1/customization/rendering/
     */
    'inline_renderers'        => [
        // ['class' => FencedCode::class, 'renderer' => new MyCustomCodeRenderer(), 'priority' => 0]
    ],

    /*
     * These inline parsers should be added to the markdown environment. A valid
     * parser implements League\CommonMark\Renderer\InlineParserInterface;
     *
     * More info: https://commonmark.thephpleague.com/2.3/customization/inline-parsing/
     */
    'inline_parsers'          => [
        // ['parser' => new MyCustomInlineParser(), 'priority' => 0]
    ],
];
