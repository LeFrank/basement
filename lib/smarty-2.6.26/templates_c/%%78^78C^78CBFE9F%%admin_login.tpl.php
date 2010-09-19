<?php /* Smarty version 2.6.26, created on 2010-09-06 23:03:57
         compiled from /home/francois/dev/the_blog/module/admin/tpl/admin_login.tpl */ ?>
  <div id="login_div" name="login_div" class="std_content">
       <form action="http://<?php echo $this->_tpl_vars['domain_name']; ?>
/admin/login/" method="post">
           <div class="page_heading" ></div>
           <div class="campaign_bottom_border">Admin Login </div>
                <div id="message_div" class="message"><?php echo $this->_tpl_vars['message_div']; ?>
</div>
                <div class="login-container">
                    <br/>
                    <span class="label">Username</span>
                    <br/>
                    <input type="text" id="email" name="email" value=""/>
                    <br/><br/>
                    <span class="label">Password</span>
                    <br/>
                    <input type="password" name="password" id="password" value=""/>
                    <br/><br/>
                    <input type="Submit" value="Log in" class="button buttontext"/>
                    <br/>
                    <br/>
                    <br/><br/>
                </div>
            </div>
        </form>
    <div>