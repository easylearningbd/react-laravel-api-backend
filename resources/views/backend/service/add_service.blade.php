@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								 
								 
							</div>
							<div class="modal-body">
								 
							</div>
						</div>
					</div>
				</div>




                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            
                             
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        
                    </div>
                </div>



                <!-- row -->
                <div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Service </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
        	@csrf

            <div class="form-group">
                <label class="info-title">Service Name </label>
         <input type="text" name="service_name" class="form-control input-default "  >
            @error('service_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

         <div class="form-group">
            <label class="info-title">Service Description </label>
        <textarea name="service_description" class="form-control" rows="4" id="comment"></textarea>
            @error('service_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
        <input type="file" name="service_logo" class="custom-file-input" id="image">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>


            <div class="form-group">
               <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">
            </div>




           <input type="submit" class="btn btn-success" value="Add Service">
            
        </form>
    </div>
                            </div>
                        </div>
					</div>


					  




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<script type="text/javascript">
	 $(document).ready(function(){
	 	$('#image').change(function(e){
	 		var reader = new FileReader();
	 		reader.onload = function(e){
	 			$('#showImage').attr('src',e.target.result);
	 		}
	 		reader.readAsDataURL(e.target.files['0']);
	 	});
	 });   

</script>


@endsection 