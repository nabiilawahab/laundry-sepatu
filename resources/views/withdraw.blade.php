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
                            <h2 class="pageheader-title"><i class="fa fa-fw fa-piggy-bank"></i> Withdrawal Transactions </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Withdraw</a></li>
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
                            <h5 class="card-header">List of Withdraw Transactions </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Transaction Code</th>
                                                <th>Member</th>
                                                <th>Amount</th>
                                                <th>Charge</th>
                                                <th>To Receive</th>
                                                <th>Date/Time</th>
                                                <th>Method</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TRSCTN-234-21</td>
                                                <td>Brielle Williamson</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>to receive</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td><img src="../assets/images/paymaya.png" width="50"/></td>
                                                <td><span class="badge bg-success text-white">active</span></td>
                                                <td>Remarks</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">approve</button>
                                                <button class="btn btn-sm btn-danger" type="submit">reject</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TRSCTN-375-21</td>
                                                <td>Angelica Ramos</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>to receive</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td><img src="../assets/images/gcash.png" width="70"/></td>
                                                <td><span class="badge bg-success text-white">active</span></td>
                                                <td>Remarks</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">approve</button>
                                                <button class="btn btn-sm btn-danger" type="submit">reject</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TRSCTN-897-21</td>
                                                <td>Ashton Cox</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>to receive</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td><img src="../assets/images/gcash.png" width="70"/></td>
                                                <td><span class="badge bg-success text-white">active</span></td>
                                                <td>Remarks</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">approve</button>
                                                <button class="btn btn-sm btn-danger" type="submit">reject</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TRSCTN-567-21</td>
                                                <td>Bradley Greer</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>to receive</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td><img src="../assets/images/paypal.png" width="70"/></td>
                                                <td><span class="badge bg-success text-white">active</span></td>
                                                <td>Remarks</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">approve</button>
                                                <button class="btn btn-sm btn-danger" type="submit">reject</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TRSCTN-345-21</td>
                                                <td>Brenden Wagner</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>to receive</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td><img src="../assets/images/coins.ph.png" width="60"/></td>
                                                <td><span class="badge bg-success text-white">active</span></td>
                                                <td>Remarks</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">approve</button>
                                                <button class="btn btn-sm btn-danger" type="submit">reject</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Transaction Code</th>
                                                <th>Member</th>
                                                <th>Deposit Amount</th>
                                                <th>Currency</th>
                                                <th>Date/Time</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
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
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
@endsection
