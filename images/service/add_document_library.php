<?php 
session_start()
?>
<?php 
 include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
          <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
    <script>
     function change_status(status_id)
     {
	
window.location = "document_library_process2.php?status_id="+status_id;
     }
     </script>
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
            <?php include("include/header.php"); ?>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                    <div class="pageheader hidden-xs">
                        <h3><i class="fa fa-home"></i>Add  Document Library Page </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="dashbord.php"> Home </a> </li>
                                <li class="active"> Document Library</li>
                            </ol>
                        </div>
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
              <div id="page-content">
                       <div class="row">
                            <div class="eq-height">
                                <div class="col-sm-6 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                            </div>
                                            <?php
                    $document_library_id=$_REQUEST['document_library_id'];
                    $update_blog=mysqli_query($con,"SELECT dl.document_library_id,dl.document_library_category_id,dl.document_library_title,dl.document_library_image,dl.document_library_desc,dl.document_library_lock,dl.document_library_docx,dl.document_library_pdf,dl.status,dlc.document_library_category_id,dlc.document_library_category_name FROM document_library dl JOIN document_library_category dlc on dlc.document_library_category_id=dl.document_library_category_id where dl.document_library_id=$document_library_id");
                    $data=mysqli_fetch_assoc($update_blog);
				$lock=$data['document_library_lock'];
                    if($_REQUEST['document_library_id'])
                    {
                    ?>
                                             <h3 class="panel-title">Update Document Library List Form</h3>
                                            <?php
                    }
                    else
                    {
                    ?>
                                            <h3 class="panel-title">Add Document Library List Form</h3>
                                            <?php
                    }
                    ?>
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                    <form name="frm" action="lib/document_labrary.php" method="post" enctype="multipart/form-data">
                                               <div class="panel-body">
                                                <div class="row">
                                                <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"> Select Document Library Category </label>
                                                           
                                                            <?php
                                                           if($document_library_id)
                                                             {
                                                             ?>
                                                            <select name="document_library_category_id" class="form-control" > <option value="<?php echo $data['document_library_category_id']; ?>"><?php echo $data['document_library_category_name']; ?></option>
                                                              <?php 
                    
                                              $view_sql = mysqli_query($con,"select * from document_library_category");
                                              while($about_data = mysqli_fetch_array($view_sql))
                                              {
                                              ?>
                                                  <option value="<?php echo $about_data['document_library_category_id']; ?>"><?php echo $about_data['document_library_category_name']; ?></option>
                                                             <?php
                                                              }
                                                              ?>
                                                              
                                                              
                                                         
                                                              
                                                              
                                                             </select>
                                                            <?php
                                                             }
                                                             else
                                                             {
                                                             ?>
                                                             <select name="document_library_category_id" class="form-control">
                                                             <option value="">Select Document Library Category</option>
                                                              <?php 
                    
                                              $view_sql = mysqli_query($con,"select * from document_library_category");
                                              while($about_data = mysqli_fetch_array($view_sql))
                                              {
                                              ?>
                                                  <option value="<?php echo $about_data['document_library_category_id']; ?>"><?php echo $about_data['document_library_category_name']; ?></option>
                                              <?php
                                               }
                                               ?>
                                               
                                              
                                               
                                               
                                               
                                                             </select>
                                                             <?php
                                                            }
                                                            ?>
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Title</label>
                                                            <?php
                        if($document_library_id)
                        {
                        ?>
                                                            <input type="text" name="document_library_title" class="form-control" value="<?php echo $data['document_library_title']; ?>" required>                                     <?php
                        }
                        else
                        {
                        ?>
                                                            <input type="text" name="document_library_title" class="form-control" required>                                    
                                                            <?php
                        }
                        ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Image</label>
                                                            <?php
                        if($document_library_id)
                        {
                        ?>
                                                            <input type="file" name="document_library_image" class="form-control" value="<?php echo $data['document_library_image']; ?>">                                    
                        <img src="images/service/<?php echo $data['document_library_image']; ?>" height="70" width="70"/>
                        <?php
                        }
                        else
                        {
                        ?>
                                                            <input type="file" name="document_library_image" class="form-control" required>                                    
                                                            <?php
                        }
                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload PDF FIle</label>
                                                            <?php
                        if($document_library_id)
                        {
                        ?>
                                                            <input type="file" name="document_library_pdf" class="form-control" value="<?php echo $data['document_library_pdf']; ?>">                                    
                        <img src="images/service/<?php echo $data['document_library_pdf']; ?>" height="70" width="70"/>
                        <?php
                        }
                        else
                        {
                        ?>
                                                            <input type="file" name="document_library_pdf" class="form-control" required>                                    
                                                            <?php
                        }
                        ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload docx File</label>
                                                            <?php
                        if($document_library_id)
                        {
                        ?>
                                                            <input type="file" name="document_library_docx" class="form-control" value="<?php echo $data['document_library_docx']; ?>">                                    
                        <img src="images/service/<?php echo $data['document_library_docx']; ?>" height="70" width="70"/>
                        <?php
                        }
                        else
                        {
                        ?>
                                                            <input type="file" name="document_library_docx" class="form-control" required>                                    
                                                            <?php
                        }
                        ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"> Lock/UnLock </label>
                                                           
                                                            <?php
												  if($document_library_id=='0')
												  {
                                                             if($lock=='0')
                                                             {
                                                             ?>
                                                            <select name="document_library_lock" class="form-control"> 
                                                            <option value="0">Unlock</option>
                                                            <option value="1">lock</option>
                                                              <?php
												  }
												  else if($lock=='1')
												  {
												  ?>
                                                              <option value="1">lock</option>
                                                               <option value="0">Unlock</option>
                                                            
                                                             <?php
                                                              }
												  else
												  {
                                                              ?>
                                                              <option value="1">lock</option>
                                                               <option value="0">Unlock</option>
                                                              <?php
												  }
												  ?>
                                                              
                                                         
                                                              
                                                              
                                                             </select>
                                                            <?php
                                                             }
                                                             else
                                                             {
                                                             ?>
                                                             <select name="document_library_lock" class="form-control">
                                                            <option value="1">lock</option>
                                                               <option value="0">Unlock</option>
                                                             </select>
                                                             <?php
                                                            }
                                                            ?>
                                                         </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Description</label>                                                          <?php
                        if($document_library_id)
                        {
                        ?>
                                                            <textarea   name="document_library_desc" class="ckeditor" ><?php echo $data['document_library_desc']; ?></textarea>            <?php
                        }
                        else
                        {
                        ?>
                                                            <textarea   name="document_library_desc" class="ckeditor" ></textarea>
                                                            <?php
                                                              }
                                                             ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                            </div>
                                            <div class="panel-footer text-right">
                                            <?php
                  if($document_library_id)
                  {
                  ?>
                                             <input type="hidden" name="document_library_id" value="<?php echo $document_library_id; ?>"/>
                                             <input type="hidden" name="document_library_image" value="<?php echo $data['document_library_image']; ?>"/>
                                             <input type="hidden" name="document_library_docx" value="<?php echo $data['document_library_docx']; ?>"/>
                                             <input type="hidden" name="document_library_pdf" value="<?php echo $data['document_library_pdf']; ?>"/>
                                            <input name="update" value="Update" class="btn btn-info" type="submit" />                                         <?php
                    }
                    else
                    {
                    ?>
                                            <input name="submit" value="Save" class="btn btn-info" type="submit" />                                
                                            <?php
                    }
                    ?>
                                             
                                            </div>
                                        </form>
                                     
                                        <!--===================================================-->
                                        <!--End Block Styled Form -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                          
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong>Document Library List</strong>
                                            <div class="form-group pull-right">
                                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control custmr-search" autocomplete="off" >
                                                
                                            </div>
                                            </h3> 
                                        </div>
                                        <!--Data Table-->
                                        <!--===================================================-->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Document Category</th>
                                                            <th>Document Title</th>
                                                            <th>Word File</th>
                                                            <th>PDF File</th>
                                                            <th>Image</th>
                                                            <th>Document Description</th>
                                                            <th>Lock / Unlock</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                    $i=1;
                                           $view_sql = mysqli_query($con,"SELECT dl.document_library_id,dl.document_library_category_id,dl.document_library_title,dl.document_library_image,dl.document_library_desc,dl.document_library_lock,dl.document_library_docx,dl.document_library_pdf,dl.status,dlc.document_library_category_id,dlc.document_library_category_name FROM document_library dl JOIN document_library_category dlc on dlc.document_library_category_id=dl.document_library_category_id");
                                           while($about_data = mysqli_fetch_array($view_sql))
                                           {
                                           ?>
                                            <tr>
                                               <td><?php echo $i;?></td>
                                                <td> <?php echo $about_data['document_library_category_name']; ?></td>
                                                <td><?php echo $about_data['document_library_title']; ?></td>
                                                 <td><?php echo $about_data['document_library_docx']; ?></td>
                                                  <td><?php echo $about_data['document_library_pdf']; ?></td>
                                                <td><img src="<?php echo "images/service/".$about_data['document_library_image']; ?>" height="80" width="80"/></td>
                                                <td><?php echo $about_data['document_library_desc']; ?></td>
                                                
                                                
                                                <td><?php if($about_data['document_library_lock']==0) {?>
                <a href="#" style="text-decoration:none;" onClick="change_status(<?=$about_data['document_library_id']?>)" class="approved" >Unlock</a>
                <?php }else{?> 
                <a href="#" style="text-decoration:none; color:#000" onClick="change_status(<?=$about_data['document_library_id']?>)" class="ico_pending">Lock</a>
                <?php }?> </td>
                                                
                                                 
                                                 <td><?php if($about_data['status']==0) {?>
                <a href="#" style="text-decoration:none;" onClick="change_status(<?=$about_data['document_library_id']?>)" class="approved" >Active</a>
                <?php }else{?> 
                <a href="#" style="text-decoration:none; color:#000" onClick="change_status(<?=$about_data['document_library_id']?>)" class="ico_pending">Deactive</a>
                <?php }?> </td>
                                               <td><div class="btn-group">
                                                <a href="add_document_library.php?document_library_id=<?php echo $about_data['document_library_id']; ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> Edit </a>
                                                </div>
                                                 </td>
                                                  </tr>
                                                 <?php
                    $i++;
                    }
                    ?>
                                                 </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--===================================================-->
                                        <!--End Data Table-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->

            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <?php include("includes/footer.php"); ?>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="plugins/metismenu/metismenu.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="plugins/metismenu/metismenu.min.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/form-layout.js"></script>
    </body>

</html>