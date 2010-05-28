<!doctype html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="alternate" type="application/rss+xml" title="Here Now" href="http://the_blog.localhost/" />
        <meta name="description" content="Here Now , find yourself in the moment, examples and technologies from those who use them." />
        <meta name="keywords" content="LeFrank" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <title>Here Now - {$title_name}</title>
        <meta name="viewport" content="width=device-width" />
        {section name=css_array loop=$css_arr}
        <link rel="stylesheet" href="{$css_arr[css_array]}" type="text/css" media="screen" />
        {/section}
        {section name=js_array loop=$js_arr}
        <script src="{$js_arr[js_array]}" type="text/javascript" ></script>
        {/section}
    </head>
    <body>
        {include file="$DOC_ROOT/module/global_template/global_header.tpl"}