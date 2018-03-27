<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>Subheading</small>
        </h1>

        <?php

//        $user = new User();
//
//        $user->username = "will";
//        $user->password = "123";
//        $user->first_name = "will";
//        $user->last_name = "will";
//
//        $user->create();

//            $user = User::find_user_by_id(2);
//            $user->last_name = "Williams";


            $user = User::find_user_by_id(2);
            $user->delete();
        ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->