<?php include("includes/header.php"); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include ("includes/top_nav.php") ?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include ("includes/side_nav.php") ?>


        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        PHOTOS
                        <small>Subheading</small>
                    </h1>
                    
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Id</th>
                                <th>File Name</th>
                                <th>Title</th>
                                <th>Size</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tbody>
                        </table> <!--end of table-->
                    </div>
                    
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>