<?php /* Smarty version 2.6.26, created on 2010-08-19 00:40:04
         compiled from /home/francois/dev/the_blog/module/page/tpl/ttmp_page.tpl */ ?>
<?php unset($this->_sections['page_block']);
$this->_sections['page_block']['name'] = 'page_block';
$this->_sections['page_block']['loop'] = is_array($_loop=$this->_tpl_vars['page_blocks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_block']['show'] = true;
$this->_sections['page_block']['max'] = $this->_sections['page_block']['loop'];
$this->_sections['page_block']['step'] = 1;
$this->_sections['page_block']['start'] = $this->_sections['page_block']['step'] > 0 ? 0 : $this->_sections['page_block']['loop']-1;
if ($this->_sections['page_block']['show']) {
    $this->_sections['page_block']['total'] = $this->_sections['page_block']['loop'];
    if ($this->_sections['page_block']['total'] == 0)
        $this->_sections['page_block']['show'] = false;
} else
    $this->_sections['page_block']['total'] = 0;
if ($this->_sections['page_block']['show']):

            for ($this->_sections['page_block']['index'] = $this->_sections['page_block']['start'], $this->_sections['page_block']['iteration'] = 1;
                 $this->_sections['page_block']['iteration'] <= $this->_sections['page_block']['total'];
                 $this->_sections['page_block']['index'] += $this->_sections['page_block']['step'], $this->_sections['page_block']['iteration']++):
$this->_sections['page_block']['rownum'] = $this->_sections['page_block']['iteration'];
$this->_sections['page_block']['index_prev'] = $this->_sections['page_block']['index'] - $this->_sections['page_block']['step'];
$this->_sections['page_block']['index_next'] = $this->_sections['page_block']['index'] + $this->_sections['page_block']['step'];
$this->_sections['page_block']['first']      = ($this->_sections['page_block']['iteration'] == 1);
$this->_sections['page_block']['last']       = ($this->_sections['page_block']['iteration'] == $this->_sections['page_block']['total']);
?>
    <?php echo $this->_tpl_vars['page_blocks'][$this->_sections['page_block']['index']]['page_block']; ?>
<br/>
<?php endfor; endif; ?>