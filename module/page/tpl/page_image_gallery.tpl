<div class='mod_{$page_module_id}' id='gallery_parent_{$id}'>
    <div class='gallery_module_{$page_module_id}' id='gallery_{$id}'>
        <div class="ppy" id="ppy1">
            <ul class="ppy-imglist">
                {section name=images loop=$image}
                <li>
                    <a href="http://{$domain}/lib/images/uploaded/original{$image[images].path}">
                        <img src="http://{$domain}/lib/images/uploaded/thumbnail{$image[images].path}" alt="" />
                    </a>
                    <span class="ppy-extcaption">
                        <strong>{$image[images].caption}</strong>
                    </span>
                </li>
                {/section}
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
                    Image <strong class="ppy-current"></strong> of <strong class="ppy-total">{$images_total}</strong>
                </div>
                <span class="ppy-text"></span>
            </div>
        </div>
    </div>
    {$content}
</div>
{literal}
<script >
    $(document).ready(function () {
        $("#ppy1").popeye();
    });
</script>
{/literal}