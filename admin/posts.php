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
<!--                        Posts Table View -->
 <?php 
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }
     else
     {
         $source = '';
     }



  switch($source ){
          case 'add_post';
           include "includes/add_post.php";
          break;
          case 'update_post';
           include "includes/update_post.php";
          break;
           case '200';
          echo "Nice 200";
          break;
         default:
          include "includes/view_all_post.php";
          break;
  }

    
?>
    
                               
                </div>
                <!-- /.row -->

            </div>
      
              <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  <?php include "includes/admin_footer.php"; ?> 