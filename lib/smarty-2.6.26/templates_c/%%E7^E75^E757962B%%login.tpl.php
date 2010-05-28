<?php /* Smarty version 2.6.26, created on 2010-05-25 08:44:05
         compiled from /home/francois/dev/www_google_ads_integration//modules/auth/tpl/login.tpl */ ?>
    <div id="login_div" name="login_div" class="std_content login_box">
        <form action="http://<?php echo $this->_tpl_vars['domain_name']; ?>
/index.php?module=auth&class=auth_controller&event=login" method="post">
           <div class="page_heading" >Google Adwords Find Property</div>
                <br/><br/>
                <div id="message_div" class="message"><?php echo $this->_tpl_vars['message_div']; ?>
</div>
                <div class="login-container">
                    <br/>
                    <span class="label">Username</span>
                    <br/>
                    <input type="text" id="username_txt" name="username_txt" value=""/>
                    <br/><br/>
                    <span class="label">Password</span>
                    <br/>
                    <input type="password" name="password_txt" id="password_txt" value=""/>
                    <br/><br/>
                    <input type="submit" value="Login" class="button small_input"/>
                    <br/>
                    <br/>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['DOC_ROOT'])."/modules/template/tpl/logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        </form>
    <div>
</body>
</html>