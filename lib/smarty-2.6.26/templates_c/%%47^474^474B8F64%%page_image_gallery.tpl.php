<?php /* Smarty version 2.6.26, created on 2010-08-26 00:07:05
         compiled from /home/francois/dev/the_blog/module/page/tpl/page_image_gallery.tpl */ ?>
<div class='mod_<?php echo $this->_tpl_vars['page_module_id']; ?>
' id='gallery_parent_<?php echo $this->_tpl_vars['id']; ?>
'>
    <div class='gallery_module_<?php echo $this->_tpl_vars['page_module_id']; ?>
' id='gallery_<?php echo $this->_tpl_vars['id']; ?>
'>
        <div class="ppy" id="ppy1">
            <ul class="ppy-imglist">
                <?php unset($this->_sections['images']);
$this->_sections['images']['name'] = 'images';
$this->_sections['images']['loop'] = is_array($_loop=$this->_tpl_vars['image']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['images']['show'] = true;
$this->_sections['images']['max'] = $this->_sections['images']['loop'];
$this->_sections['images']['step'] = 1;
$this->_sections['images']['start'] = $this->_sections['images']['step'] > 0 ? 0 : $this->_sections['images']['loop']-1;
if ($this->_sections['images']['show']) {
    $this->_sections['images']['total'] = $this->_sections['images']['loop'];
    if ($this->_sections['images']['total'] == 0)
        $this->_sections['images']['show'] = false;
} else
    $this->_sections['images']['total'] = 0;
if ($this->_sections['images']['show']):

            for ($this->_sections['images']['index'] = $this->_sections['images']['start'], $this->_sections['images']['iteration'] = 1;
                 $this->_sections['images']['iteration'] <= $this->_sections['images']['total'];
                 $this->_sections['images']['index'] += $this->_sections['images']['step'], $this->_sections['images']['iteration']++):
$this->_sections['images']['rownum'] = $this->_sections['images']['iteration'];
$this->_sections['images']['index_prev'] = $this->_sections['images']['index'] - $this->_sections['images']['step'];
$this->_sections['images']['index_next'] = $this->_sections['images']['index'] + $this->_sections['images']['step'];
$this->_sections['images']['first']      = ($this->_sections['images']['iteration'] == 1);
$this->_sections['images']['last']       = ($this->_sections['images']['iteration'] == $this->_sections['images']['total']);
?>
                <li>
                    <a href="http://<?php echo $this->_tpl_vars['domain']; ?>
/lib/images/uploaded/original<?php echo $this->_tpl_vars['image'][$this->_sections['images']['index']]['path']; ?>
">
                        <img src="http://<?php echo $this->_tpl_vars['domain']; ?>
/lib/images/uploaded/thumbnail<?php echo $this->_tpl_vars['image'][$this->_sections['images']['index']]['path']; ?>
" alt="" />
                    </a>
                    <span class="ppy-extcaption">
                        <strong><?php echo $this->_tpl_vars['image'][$this->_sections['images']['index']]['caption']; ?>
</strong>
                    </span>
                </li>
                <?php endfor; endif; ?>
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
                    Image <strong class="ppy-current"></strong> of <strong class="ppy-total"><?php echo $this->_tpl_vars['images_total']; ?>
</strong>
                </div>
                <span class="ppy-text"></span>
            </div>
        </div>
    </div>
    <?php echo $this->_tpl_vars['content']; ?>

</div>
<?php echo '
<script >
    $(document).ready(function () {
        $("#ppy1").popeye();
    });
</script>
'; ?>