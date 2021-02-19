
<?php $this->load->view("common/header");?>
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
                    <div class="form_block">
                        <form name="user_form" id="user_form" method="post" action="<?php echo site_url('Login/user_details_form');?>">
                        <div class="form_row two_field">
                            <div class="form_item">
                                <label>First Name</label>
                                <input type="text" name="first_name" id="first_name" required>
                            </div>
                            <div class="form_item">
                                <label>Last Name</label>
                                <input type="text" name="last_name" id="last_name" required>
                            </div>   
                        </div>
                        <div class="form_row">
                            <label>Email Address</label>
                            <input type="email" name="email_address" id="email_address" required>
                        </div>
                        <div class="form_row two_field">
                            <div class="form_item">
                                <label>Mobile</label>
                                <input type="number" name="mobile_number" id="mobile_number" required>
                            </div>
                            <div class="form_item">
                                <label>Location</label>
                                <input type="text" name="location" id="location" required>
                            </div> 
                        </div>
                        <div class="form_row checkwrap">
                            <label>
                                <input type="checkbox" name="terms_and_con" id="terms_and_con" required >
                                <span>Terms and Conditions</span>
                            </label>
                        </div>
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap">
                                <input type="submit" name="submit_account" id="submit_account" value="Create Account">
                            </div>
                            <a href="#">Already have an Account!</a>
                        </div>
                    </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>