<?php /* Smarty version 2.6.26, created on 2010-05-25 08:52:52
         compiled from /home/francois/dev/www_google_ads_integration//modules/user_home/tpl/user_home_campaign.tpl */ ?>
    <div id="user_home" name="user_home" class="std_content" >
        
        <form action="index.php?module=auth&class=auth_controller&event=login" method="post">
            <div id="content_container" class="content_container" >
                    <?php echo $this->_tpl_vars['user']; ?>
&nbsp;&nbsp;&nbsp;
                    <a href="index.php?module=auth&class=auth_controller&event=logout" />Log Out</a>
                    <br/><br/>
                    <div class="page_heading">
                        Campaigns
                    </div>
                    <br/>
                    <div class="info_message">
                        <?php echo $this->_tpl_vars['status']; ?>

                    </div>
                    <br/>
                    <a href="http://<?php echo $this->_tpl_vars['domain_name']; ?>
/?module=remax_user_listings&class=remax_user_listings_controller">Create Campaign from listings</a>
                    <br/><br/><br/>
                    <?php echo $this->_tpl_vars['navigation']; ?>

                    <?php $this->assign('running_total', '0'); ?>
                    <?php if ($this->_tpl_vars['show_campaigns'] == 'true'): ?>
                        <?php unset($this->_sections['campaign']);
$this->_sections['campaign']['name'] = 'campaign';
$this->_sections['campaign']['loop'] = is_array($_loop=$this->_tpl_vars['campaign_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['campaign']['show'] = true;
$this->_sections['campaign']['max'] = $this->_sections['campaign']['loop'];
$this->_sections['campaign']['step'] = 1;
$this->_sections['campaign']['start'] = $this->_sections['campaign']['step'] > 0 ? 0 : $this->_sections['campaign']['loop']-1;
if ($this->_sections['campaign']['show']) {
    $this->_sections['campaign']['total'] = $this->_sections['campaign']['loop'];
    if ($this->_sections['campaign']['total'] == 0)
        $this->_sections['campaign']['show'] = false;
} else
    $this->_sections['campaign']['total'] = 0;
if ($this->_sections['campaign']['show']):

            for ($this->_sections['campaign']['index'] = $this->_sections['campaign']['start'], $this->_sections['campaign']['iteration'] = 1;
                 $this->_sections['campaign']['iteration'] <= $this->_sections['campaign']['total'];
                 $this->_sections['campaign']['index'] += $this->_sections['campaign']['step'], $this->_sections['campaign']['iteration']++):
$this->_sections['campaign']['rownum'] = $this->_sections['campaign']['iteration'];
$this->_sections['campaign']['index_prev'] = $this->_sections['campaign']['index'] - $this->_sections['campaign']['step'];
$this->_sections['campaign']['index_next'] = $this->_sections['campaign']['index'] + $this->_sections['campaign']['step'];
$this->_sections['campaign']['first']      = ($this->_sections['campaign']['iteration'] == 1);
$this->_sections['campaign']['last']       = ($this->_sections['campaign']['iteration'] == $this->_sections['campaign']['total']);
?>
                            <div class="campaign_container">
                                <div class="campaign_name"  onclick="redir_campaign_detail(<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['id']; ?>
);" >
                                    <?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['headline']; ?>
 ( Reference : <?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['name']; ?>
 )
                                </div>
                                <div class="campaign_item" id="campaign_<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['id']; ?>
" onclick="redir_campaign_detail(<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['id']; ?>
);">
                                    Campaign Status : <?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['status']; ?>

                                    <br/>
                                    Days left : <?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['count_days']; ?>

                                    <br/><br/>
                                    <h3 class='google_ad_href'>
		                        		<a href="<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['url']; ?>
" class='google_ad_href'  target='_blank'><b><?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['headline']; ?>
</b></a>
		                        	</h3><br/>
		                        	<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['description1']; ?>
<br/>
		                        	<?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['description2']; ?>
<br/>
		                        	<cite class='adword_url'><?php echo $this->_tpl_vars['campaign_array'][$this->_sections['campaign']['index']]['display_url']; ?>
</cite>
                                </div>
                            </div>
                            <br/>
                            <br/>
                        <?php endfor; endif; ?>
                    <?php endif; ?>
                    <?php echo $this->_tpl_vars['navigation']; ?>

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['DOC_ROOT'])."/modules/template/tpl/logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="center" id="campaign_container">
                    <?php echo $this->_tpl_vars['campaign']; ?>

                </div>
            </div>
        </form>
    <div>
</body>
</html>