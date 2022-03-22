<html>

<head>
    <style>
        body,
        html {
            height: 100%;
        }

        /*
 * Off Canvas sidebar at medium breakpoint
 * --------------------------------------------------
 */
        @media screen and (max-width: 992px) {

            .row-offcanvas {
                position: relative;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }

            .row-offcanvas-left .sidebar-offcanvas {
                left: -33%;
            }

            .row-offcanvas-left.active {
                left: 33%;
                margin-left: -6px;
            }

            .sidebar-offcanvas {
                position: absolute;
                top: 0;
                width: 33%;
                height: 100%;
            }
        }

        /*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */
        @media screen and (max-width: 34em) {
            .row-offcanvas-left .sidebar-offcanvas {
                left: -45%;
            }

            .row-offcanvas-left.active {
                left: 45%;
                margin-left: -6px;
            }

            .sidebar-offcanvas {
                width: 45%;
            }
        }

        .card {
            overflow: hidden;
        }

        .card-body .rotate {
            z-index: 8;
            float: right;
            height: 100%;
        }

        .card-body .rotate i {
            color: rgba(20, 20, 20, 0.15);
            position: absolute;
            left: 0;
            left: auto;
            right: -10px;
            bottom: 0;
            display: block;
            -webkit-transform: rotate(-44deg);
            -moz-transform: rotate(-44deg);
            -o-transform: rotate(-44deg);
            -ms-transform: rotate(-44deg);
            transform: rotate(-44deg);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" title="Free Bootstrap 4 Admin Template">WELCOME</a>
            <h4 class="navbar-brand" style="color: white;">
                <?php $abc =  $this->session->userdata('email');
                
                echo $abc; ?></h4>

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#myAlert" data-toggle="collapse"></a>
                </li>
                <li class="nav-item">
                    <h4> <a style="color:black;" class="nav-link" href="<?php echo base_url('logout') ?>">LogOut</a>

                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" id="main">
        
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                <?php
               // print_r($done);exit;
                if($done == "")
                { ?>    
                <h4>
                <button><a class="nav-item"><a class="nav-link" href="<?php echo base_url('quepage') ?>">Question/Answer</a></button>    
                    </h4>
                    </li>
                    <?php 
                    }
                    ?>




                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1"></a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href=""></a></li>
                            <li class="nav-item"><a class="nav-link" href=""></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                </ul>
            </div>
            <!--/col-->

            <!--/.container-->
            <footer class="container-fluid">
                <p class="text-right small"></p>
            </footer>


            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>This is a dashboard layout for Bootstrap 4. This is an example of the Modal component which you can use to show content. Any content can be placed inside the modal and it can use the Bootstrap grid classes.</p>
                            <p>
                                <a href="https://www.codeply.com/go/KrUO8QpyXP" target="_ext">Grab the code at Codeply</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col main pt-5 mt-3">
                <h1 class="display-4 d-none d-sm-block">
                    DATA'S </h1>
            </div>

            <div class="col main pt-5 mt-3">
                <table style="width: 100%; background-color: white" border="5" id="demo">

                    <thead>
                        <th>id</th>
                        <th>schoolname</th>
                        <th>petname</th>
                        <th>cricketer</th>
                        <th>usermail</th>
                        <th>points</th>
                    </thead>
                    <tbody>
                        <?php
                        $id = 1;
                        $id_sel =  $this->session->userdata('id');
                        // echo "<pre>"; print_r($abc); exit;
                        
                        //echo $id_sel;

                        //echo "<pre>";print_r($file);exit;
                        foreach ($file as $row) {
                        ?>

                            <tr>

                                <td><?php echo $id ?></td>
                                <td><?php echo $row['schoolname']; ?></td>
                                <td><?php echo $row['petname']; ?></td>
                                <td><?php echo $row['cricketer']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['point']; ?></td>

                            <?php
                            $id++;
                        }
                            ?>

                    </tbody>

            </div>


        </div>

    </div>
</body>
</table>


</html>