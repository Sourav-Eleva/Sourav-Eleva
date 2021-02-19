<?php $this->load->view("common/header");?>
<?php
   $user_id = $this->session->userdata('username');
  
?>
<div class="main-block">
    <div class="logIn_block">
        <div class="container">
            <div class="login_wrap">
                <div class="form_wrap company_reg_wrap">
                    <div class="top_block">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo">
                        <h2>Company Registration</h2>
                        <!-- <p>Make the most of your professional life</p> -->
                    </div>
                    <div class="form_block">
                        <div class="form_row">
                            <input type="text" placeholder="Name of the company">
                        </div>
                        <div class="form_row">
                            <select>
                                <option hidden>Industry of the company belongs to</option>
                                <option>Option1</option>
                                <option>Option1</option>
                                <option>Option1</option>
                            </select>
                        </div>
                        <div class="form_row three_field">
                            <div class="form_item">
                                <input type="text" placeholder="Location">
                            </div>
                            <div class="form_item">
                                <input type="text" placeholder="No of employees">
                            </div>   
                            <div class="form_item">
                                <input type="text" placeholder="Established year/MM">
                            </div>  
                        </div>
                        <div class="form_row">
                            <input type="text" placeholder="Your current title">
                        </div>
                        <div class="form_row three_field">
                            <div class="form_item">
                                <input type="text" placeholder="Working since">
                            </div>
                            <div class="form_item">
                                <input type="text" placeholder="Company website">
                            </div>   
                            <div class="form_item">
                                <input type="email" placeholder="Company Email Id">
                            </div>  
                        </div>
                        <div class="form_row">
                            <textarea placeholder="About the company"></textarea>
                        </div>
                        
                        <div class="form_row submit_wrap">
                            <div class="submit_btnWrap company_btn"><input type="submit" value="Save"></div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>