
<?php $this->load->view("common/header");?>
<?php
   $user_id = $this->session->userdata('username');

   //echo "User id : ".$user_id;
  
?>
<div class="main-block">
    <div class="logIn_block">
        <div class="container">
            <div class="login_wrap">
                <div class="form_wrap company_reg_wrap">
                    <div class="top_block">
                        <img src="<?php echo base_url();?>assets/images/logo.jpg" alt="logo">
                        <h2>Your Hear to?</h2>
                        <p>Please select your professional objectives, maximum 3</p>
                    </div>
                    <div class="form_block">

                    <form name="user_form" id="user_form" method="post" action="<?php echo site_url('Login/open_pages');?>">
                        <div class="form_row hearToField">
                            <ul>
                                <li>
                                    <label>
                                        <input type="hidden" name="user_id" id="user_id" value="<?php  echo $user_id; ?>">
                                        <input type="checkbox" name="freelance_jobs[]" value="Job" checked>
                                        <span>Looking for JOBS or freelance jobs</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="freelance_jobs[]" value="Hire" >
                                        <span>Looking to Hire</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="freelance_jobs[]" value="Collabrate" >
                                        <span>Looking to build professional network and collabrate</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="freelance_jobs[]" value="Startups" >
                                        <span>Looking to invest in to startups</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="freelance_jobs[]" value="Investments" >
                                        <span>Iam a start up looking for investments</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="freelance_jobs[]" value="Experts" >
                                        <span>Meet experts who can mentor</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"  name="freelance_jobs[]" value="Mentor" >
                                        <span>Mentor others</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap company_btn">
                            <input type="submit" name="next_button" id="next_button" value="Next"></div>
                        </div>
                        </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>