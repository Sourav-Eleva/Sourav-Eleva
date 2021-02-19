
<?php $this->load->view("common/header");?>
<div class="main-block">
    <div class="logIn_block">
        <div class="container">
            <div class="login_wrap">
                <div class="form_wrap">
                    <div class="top_block">
                        <img src="assets/images/logo.jpg" alt="logo">
                        <h2>Join CephZone</h2>
                        <p>Make the most of your professional life</p>
                    </div>

                    <form name="login_form" id="login_form" method="post" action="<?php echo site_url('Login/login_form');?>">
                    <div class="form_block">
                        <div class="form_row">
                            <label>Email ID</label>
                            <input type="email" name="email_add" id="email_add" required>
                        </div>
                        <div class="form_row">
                            <label>Password</label>
                            <input type="password"  name="pass_word" id="pass_word" required>
                        </div>
                        <div class="form_row checkwrap">
                            <label>
                                <input type="checkbox" name="terms_con" id="terms_con" required>
                                <span>Terms and Conditions</span>
                            </label>
                        </div>
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap"><input type="submit" name="user_log" id="user_log" value="Log In"></div>
                            <a href="<?php echo base_url();?>Login/account">Create Account</a>
                        </div>
                    </div>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>