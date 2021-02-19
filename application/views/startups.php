<?php $this->load->view("common/header");?>
<?php
echo "This is startups page";
     echo "<br>Page ". $page_no;
     echo "<br>no_of_pages".$no_of_pages;
     echo "<br>action page".$action_page = strtolower($action_page);
     
    //exit;
 //   echo "no_of_pages".$no_of_pages;
?>
<?php
   $user_id = $this->session->userdata('username');
  
?>
<div class="main-block">
    <div class="logIn_block">
        <div class="container">
            <div class="login_wrap">
                <div class="form_wrap company_reg_wrap">
                    <div class="top_block">
                        <img src="<?php echo base_url();?>assets/images/logo.jpg" alt="logo">
                        <h2 class="job_text">As you have selected looking for job as your objectives,
                            Please fill required details</h2>
                    </div>
                    <div class="form_block">
                    <form name="jobs_form" id="jobs_form" method="post" action="<?php echo site_url('Login/'.$action_page);?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>"> 
                        <div class="form_row">
                            <select name="industries" id="industries">
                                <option hidden>Select Industry where looking for job Max 3 industries</option>
                                <option value="Option1">Option1</option>
                                <option value="Option2">Option2</option>
                                <option value="Option3">Option3</option>
                            </select>
                        </div>
                        <div class="form_row" name="functional_area" id="functional_area">
                            <select>
                                <option hidden>Select Functional area where you like to work max 3</option>
                                <option value="Option1">Option1</option>
                                <option value="Option2">Option2</option>
                                <option value="Option3">Option3</option>
                            </select>
                        </div>
                        <div class="form_row" name="designate" id="designate">
                            <select>
                                <option hidden>Select titles you designate select max 3</option>
                                <option value="Option1">Option1</option>
                                <option value="Option2">Option2</option>
                                <option value="Option3">Option3</option>
                            </select>
                        </div>
                        <div class="form_row">
                                <input type="text" name="location" id="location" placeholder="Current Location"> 
                        </div>
                        <div class="form_row">
                            <input type="text" placeholder="Preferred Location Max 2 more or NONE">
                        </div>
                        <div class="form_row four_field checkwrap">
                            <div class="form_item">
                                <label>
                                    <input type="checkbox" name="time_details[]" value="Full">
                                    <span>Full Time</span>
                                </label>
                            </div>
                            <div class="form_item">
                                <label>
                                    <input type="checkbox" name="time_details[]" value="Part">
                                    <span>Part Time</span>
                                </label>
                            </div>   
                            <div class="form_item">
                                <label>
                                    <input type="checkbox" name="time_details[]" value="Freelance">
                                    <span>Freelance</span>
                                </label>
                            </div>  
                            <div class="form_item">
                                <label>
                                    <input type="checkbox" name="time_details[]" value="Contract">
                                    <span>Contract</span>
                                </label>
                            </div>
                        </div>
                        <div class="form_row">
                            <textarea name="skills" placeholder="Skills you Have max 20 from auto select"></textarea>
                        </div>
                        <div class="form_row">
                            <textarea name="about_yourself" placeholder="About Yourself"></textarea>
                        </div>
                        <div class="form_row submit_wrap">
                            <?php
                                 if($no_of_pages!=$page_no)
                                {
                            ?>
                                <div class="submit_btnWrap company_btn"><input type="submit" name="job_submit" id="job_submit" value="Next"></div>
                            <?php
                                } else {
                            ?>
                                <div class="submit_btnWrap company_btn"><input type="submit" name="job_submit" id="job_submit" value="Finish"></div>
                            <?php
                                }
                            ?>
                        </div>
</form>



                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer");?>