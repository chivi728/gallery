
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

            $user->username   = "cristi";
            $user->password   = "408066";
            $user->first_name = "Edu";
            $user->last_name  = "don't kmow";

            $user->create();

//            $user = User::find_all_user_by_id(1);
//            $user->username = "chivi";
//            $user->password = "hola";
//            $user->first_name = "Jesus";
//            $user->last_name = "reina";
//            $user->update();

//           $user = User::find_all_user_by_id(8);
//           $user->delete();

//            $user = User::find_all_user_by_id(1);
//            $user->username = "Edu";
//            $user->save();

//            $user = new User();
//            $user->username = "chivi";
//            $user->save();



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