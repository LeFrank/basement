<?php /* Smarty version 2.6.26, created on 2010-05-28 09:36:57
         compiled from /home/francois/dev/the_blog/module/global_template/header.tpl */ ?>
<!doctype html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="alternate" type="application/rss+xml" title="Here Now" href="http://the_blog.localhost/" />
        <meta name="description" content="Here Now , find yourself in the moment, examples and technologies from those who use them." />
        <meta name="keywords" content="LeFrank" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <title>Here Now - <?php echo $this->_tpl_vars['title_name']; ?>
</title>
        <meta name="viewport" content="width=device-width" />
        <?php unset($this->_sections['css_array']);
$this->_sections['css_array']['name'] = 'css_array';
$this->_sections['css_array']['loop'] = is_array($_loop=$this->_tpl_vars['css_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['css_array']['show'] = true;
$this->_sections['css_array']['max'] = $this->_sections['css_array']['loop'];
$this->_sections['css_array']['step'] = 1;
$this->_sections['css_array']['start'] = $this->_sections['css_array']['step'] > 0 ? 0 : $this->_sections['css_array']['loop']-1;
if ($this->_sections['css_array']['show']) {
    $this->_sections['css_array']['total'] = $this->_sections['css_array']['loop'];
    if ($this->_sections['css_array']['total'] == 0)
        $this->_sections['css_array']['show'] = false;
} else
    $this->_sections['css_array']['total'] = 0;
if ($this->_sections['css_array']['show']):

            for ($this->_sections['css_array']['index'] = $this->_sections['css_array']['start'], $this->_sections['css_array']['iteration'] = 1;
                 $this->_sections['css_array']['iteration'] <= $this->_sections['css_array']['total'];
                 $this->_sections['css_array']['index'] += $this->_sections['css_array']['step'], $this->_sections['css_array']['iteration']++):
$this->_sections['css_array']['rownum'] = $this->_sections['css_array']['iteration'];
$this->_sections['css_array']['index_prev'] = $this->_sections['css_array']['index'] - $this->_sections['css_array']['step'];
$this->_sections['css_array']['index_next'] = $this->_sections['css_array']['index'] + $this->_sections['css_array']['step'];
$this->_sections['css_array']['first']      = ($this->_sections['css_array']['iteration'] == 1);
$this->_sections['css_array']['last']       = ($this->_sections['css_array']['iteration'] == $this->_sections['css_array']['total']);
?>
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['css_arr'][$this->_sections['css_array']['index']]; ?>
" type="text/css" media="screen" />
        <?php endfor; endif; ?>
        <?php unset($this->_sections['js_array']);
$this->_sections['js_array']['name'] = 'js_array';
$this->_sections['js_array']['loop'] = is_array($_loop=$this->_tpl_vars['js_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['js_array']['show'] = true;
$this->_sections['js_array']['max'] = $this->_sections['js_array']['loop'];
$this->_sections['js_array']['step'] = 1;
$this->_sections['js_array']['start'] = $this->_sections['js_array']['step'] > 0 ? 0 : $this->_sections['js_array']['loop']-1;
if ($this->_sections['js_array']['show']) {
    $this->_sections['js_array']['total'] = $this->_sections['js_array']['loop'];
    if ($this->_sections['js_array']['total'] == 0)
        $this->_sections['js_array']['show'] = false;
} else
    $this->_sections['js_array']['total'] = 0;
if ($this->_sections['js_array']['show']):

            for ($this->_sections['js_array']['index'] = $this->_sections['js_array']['start'], $this->_sections['js_array']['iteration'] = 1;
                 $this->_sections['js_array']['iteration'] <= $this->_sections['js_array']['total'];
                 $this->_sections['js_array']['index'] += $this->_sections['js_array']['step'], $this->_sections['js_array']['iteration']++):
$this->_sections['js_array']['rownum'] = $this->_sections['js_array']['iteration'];
$this->_sections['js_array']['index_prev'] = $this->_sections['js_array']['index'] - $this->_sections['js_array']['step'];
$this->_sections['js_array']['index_next'] = $this->_sections['js_array']['index'] + $this->_sections['js_array']['step'];
$this->_sections['js_array']['first']      = ($this->_sections['js_array']['iteration'] == 1);
$this->_sections['js_array']['last']       = ($this->_sections['js_array']['iteration'] == $this->_sections['js_array']['total']);
?>
        <script src="<?php echo $this->_tpl_vars['js_arr'][$this->_sections['js_array']['index']]; ?>
" type="text/javascript" ></script>
        <?php endfor; endif; ?>
    </head>
    <body>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['DOC_ROOT'])."/module/global_template/global_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>