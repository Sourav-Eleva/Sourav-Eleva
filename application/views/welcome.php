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
                        <img src="<?php echo base_url();?>assets/images/logo.jpg" alt="logo">
                        <h2>Welcome to CephZone</h2>
                        <p>Select any one from below</p>
                    </div>
                    <div class="form_block">

                    <form name="welcome_form" id="welcome_form" method="post" action="<?php echo site_url('Login/user_roll');?>">
                    <input type="text" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
                        <div class="form_row checkwrap professional_check">
                            <label>
                                <input type="checkbox" name="user[]" id="user" value="User">
                                <span>I am a Individual Professional</span>
                            </label>
                        </div>
                        <div class="form_row checkwrap professional_check">
                            <label>
                                <input type="checkbox"  name="user[]" id="company" value="Company">
                                <span>I am a Company/Organization</span>
                            </label>
                        </div>
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap"><input type="submit" value="Submit"></div>
                           
                        </div>
                    </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>