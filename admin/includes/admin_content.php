
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN  <small>Subheading</small>
                        </h1>

                        <?php

                        //
                        // $result_set = User::find_all_users();
                        //
                        // while ($row = mysqli_fetch_array($result_set)) {
                        //   echo $row['username'] . "<br>";
                        // }

                        // $found_user = User::find_users_by_id(3);
                        //
                        // $user = User::instantation($found_user);
                        //
                        //
                        //
                        // echo $user->id;

                        // $users = User::find_all();
                        //
                        // foreach ($users as $user) {
                        //   echo $user->username ."<br>";
                        // }


                        //find by id
                        // $found_user = User::find_user_by_id(2);
                        //
                        // echo $found_user->username;



                        $user = new User();

                        $user->username = "jujdjgiud";
                        $user->password = "jujdjgiud";
                        $user->first_name = "jujdjgiud";
                        $user->last_name = "jujdjgiud";

                        $user->create();

                        // $user = User::find_user_by_id(8);
                        // $user->username = "jujdjgiud";
                        // $user->password = "jujdjgiud";
                        // $user->first_name = "jujdjgiud";
                        // $user->last_name = "TAKAKOMBORERWA";
                        //
                        // $user->update()

                        // $user = User::find_user_by_id(5);
                        // $user->delete();

                        // $user = new User();
                        // $user->username = "tindo";
                        //
                        // $user->save();



                         ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                              <i class="fa fa_file"></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->
