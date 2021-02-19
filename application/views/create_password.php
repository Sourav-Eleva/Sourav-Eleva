
<?php $this->load->view("common/header");?>


<?php
   $user_id = $this->session->userdata('username');
  
?>
<div class="main-block">
    <div class="logIn_block">
        <div class="container">
            <div class="login_wrap">
                <div class="form_wrap">
                    <div class="top_block">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo">
                        <h2>Join CephZone</h2>
                        <p>Make the most of your professional life</p>
                    </div>

<?php

//echo "username".$username;
?>

                    <div class="form_block">
                    <form name="pass_form" id="pass_form" method="post" action="<?php echo site_url('Login/check_password');?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
                    
                        <div class="form_row">
                            <label>Password</label>
                            <input type="password" value="<?php echo set_value('new_password'); ?>" name="new_password" class="form-control input-group-lg" placeholder="New Password">
                        </div>
                        <?php if(form_error('new_password')){echo "<span style='color:red'>".form_error('new_password')."</span>";} ?>

                        <div class="form_row">
                            <label>Re-Enter</label>
                            <input type="password" value="<?php echo set_value('confirm_password'); ?>" name="confirm_password" class="form-control input-group-lg" placeholder="Confirm Password">
                        </div>
                        <?php if(form_error('confirm_password')){echo "<span style='color:red'>".form_error('confirm_password')."</span>";} ?>
                        <div class="form_row character_plot">
                            <h2>Strength of Password: MATCHING</h2>
                            <ul>
                                <li>One caps letter</li>
                                <li>One small letter</li>
                                <li>One special character</li>
                                <li>One number and minimum 8 character..</li>
                            </ul>
                        </div>
                        <div class="form_row">
                            <label>OTP</label>
                            <input type="text" name="mobile_otp" id="mobile_otp" required>
                        </div>
                        
                        <div class="form_row checkwrap">
                            <label>
                                <input type="checkbox"  name="terms" id="terms" required >
                                <span>Terms and Conditions</span>
                            </label>
                        </div>
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap"><input type="submit" value="Submit"></div>
                            <a href="#">Re-Send OTP</a>
                        </div>
                        </form>



                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>