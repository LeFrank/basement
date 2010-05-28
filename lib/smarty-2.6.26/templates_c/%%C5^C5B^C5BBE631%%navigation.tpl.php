<?php /* Smarty version 2.6.26, created on 2010-05-25 08:52:52
         compiled from /home/francois/dev/www_google_ads_integration//modules/template/tpl/navigation.tpl */ ?>
<div class="float_left">
	Order date by :
	<select id="order_date_by" name="order_date_by" onchange="window.location='?<?php echo $this->_tpl_vars['url']; ?>
&order_date_by='+document.getElementById('order_date_by').value;">
	  <option value="desc" <?php if ($this->_tpl_vars['order_date_by'] == 'desc'): ?>selected<?php endif; ?>>descending</option>
	  <option value="asc" <?php if ($this->_tpl_vars['order_date_by'] == 'asc'): ?>selected<?php endif; ?>>ascending</option>
	</select>
</div>
<div class="float_right">
	Results per page : <a href="?<?php echo $this->_tpl_vars['url']; ?>
&results_per_page=10" >10</a>&nbsp;&nbsp;&nbsp;<a href="?<?php echo $this->_tpl_vars['url']; ?>
&results_per_page=25" >25</a>&nbsp;&nbsp;&nbsp;<a href="?<?php echo $this->_tpl_vars['url']; ?>
&results_per_page=50" >50</a>
</div>
<div style='clear:both;'>
	&nbsp;
</div>
<div class="float_right">
	Page:&nbsp;
	<?php if ($this->_tpl_vars['current_page'] > 1 && $this->_tpl_vars['total_pages'] > 10): ?>
		<a href="?<?php echo $this->_tpl_vars['url']; ?>
&current_page=1">&#60;&#60; first</a>&nbsp;&nbsp;&nbsp;
	<?php endif; ?>
	<?php echo $this->_tpl_vars['pre_build_nav']; ?>

</div>
<br/>
<br/>