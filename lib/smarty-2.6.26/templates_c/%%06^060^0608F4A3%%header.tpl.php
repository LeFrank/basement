<?php /* Smarty version 2.6.26, created on 2010-05-25 08:44:05
         compiled from /home/francois/dev/www_google_ads_integration//modules/template/tpl/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="alternate" type="application/rss+xml" title="Google Adwords Find Property" href="http://googleAds.findproperty.co.za/" />
    <meta name="description" content="Google Adwords on Find Property offers you a simple and easy solution to placing paid for ads on google. This is particulary useful for promoting Temporal products , such as property , vehicles , and other suitably priced products" />
    <meta name="keywords" content="FindProperty , find property , google adwords , RE/MAX, South Africa , White Wall Web" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>Google Adwords On Find Property - <?php echo $this->_tpl_vars['title_name']; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['DOC_ROOT'])."/modules/template/tpl/global_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>