<?php 
session_start();
if(isset($_SESSION['email']))
{
  header('Location:index.php');
}

if(isset($_POST['submit']))
{
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $cnfpassword=$_POST['cnfpassword'];
    echo $cnfpassword;
    if($password == $cnfpassword)
    {
      require('db-conn.php');
        $query="INSERT INTO `users`( `email`, `mobile`, `name`, `password`) values('$email', $mobile, '$name', '$password')";
        
        $run=mysqli_query($conn,$query);
        if(!$run)
        {
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Location:index.php');
    }
    else{
      header('Location:index.php');
    }
    
}

$title='Register';
$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Registration</h2>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
         <!-- start title -->
         
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form method="post" class="contactform">                  
                   <p class="comment-form-author">
                     <label for="author">Name <span class="required">*</span></label>
                     <input type="text" required="required" size="30" value="" name="name">
                   </p>
                   <p class="comment-form-email">
                     <label for="email">Email <span class="required">*</span></label>
                     <input type="email" required="required" aria-required="true"  value="" name="email">
                   </p>
                   <p class="comment-form-email">
                     <label for="mobile">Mobile No. <span class="required">*</span></label>
                     <input type="tel" required="required" aria-required="true" value="" name="mobile">
                   </p>
                   <p class="comment-form-email">
                     <label for="password">Password <span class="required">*</span></label>
                     <input type="password" required="required" aria-required="true" maxlength="15" value="" name="password">
                   </p>    
                   <p class="comment-form-email">
                     <label for="cnfpassword">Confirm-Password <span class="required">*</span></label>
                     <input type="password" required="required" aria-required="true" maxlength="15" value="" name="cnfpassword">
                   </p>           
                   <p class="form-submit">
                     <input class="btn btn-classic" type="submit" value="Submit" class="mu-post-btn" name="submit">
                   </p>        
                 </form>
               </div>
             </div>
             <div class="col-md-6">
               <div class="mu-contact-right">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
             </div>
           </div>
         </div>
         <!-- end contact content -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End contact  -->';

include('master.php')
?>