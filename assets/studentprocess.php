<?php
include('config.php');
$cid=$_GET['info'];
$que=mysqli_query($conn,"select * from student where sID='".$cid."'");
    while($res=mysqli_fetch_array($que))
	                   {
        $a=$res['sUsername'];
        $b=$res['sName'];
        
         $d=$res['semail'];
         
           $g=$res['scontact'];
          
             $i=$res['simage'];
              $j=$res['saddress'];
    }
include 'header.php';

?>
<div class="right_col" role="main">
          <!-- top tiles -->
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Profile</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                 
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/<?php echo $i; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $b; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $j; ?>
                        </li>

                       

                        
                      </ul>

                      
                      <br />

                      <!-- start skills -->
                    
                      
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">
                    
                      <!-- start of user-activity-graph -->
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Profile Data</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form  novalidate method="POST"  enctype="multipart/form-data">
                                       
                                      
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Student ID<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" disabled="" data-validate-length-range="6" data-validate-words="1" name="dptname" value="<?php echo $a; ?>" required="required" />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="3"  name="dptcode"  value="<?php echo $d; ?>" type="text" required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="3" disabled="" name="dptcode" value="<?php echo $j; ?>" type="text" required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Contact<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="3"  name="dptcode" value="<?php echo $g; ?>" type="text" required="required" /></div>
                                        </div>
                                        
                                      <div class="ln_solid">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          


          
        </div>
        <!-- /page content -->



<?php 
include 'footer.php';
?>

