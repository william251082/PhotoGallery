<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>Subheading</small>
        </h1>

        <?php

        $user = new User();

        $user->username = "willy";
        $user->password = "123";
        $user->first_name = "willy";
        $user->last_name = "willy";

        $user->create();

//            $user = User::find_user_by_id(2);
//            $user->last_name = "Williams";


//            $user = User::find_user_by_id(12);
//            $user->password = "123";
//            $user->save();

//            $user = new User();
//
//            $user->username = "hiWorld";
//            $user->save();

//        $user = User::find_user_by_id(12);
//        $user->delete();

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