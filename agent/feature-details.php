<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | DataTables</title>

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



<!-- <style>
.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style> -->

</head>

<body class="hold-transition sidebar-mini" ng-app="myapp" ng-controller="mycontroller" ng-init="getPropeties()">
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
                            <h1>Main Features</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Features</li>
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
                                <div class=" d-flex justify-content-between">
                                        <h3 style="margin-top:20px;margin-left:20px"  class="card-title">Feature Detailss</h3>
                                        <button  style="margin-top:20px;margin-right:20px" class="btn btn-success add-feature">Add Feature Details</button>
                                    </div>
                                    <!-- <div class="card-header">
                                        <h3 class="card-title">Features</h3>
                                        <button class="add-feature">Add Feature</button>
                                    </div> -->
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Title</th>
                                                    <th>Main Feature</th>
                                                    <th></th>
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
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title">
            <input type="text" class="form-control" id="feature-id" value="" hidden>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <select class="form-control" id="description-feature">

            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary update-feature">Update</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nmae:</label>
            <input type="text" class="form-control" id="feature-detail-name">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Main Feature:</label>
          <select name="feature_id" class="form-control" id="feature_id">
              <option value="none"  disabled selected>Please Select Main Feature</option>
          </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary store-feature">Add</button>
      </div>
    </div>
  </div>
</div>

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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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


<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js" type="text/javascript"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Page specific script -->
<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function(event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })

</script>

<script>



    $(function() {
      axios.get('http://127.0.0.1:8000/api/features').then((res)=>{
        console.log(res.data)
            Object.keys(res.data).forEach(key => {
                $('#feature_id').append('<option value=' + res.data[key]['id'] + '>' + res.data[key]['title'] + '</option>');
                $('#description-feature').append('<option value=' + res.data[key]['id'] + '>' + res.data[key]['title'] + '</option>');
                    }); 
        })
        // axios.get('http://127.0.0.1:8000/api/features').then((res)=>{
        // console.log(res.data)
        //     Object.keys(res.data).forEach(key => {
                
        //             }); 
        // })

        jQuery(document).on('click', '.add-feature', function(event) {
            $('#exampleModal1').modal('show');         

 });
 jQuery(document).on('click', '.store-feature', function(event) {
    var formData = new FormData();
            formData.append('name',$('#feature-detail-name').val());
            formData.append('feature_id',$('#feature_id option:selected').val());
    axios.post('http://127.0.0.1:8000/api/feature-detail', formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "Accept" : "application/json"
                },
                }).then((res)=>
                {
                    swal({
                    title: "Feature Detail Added Successful !",
                    text: "Your Feature Detail Has Been Added Successfully !",
                    type: "success"
                    }).then(function() {
                        $('#exampleModal1').modal('hide');
                        $('#example2').DataTable().ajax.reload();
                    });
                }).catch((error)=>
                {   console.log(error.response.data.errors);
                    let list = '';
                    let count = 0;
                    Object.keys(error.response.data.errors).forEach(key => {
                        count++;
                        list += count + " " + error.response.data.errors[key][0];
                    }); 

                    swal("Error!", list + "", "error");
                });

 });

      
        jQuery(document).on('click', '.edit-feature', function(event) {
          $('#description-feature option:selected').removeAttr('selected');
            $('#exampleModal').modal('show');
            $('#title').val($(this).data('title'));
            // $("#description").val($(this).data('description'));
            $('#description-feature option[value='+$(this).data('description')+']').attr('selected','selected');
            $('#feature-id').val($(this).data('id'));
           

 });

 jQuery(document).on('click', '.update-feature', function(event) {
  console.log($('#title').val());
  console.log($('#description').val());
  console.log($('#feature-id').val());
    var formData = new FormData();
            formData.append('_method','PUT');
            formData.append('name',$('#title').val());
            formData.append('feature_id',$('#description-feature').val());
    axios.post('http://127.0.0.1:8000/api/feature-detail/'+$('#feature-id').val()+"/update", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "Accept" : "application/json"
                },
                }).then((res)=>
                {
                    swal({
                    title: "Feature Edited Successful !",
                    text: "Your Feature Has Been Updated Successfully !",
                    type: "success"
                    }).then(function() {
                        $('#exampleModal').modal('hide');
                        $('#example2').DataTable().ajax.reload();
                    });
                }).catch((error)=>
                {   console.log(error.response.data.errors);
                    let list = '';
                    let count = 0;
                    Object.keys(error.response.data.errors).forEach(key => {
                        count++;
                        list += count + " " + error.response.data.errors[key][0];
                    }); 

                    swal("Error!", list + "", "error");
                });
});

        $('#example2').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'get',
      'ajax': {
          'url':'http://127.0.0.1:8000/api/feature-details/datatable'
      },
      'columns': [
        {data:'id'},
         { data: 'name' },
         {data:'feature.title'},
         {data:'id'},
      ],
      columnDefs: [
      {  targets: 3,
         render: function (data, type, row, meta) {
            return '<button class="edit-feature btn btn-primary btn-small" data-id="'+data+'" data-title="'+row.name+'" data-description="'+row.feature_id+'">Edit</button> <button class="btn btn-danger btn-small"  onClick="deleteFeature('+data+')">Delete</button>';
         }

      }
    ]


        });
    
    });


    function deleteFeature(id)
        {
        swal({
            title: "Are you sure?",
            text: "This Feature Detail Will Be Deleted",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                axios.delete('http://127.0.0.1:8000/api/feature-detail/'+id+'/delete').then((res)=>{
                    swal("Your Feature Is Deleted Successfully !!", {
                        icon: "success",
                        });

                        $('#example2').DataTable().ajax.reload();
                })
              
            } else {
                swal("Your Feature Is Safe !");
            }
        });
        
     }
</script>
</body>

</html>