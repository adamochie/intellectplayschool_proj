<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>attendance</title><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css"><link rel="stylesheet" href="assets/css/styles.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"></head><body><div id="wrapper"><nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"><div class="container-fluid p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div><div class="sidebar-brand-text mx-3"><span>Brand</span></div></a><hr class="sidebar-divider my-0"><ul class="navbar-nav text-light" id="accordionSidebar"><li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li><li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li><li class="nav-item"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li><li class="nav-item"><a class="nav-link active" href="attendance.html"><i class="fas fa-window-maximize"></i><span>Attendance (Teachers)</span></a><a class="nav-link" href="parents_attendance.html"><i class="fas fa-window-maximize"></i><span>Attendance (Parents)</span></a></li></ul><div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div></div></nav><div class="d-flex flex-column" id="content-wrapper"><div id="content"><nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"><div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search"><div class="input-group"><input class="bg-light border-0 form-control form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div></form><ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul></div></nav>
                    
<div class="container-fluid"><h3 class="text-dark mb-1">Teacher attendance</h3></div>
    <div><section class="mt-4">
        <div class="container-fluid">
            <div class="row"><div class="col"><div class="card shadow">
            <div class="card-header py-2"><p class="lead text-info m-0">Teacher Absence Date&nbsp;<br></p></div>
            <div class="card-body"><div class="table-responsive table mb-0 pt-3 pe-2"><div>
            <table class="table table-striped table-sm my-0 mydatatable">
                
            <thead>
                <tr>
                    <th>Absence Date</th>
                    <th>Action</th>
                </tr>
            </thead>
                
            <tbody>
        
        <?php
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current_date = date("Y-m-d");

            //connect to database
            include("dbconnect.php");

            //query to select all son from the database
            $query = "SELECT * FROM attendance WHERE acc_ID = 123 AND att_Type = 0" ;
            $result = mysqli_query($con, $query);

            //loop through the result and create a new row for each son
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>"; //time history before
                if (strtotime($row['att_Date']) < strtotime($current_date)) {
                    echo "<td>" . $row['att_Date'] ."</td>";
                    echo '<td><button class="btn btn-danger disabled" style="margin-left:5px;" type="submit" ><i class="far fa-edit" style="font-size:15px;"></i></button><div class="btn-group" role="group"></div></td>';
                } elseif (strtotime($row['att_Date']) > strtotime($current_date)) {// time lebih from current
                    echo "<td>" . $row['att_Date'] ." tak logik</td>";
                    echo '<td><button class="btn btn-danger disabled" style="margin-left:5px;" type="submit" ><i class="far fa-edit" style="font-size:15px;"></i></button><div class="btn-group" role="group"></div></td>';
                } else { //time same - can edit from see to unsee
                    echo "<td>" . $row['att_Date'] ."</td>";
                    echo '<td><a class="btn btn-danger" style="margin-left:5px;" role="button" data-bss-hover-animate="pulse" href="teacher_attendance.php"><i class="far fa-edit" style="font-size:15px;"></i></a></td>';
                }
            }
        ?>
            </tbody>
            </table></div><br></div>
            
            <a class="btn btn-primary btn-sm text-truncate shadow-none float-end tenant-continue-btn" role="button" href="attendance.html" style="height: 51px;margin: 6px;padding: 11px 8px;">Attendance Menu &nbsp;<i class="fas fa-home continue-icon"></i></a>
        
        </div></div></div></div></div></section></div></div>

<footer class="bg-white sticky-footer"><div class="container my-auto"><div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div></div></footer></div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script><script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script><script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script><script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script><script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script><script src="assets/js/script.min.js"></script></body></html>