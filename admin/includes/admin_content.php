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

        $user->username = "Suave";
        $user->password = "123";
        $user->first_name = "Rica";
        $user->last_name = "Suaves";

        $user->create();

//            $found_user = User::find_user_by_id(2);
//            echo $found_user->username;
        ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
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