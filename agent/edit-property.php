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
<link rel="stylesheet" href="./css/cutom.css">



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
    
                <div class="row mb-12">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Property</li>
                        </ol>
                    </div>

                </div>

                <div class="row mb-12 d-flex justify-content-between">
                        <h1 class="mx-3">Add New Property </h1>
                    <div class="col-sm-2"><button class=" btn btn-primary btn-small ali">Submit</button></div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        
      
            <div class="container-fluid">
            
      
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <section class="content">
        
                            <!-- <button id="submit-property">Insert rtest</button> -->
                            <!-- <div class="card-header">
                                <h3 class="card-title">Add New Property</h3>
                                
                            </div> -->
                            <!-- /.card-header -->
                            <div class="loader"></div>
                            <div class="card-body">
                            





                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Basic</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Gallery</button>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div>
                                        <div class="tab-content">


                                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                <div class="row">
                                                    <div class="form-group col-md-12">


                                                        <label for="Property Title">Property Title</label>
                                                        <input type="text" class="form-control" id="title" name="title"  aria-describedby="Property Title" placeholder="Enter Property Title">
                                                    </div>

                                                    <!--Google map-->
                                                    <!-- <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div> -->

                                                    <!--Google Maps-->
                                                    <div class="form-group col-md-12">
                                                        <label for="Property Title">Property Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                                                    </div>



                                                    <div class="form-group col-md-4">
                                                        <label for="">Sale or Rent Price</label>
                                                        <input type="number" class="form-control" id="price" placeholder="" name="price">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Old Price <span>(If Any)</span></label>
                                                        <input type="number" class="form-control" id="old_price" placeholder="" name="old_price">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Type</label>
                                                        <select id="type" name="type" class="form-control">
                                                            <option disabled>Please Select</option>
                                                            <option value="sale">Sale</option>
                                                            <option value="rent">Rent</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Location</label>
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Property Type</label>
                                                        <select id="property_type" name="property_type" class="form-control">
                                                            <option  disabled>Please Select</option>
                                                            <option value="apartment">Apartment</option>
                                                            <option value="banglow">Banglow</option>
                                                            <option value="house">House</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Bedrooms</label>
                                                        <input type="number" class="form-control" id="bedrooms" placeholder="" name="bedrooms">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Bathrooms</label>
                                                        <input type="number" class="form-control" id="bathrooms" placeholder="" name="bathrooms">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Garages or Parking Spaces</label>
                                                        <input type="text" class="form-control" id="parking_spaces" placeholder="" name="parking_spaces">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="">Area</label>
                                                        <input type="text" class="form-control" id="area" placeholder="" name="area">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Year Built</label>
                                                        <input type="number" class="form-control" id="year_built" placeholder="" name="year_built">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Plot Size Prefix</label>
                                                        <select id="plot_size_prefix" name="plot_size_prefix" class="form-control">
                                                            <option  disabled>Please Select</option>
                                                            <option>Square Feet</option>
                                                            <option>Yards</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Plot Size</label>
                                                        <input type="number" class="form-control"  id="plot_size" placeholder="" name="plot_size">
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                    <label for="">Select Features</label>
                                                        <select id="feature_ids" class="feature_ids form-control" multiple  name="feature_detail_ids[]">
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                                <div class="row">
                                               
                                                       
                                                    <div class="form-group col-md-12">
                                                        <label for="" class="form-label">Featured Image</label>
                                                        <input type="file" class="form-control" id="featured_image" placeholder="" name="featured_image">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                            <label for="" class="form-label">Image Gallery</label>
                                                            <input type="file" class="form-control image_gallery" id="image_gallery" multiple  placeholder="" name="image_gallery[]">
                                                    </div>

                                                    <h4 class="col-md-12">Featured Image : </h4>
                                                    <div class="col-md-4">
                                                    <img id="featured" width="400" height="400"  src="" alt="Featured_Image">
                                                    </div>

                                                    <h4 class="col-md-12">Image Gallery :</h4>
                                                    <div id="gallery" class="col-md-12">

                                                    </div>

                                                     

                                                </div>
                                          


                                            </div>
                                         
                                      
                                   
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
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

        
        $(".loader").css("display", "block");
        $('.feature_ids').select2();
        let features_arr = [];
        axios.get('<?php echo $host_url; ?>/feature-details').then((res)=>{
            Object.keys(res.data).forEach(key => {
                $('.feature_ids').append('<option value=' + res.data[key]['id'] + '>' + res.data[key]['name'] + '</option>');
                    }); 
        })

        let image_path = '<?php echo $file_path; ?>' ;
        axios.get('<?php echo $host_url; ?>/property/<?php echo $_GET['edit_id']  ?>').then((res)=>{
      
        $('#title').val(res.data.title);    
        $('#description').val(res.data.description);
        $('#price').val(res.data.price);
        $('#property_type option[value="'+res.data.property_type+'"]').attr("selected", true);
        $('#type option[value="'+res.data.type+'"]').attr("selected", true);
        $('#location').val(res.data.location);
        $('#bedrooms').val(res.data.bedrooms);
        $('#bathrooms').val(res.data.bathrooms);
        $('#parking_spaces').val(res.data.parking_spaces);
        $('#area').val(res.data.area);
        $('#year_built').val(res.data.year_built);
        $('#plot_size_prefix option[value="'+res.data.plot_size_prefix+'"]').attr("selected", true);
        $('#plot_size').val(res.data.plot_size);
        $( '#featured' ).attr( 'src', image_path+res.data.property_gallery.featured_image );
        if(res.data.feature_details != null)
        {
            Object.keys(res.data.feature_details).forEach(key => {
                features_arr.push(res.data.feature_details[key]['id'])
            });
        }
        // $("#feature_ids").select2("val", features_arr);
        console.log(features_arr);
        // $("#feature_ids").val(features_arr);
        $('#feature_ids').val(features_arr).trigger('change')
        // features_arr.forEach(function(value,key)
        // {
        //     // console.log(value);
        //     $("#feature_ids").select2("val", value);
        // })
        if(res.data.property_gallery.image_gallery != null)
        {
            let arr = JSON.parse(res.data.property_gallery.image_gallery);
            console.log(arr);
            arr.forEach(function(value,key)
            {
                $("#gallery").append(`<img width="300" height="300" src="`+image_path+value+`" alt="Featured_Image">`);
            })
        }
        $(".loader").css("display", "none");
        })
        
        $('.ali').click(function()
        {
            // console.log(document.getElementById('featured_image').files[0]);
            var formData = new FormData();
            formData.append('_method','PUT');
            formData.append('title',$('#title').val());
            formData.append('description',$('#description').val());
            formData.append('location',$('#description').val());
            formData.append('area',$('#description').val());
            formData.append('price',$('#price').val());
            formData.append('old_price',$('#old_price').val());
            formData.append('type',$('#type').val());
            formData.append('property_type',$('#property_type').val());
            formData.append('bedrooms',$('#bedrooms').val());
            formData.append('bathrooms',$('#bathrooms').val());
            formData.append('parking_spaces',$('#parking_spaces').val());
            formData.append('year_built',$('#year_built').val());
            formData.append('plot_size_prefix',$('#plot_size_prefix').val());
            formData.append('plot_size',$('#plot_size').val());
            $("#feature_ids > option:selected").each(function() {
                formData.append('feature_detail_ids[]', this.value);
            });
            formData.append("featured_image", document.getElementById('featured_image').files[0]);
            //your files should be doing something here
                    var files = document.getElementById('image_gallery').files;
                    //Now turn to files
                    for (var i = 0; i < files.length; i++) {
                    formData.append('image_gallery[]', files[i])
                    }

            axios.post("<?php echo $host_url; ?>/property/<?php echo $_GET['edit_id']  ?>/update", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "Accept" : "application/json"
                },
                }).then((res)=>
                {
                    swal({
                    title: "Listing Edited Successful !",
                    text: "Your Property Has Been Updated Successfully !",
                    type: "success"
                    }).then(function() {
                        window.location = "/jaidad/agent/all-propeties.php";
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

        
        // $("#example1").DataTable({
        //     "responsive": true,
        //     "lengthChange": false,
        //     "autoWidth": false,
        //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
    });
</script>
</body>

</html>