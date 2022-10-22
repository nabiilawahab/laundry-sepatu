@extends('admin.main.main')

@section('content')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        
    @include('admin.includes.navbar')
    @include('admin.includes.sidebar')
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><i class="fa fa-fw fa-users"></i> Members </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Member</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">List of Member </h5>
                            <div class="card-body"><a class="btn btn-sm btn-success" href="add-member.php"><i class="fa fa-fw fa-user-plus"></i> add member</a><br><br>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>airi@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-success text-white">Selesai</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>angelica@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-success text-white">Selesai</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>ashton@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-success text-white">Selesai</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>bradley@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-warning text-white">Sedang dicuci</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>brenden@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-success text-white">Selesai</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>brielle@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-warning text-white">Sedang dicuci</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>bruno@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-success text-white">Selesai</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>caesar@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-warning text-white">Sedang dicuci</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>cara@gmail.com</td>
                                                <td>09809878978</td>
                                                <td><span class="badge bg-danger text-white">Batal</span></td>
                                                <td class="align-right">
                                                    <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Currency Name</th>
                                                <th>Currency Sysmbol</th>
                                                <th>USD Equivalent</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>


            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
@endsection