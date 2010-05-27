<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_view
 *
 * @author francois
 */
class page_view {

    //first view function yay. Going to be scrapped shortly though :(
    function show_page_one(){
        $html = '
            <!doctype html>
                <head>
                    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                    <!--<link rel="alternate" type="application/rss+xml" title="Google Adwords Find Property" href="http://googleAds.findproperty.co.za/" />
                    <meta name="description" content="Google Adwords on Find Property offers you a simple and easy solution to placing paid for ads on google. This is particulary useful for promoting Temporal products , such as property , vehicles , and other suitably priced products" />
                    <meta name="keywords" content="FindProperty , find property , google adwords , RE/MAX, South Africa , White Wall Web" />
                    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
                    <title>Google Adwords On Find Property - {$title_name}</title>
                    <meta name="viewport" content="width=device-width" />
                    {section name=css_array loop=$css_arr}
                    <link rel="stylesheet" href="{$css_arr[css_array]}" type="text/css" media="screen" />
                    {/section}
                    {section name=js_array loop=$js_arr}
                    <script src="{$js_arr[js_array]}" type="text/javascript" ></script>
                    {/section}-->
                    <script src="../../../lib/js/framework/jquery/jquery-1.4.2.min.js" type="text/javascript" ></script>
                    <script src="../../../lib/plugins/popeye/jquery.popeye-2.0.3/lib/popeye/jquery.popeye-2.0.3.min.js" type="text/javascript" ></script>
                    <link rel="stylesheet" href="../../../lib/plugins/popeye/jquery.popeye-2.0.3/css/popeye/jquery.popeye.css" type="text/css" media="screen" />
                    <link rel="stylesheet" href="../../../lib/plugins/popeye/jquery.popeye-2.0.3/css/popeye/jquery.popeye.style.css" type="text/css" media="screen" />
                    <script language="text/javascript">
                        $(document).ready(function () {
                            $().popeye();
                        });
                    </script>
                    <title>Here Now</title>
                </head>
                <body>
                    <div id="content">
                        <div id="content_block">
                            <p>
                                So its flat for now until we add smarty or some other template engine,
                                so for now just going to mess around with some flat inline image gallery.
                            </p>
                            <p>
                                Tonight I am going to briefly , document setting up an inline ajax image gallery called <a href="http://dev.herr-schuessler.de/jquery/popeye/">POPEYE 2.03</a>

                                Captain log. Stardate 2010 05 26 23:50 GMT+2 :)
                                So I go to the <a href="http://dev.herr-schuessler.de/jquery/popeye/">POPEYE 2.03 site</a>, clicked around. Liked what I saw , figure cool lets send it to all my dev friends.

                                Thats when i remember the last time I alerted everyone to the super awesome terrific plugin I found while clicking my way around the web.
                                Not going to mention the plugin I was pimping , but the code implementation was way too specific. You could only use it exactly as specified and how it was specified was too acute.
                            </p>
                            <p>
                                Well the short and long of it was that I no longer pimp out plugins and apps without trialing it.
                            </p>
                            <p>
                                So here goes , <a href="http://dev.herr-schuessler.de/jquery/popeye/">POPEYE 2.03</a>.
                            </p>
                            <p>
                                First off Downloaded the source off the site. Extracted to my location of choice.
                                Went into the location, navigated into the following path ./popeye/jquery.popeye-2.0.3/plugin.html
                            </p>
                            <p>
                                WOOT works out the box , this is looking more and more promising.
                            </p>
                            <p>
                                Now to integrate it into my little fledgling blog/repository. Here we go.
                                <ol>
                                    <li>
                                        Extracted the archive into my plugins folder. <span class="check_img />
                                    </li>
                                    <li>
                                        Included the required javascript and css files. <span class="check_img />
                                    </li>
                                    <li>
                                        Now to start actually reading documentation ... <span class="check_img /> ... OK lets get coding.
                                    </li>
                                    <li>
                                        Added <code>$(document).ready(function () {
                                                    $().popeye();
                                                });
                                              </code>
                                    </li>
                                </ol>

                            </p>
                        </div>
                    </div>
                </body>
            </html>
        ';
    }

}
?>
