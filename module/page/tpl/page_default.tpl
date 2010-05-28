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
        </p>
        <ol>
            <li>
                Extracted the archive into my plugins folder. <span class="check_img" >&nbsp;</span>
            </li>
            <li>
                Included the required javascript and css files. <span class="check_img" >&nbsp;</span>
            </li>
            <li>
                Now to start actually reading documentation ... <span class="check_img" >&nbsp;</span> ... OK lets get coding.
            </li>
            <li>
                Added <code>
                            {literal}$(document).ready(function () {<br/ >
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$().popeye(); <br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
                            {/literal}
                      </code>
            </li>
            <li>
                Copy and paste the code from the plugin for example one :
                <div style="width:300px;height:220px;">
                    <div class="ppy" id="ppy1">
                        <ul class="ppy-imglist">
                            <li>
                                <a href="http://farm4.static.flickr.com/3461/3760102198_0e3de1eec3.jpg">
                                    <img src="http://farm4.static.flickr.com/3461/3760102198_0e3de1eec3_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>Eyes of a Holcocephala fusca Robber Fly</strong><br />shot by flickr member Thomas Shahan<br />
                                    <a href="http://www.flickr.com/photos/opoterser/3760102198/">View on flickr.com</a>
                                </span>
                            </li>
                            <li>
                                <a href="http://farm3.static.flickr.com/2372/2175199426_a54827f5e6.jpg">
                                    <img src="http://farm3.static.flickr.com/2372/2175199426_a54827f5e6_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>Dolichopodids, fairly small, metallic flies with large, prominent eyes</strong><br />shot by flickr member williamcho<br />
                                    <a href="http://www.flickr.com/photos/adforce1/2175199426/">View on flickr.com</a>
                                </span>
                            </li>
                            <li>
                                <a href="http://farm2.static.flickr.com/1317/908814138_9fa713a687.jpg">
                                    <img src="http://farm2.static.flickr.com/1317/908814138_9fa713a687_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>Crocodiles eye</strong><br />shot by flickr member Tambako the Jaguar<br />
                                    <a href="http://www.flickr.com/photos/tambako/908814138/">View on flickr.com</a>
                                </span>
                            </li>
                            <li>
                                <a href="http://farm4.static.flickr.com/3357/3633927491_d8864d5235.jpg">
                                    <img src="http://farm4.static.flickr.com/3357/3633927491_d8864d5235_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>Daipeem</strong><br />shot by flickr member Furryscaly<br />
                                    <a href="http://www.flickr.com/photos/furryscalyman/3633927491">View on flickr.com</a>
                                </span>
                            </li>
                            <li>
                                <a href="http://farm4.static.flickr.com/3335/3198858060_365ce0ba53.jpg">
                                    <img src="http://farm4.static.flickr.com/3335/3198858060_365ce0ba53_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>basiliscus plumifrons</strong><br />shot by flickr member Joachim S. Müller<br />
                                    <a href="http://www.flickr.com/photos/joachim_s_mueller/3198858060/in/set-72157612281941653/">View on flickr.com</a>
                                </span>
                            </li>
                            <li>
                                <a href="http://farm3.static.flickr.com/2597/4162969117_cbbc452a26.jpg">
                                    <img src="http://farm3.static.flickr.com/2597/4162969117_cbbc452a26_m.jpg" alt="" />
                                </a>
                                <span class="ppy-extcaption">
                                    <strong>Eyes of Jumping spider</strong><br />shot by flickr member Lukjonis<br />
                                    <a href="http://www.flickr.com/photos/38628972@N05/4162969117/">View on flickr.com</a>
                                </span>
                            </li>
                        </ul>
                        <div class="ppy-outer">
                            <div class="ppy-stage">
                                <div class="ppy-nav">
                                    <a class="ppy-prev" title="Previous image">Previous image</a>
                                    <a class="ppy-switch-enlarge" title="Enlarge">Enlarge</a>
                                    <a class="ppy-switch-compact" title="Close">Close</a>
                                    <a class="ppy-next" title="Next image">Next image</a>
                                </div>
                            </div>
                        </div>
                        <div class="ppy-caption">
                            <div class="ppy-counter">
                                Image <strong class="ppy-current"></strong> of <strong class="ppy-total"></strong>
                            </div>
                            <span class="ppy-text"></span>
                        </div>
                    </div>
                </div>
                <span class="note_strong">Noted</span> : that in older version of opera , when returning to thumbnail view it took up all available width of the parent container.<br/>
                Moved the {literal}$(document).ready();{/literal} section to the bottom of the page as per best practices.
                <br/><br/>
            </li>
            <li>
                Onto example two :
                <div style="width:600px;height:220px;">
                    <div class="ppy" id="ppy2">
                        <ul class="ppy-imglist">
                            <li><a href="http://farm2.static.flickr.com/1428/1387537684_c1ce69e15a.jpg"><img src="http://farm2.static.flickr.com/1428/1387537684_c1ce69e15a_m.jpg" alt="yankee stadium shot by flickr member andre stoeriko" /></a></li>
                            <li><a href="http://farm1.static.flickr.com/243/516200107_08d8e90a7f.jpg"><img src="http://farm1.static.flickr.com/243/516200107_08d8e90a7f_m.jpg" alt="Up There, shot by flickr member Nils Geylen" /></a></li>
                            <li><a href="http://farm2.static.flickr.com/1230/587925720_95a59f71f3.jpg"><img src="http://farm2.static.flickr.com/1230/587925720_95a59f71f3_m.jpg" alt="99 Luftballons, shot by flickr member Iguana Jo" /></a></li>
                            <li><a href="http://farm2.static.flickr.com/1077/1362086820_0e15e9a21e.jpg"><img src="http://farm2.static.flickr.com/1077/1362086820_0e15e9a21e_m.jpg" alt="The english bikers, shot by flickr member diebmx" /></a></li>
                            <li><a href="http://farm1.static.flickr.com/106/285870495_e1292924fd.jpg"><img src="http://farm1.static.flickr.com/106/285870495_e1292924fd_m.jpg" alt="Soar, shot by flickr member Brian Hathcock" /></a></li>
                            <li><a href="http://farm1.static.flickr.com/144/405993690_5c5838a6d4.jpg"><img src="http://farm1.static.flickr.com/144/405993690_5c5838a6d4_m.jpg" alt="Acephalous, shot by flickr member wilhei55" /></a></li>
                            <li><a href="http://farm2.static.flickr.com/1026/1405752274_fa0dd74922.jpg"><img src="http://farm2.static.flickr.com/1026/1405752274_fa0dd74922_m.jpg" alt="Always Reaching, shot by flickr member ecstaticist" /></a></li>
                            <li><a href="http://farm2.static.flickr.com/1021/531198146_57e1fd9541.jpg"><img src="http://farm2.static.flickr.com/1021/531198146_57e1fd9541_m.jpg" alt="dive buddy, shot by flickr member leafbug" /></a></li>
                            <li><a href="http://farm2.static.flickr.com/1134/593106554_1e3b2bda73.jpg"><img src="http://farm2.static.flickr.com/1134/593106554_1e3b2bda73_m.jpg" alt="True Blue, shot by flickr member welshbaloney" /></a></li>
                        </ul>
                        <div class="ppy-outer">
                            <div class="ppy-stage">
                                <div class="ppy-counter">
                                    <strong class="ppy-current"></strong> / <strong class="ppy-total"></strong>
                                </div>
                            </div>
                            <div class="ppy-nav">
                                <div class="nav-wrap">
                                    <a class="ppy-next" title="Next image">Next image</a>
                                    <a class="ppy-prev" title="Previous image">Previous image</a>
                                    <a class="ppy-switch-enlarge" title="Enlarge">Enlarge</a>
                                    <a class="ppy-switch-compact" title="Close">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                Example two copy and paste went off without a hitch.
                <br/><br/>
            </li>
            <li>
                Example three GO!:<br/>
                <div style="width:300px;height:80px;">
                    <div class="ppy" id="ppy3">
                        <ul class="ppy-imglist">
                            <li><a href="http://farm4.static.flickr.com/3142/3053892214_390c0365df.jpg"><img src="http://farm4.static.flickr.com/3142/3053892214_390c0365df_m.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras euismod risus non diam." /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3014/3053902638_7871e32230.jpg"><img src="http://farm4.static.flickr.com/3014/3053902638_7871e32230_m.jpg" alt="In tempus consequat purus. Curabitur in massa nec purus semper adipiscing. Donec convallis odio nec nibh. Nam viverra, tortor nec cursus accumsan, purus purus ultricies mauris, in dignissim orci dui at est. Morbi non quam at ante cursus posuere. Sed ornare sem vitae diam tempor blandit. Nam risus diam, faucibus eget, fermentum et, dignissim eu, tellus. Praesent non justo. Proin vestibulum diam at mi. Cras molestie eleifend mi. Morbi massa enim, auctor at, rhoncus nec, consequat nec, diam. In laoreet lacus vel velit. Sed vulputate commodo ligula." /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3136/3053075339_ca3f303a6d.jpg"><img src="http://farm4.static.flickr.com/3136/3053075339_ca3f303a6d_m.jpg" alt="Sed consequat tincidunt sapien." /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3234/3053054359_090927b527.jpg"><img src="http://farm4.static.flickr.com/3234/3053054359_090927b527_m.jpg" alt="Proin aliquam libero ac lectus. Sed consequat tincidunt sapien. Suspendisse hendrerit porta ante. Proin aliquam libero ac lectus. Sed consequat tincidunt sapien. Suspendisse hendrerit porta ante." /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3161/3053878060_16a1ed4786.jpg"><img src="http://farm4.static.flickr.com/3161/3053878060_16a1ed4786_m.jpg" alt="Aenean tristique pellentesque quam. Proin aliquam libero ac lectus." /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3247/3053897646_df5b74c794.jpg"><img src="http://farm4.static.flickr.com/3247/3053897646_df5b74c794_m.jpg" alt="" /></a></li>
                            <li><a href="http://farm4.static.flickr.com/3225/3053039525_2d3ef0c58e.jpg"><img src="http://farm4.static.flickr.com/3225/3053039525_2d3ef0c58e_m.jpg" alt="Suspendisse hendrerit porta ante." /></a></li>
                        </ul>
                        <div class="ppy-outer">
                            <div class="ppy-stage">
                                <div class="ppy-nav">
                                    <div class="nav-wrap">
                                        <a class="ppy-prev" title="Previous image">Previous image</a>
                                        <a class="ppy-switch-enlarge" title="Enlarge">Enlarge</a>
                                        <a class="ppy-switch-compact" title="Close">Close</a>
                                        <a class="ppy-next" title="Next image">Next image</a>
                                    </div>
                                </div>
                                <div class="ppy-counter">
                                    <strong class="ppy-current"></strong> / <strong class="ppy-total"></strong>
                                </div>
                            </div>
                            <div class="ppy-caption">
                                <span class="ppy-text"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both; " />
                OK dokey so , copy pasted code now works , so the environment is correct.
                Now I need to actually make it useful on this site, by using it display user contributed image galleries.
                Also kind of use build it into a seemingly CMS(y) structue.
                <br/>
            </li>
            <li>
                Good night , will continue soon :)
            </li>
        </ol>
    </div>
</div>
{literal}
<script >
    $(document).ready(function () {
        var options2 = {
                            caption:    false,
                            navigation: "permanent",
                            direction:  "left"
                        }
                var options3 = {
                                    caption:    "permanent",
                                    opacity:    1
                                }
        $("#ppy1").popeye();
        $("#ppy2").popeye();
        $("#ppy3").popeye();
    });
</script>
{/literal}
</body>
</html>