<?php $this->load->view("common/header");?>
<?php
     echo "Page ". $page_no;
     echo "<br>no_of_pages".$no_of_pages;
    //exit;
 //   echo "no_of_pages".$no_of_pages;
?>
<?php
   $user_id = $this->session->userdata('username');
  
?>
This is dash board page.
<?php $this->load->view("common/footer");?>