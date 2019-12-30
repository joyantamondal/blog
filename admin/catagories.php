<?php include "includes/admin_header.php" ?>
    <div id="wrapper">
        
 
<!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>
<!-- /Navigation ENd -->
      
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                       
                        <h1 class="page-header">
                            Welcome To Admin Panel
                            <small>Author</small>
                        </h1>
                      <div class="col-xs-6">
                      
                      
<!--                    Insert Catagories Function-->
                       <?php insert_catagories(); ?> 
                        
                         <form action="" method="post">
                            <div class="form-group" >
                               <label for="cat-title">Add Catagories </label>
                                <input class="form-control" type="text" name="cat_title" > 
                            </div>
                            <div class="form-group" >
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Catagory" >
                            </div>
                             
                         </form> 
                   <?php
                       if(isset($_GET['update']))  {
                           $the_cat_id = $_GET['update'];
                           include "includes/update_catagory.php";
                           
                       } 
                          
                          
                          
                          
                          
                    ?>
                      
                    </div>
                         <div class="col-xs-6">

                 <table class="table table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Catagory Title</th>
                                 </tr>
                             </thead>
                        <tbody>
                        
<!--     INSERT QUERY Find all catagory query UPDATE-->
<?php findAllcatagories(); ?>
<!--DELETE CATAGORY-->                       
<?php deleteCatagory(); ?>
                             </tbody>
                         </table>
                         
                      </div>
                    
                    
                </div>
                <!-- /.row -->

            </div>
      
              <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  <?php include "includes/admin_footer.php"; ?> 