<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Properties</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('./layout/nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?php require_once('./layout/branding.php'); ?>

            <!-- Sidebar -->
            <?php require_once('./layout/sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Properties</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">My Properties</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container pb-5 mt-n2 mt-md-n3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">My Properties </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Title</th>
                                                    <th>Area</th>
                                                    <th>Sale/Rent</th>
                                                    <th>Bedrooms</th>
                                                    <th>Price</th>
                                                    <th>Featured</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                    <!-- <th>Property Status</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Actions</th> -->
                                                </tr>
                                            </thead>
                                            
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                               
                                <!-- /.card -->
                            </div>

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/jszip/jszip.min.js"></script>
    <script src="./plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Page specific script -->
    <script>
        $(function() {

                 jQuery(document).on('change', '.featured_switch', function(event) 
                 {
                    let status = 0;
                    let property_id = $(this).val();
                    if ($(this).is(":checked"))
                    {
                        status = 1;
                    }
                    else {
                        status = 0;
                    }
                    var formData = new FormData();
                    formData.append('status',status);
                    axios.post('http://127.0.0.1:8000/api/property/featured/'+property_id, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                        "Accept" : "application/json"
                    },
                }).then((res)=>{
                    $('#example2').DataTable().ajax.reload();
                })
                }); 
                jQuery(document).on('change', '.status_switch', function(event) 
                 {
                    let status = 0;
                    let property_id = $(this).val();
                    if ($(this).is(":checked"))
                    {
                        status = 1;
                    }
                    else {
                        status = 0;
                    }
                    var formData = new FormData();
                    formData.append('status',status);
                    axios.post('http://127.0.0.1:8000/api/property/status/'+property_id, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                        "Accept" : "application/json"
                    },
                }).then((res)=>{
                    $('#example2').DataTable().ajax.reload();
                })
                }); 

 
            $('#example2').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'get',
      'ajax': {
          'url':'http://127.0.0.1:8000/api/properties'
      },
      'columns': [
        {data:'id'},
         { data: 'title' },
         { data: 'area' },
         { data: 'type' },
         { data: 'bedrooms' },
         { data: 'price' },
         { data: 'feature_id' },
         { data: 'status' },
         {data:'id'},
      ],
      columnDefs: [
        {  targets: 5,
         render: function (data, type, row, meta) {
            return 'Rs. '+data.toFixed(2);
         }

      },
        {  targets: 6,
         render: function (data, type, row, meta) {
            return `<div class="custom-control custom-switch">
        <input type="checkbox" value="`+row.id+`" class="custom-control-input featured_switch" ` + ((data == 1) ? 'checked' : '') + ` id="featured_switch`+row.id+`">
        <label class="custom-control-label" for="featured_switch`+row.id+`"></label>
        </div>`;
         }

      },
      {  targets: 7,
         render: function (data, type, row, meta) {
            return  `<div class="custom-control custom-switch">
        <input type="checkbox"  value="`+row.id+`"  class="custom-control-input status_switch" ` + ((data == 1) ? 'checked' : '') + ` id="status_switch`+row.id+`">
          <label class="custom-control-label" for="status_switch`+row.id+`"></label>
        </div>`;
         }

      },
      {  targets: 8,
         render: function (data, type, row, meta) {
            return '<a class="btn btn-primary btn-xs" href="edit-property.php?edit_id='+data+'">Edit</a> <button class="btn btn-danger btn-xs" onClick="deleteProperty('+data+')">Delete</button>';
         }

      },
    ]
        });


   
    //         axios.get('http://127.0.0.1:8000/api/properties')
    //         .then(function(response)
    //         {
    //             console.log(response);
    //         })
        });
     function deleteProperty(id)
     {
        swal({
            title: "Are you sure?",
            text: "This Property Will Be Deleted",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                axios.delete('http://127.0.0.1:8000/api/property/'+id+'/delete').then((res)=>{
                    swal("Your Listing Is Deleted Successfully !!", {
                        icon: "success",
                        });

                        $('#example2').DataTable().ajax.reload();
                })
              
            } else {
                swal("Your Listing Is Safe !");
            }
        });
     }

    </script>
</body>

</html>