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
                                <h4 class="card-title">Edit Footer </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('footer.update') }}" >
        	@csrf

            <input type="hidden" name="id" value="{{ $footer->id }}">



   <div class="form-group">
            <label class="info-title">Footer Address </label>
        <textarea name="address" class="form-control" rows="4" id="comment">
            {{ $footer->address }}
        </textarea>
            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>


            <div class="form-group">
                <label class="info-title">Footer Email  </label>
         <input type="email" name="email" class="form-control input-default " value="{{ $footer->email }}"  >
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

               <div class="form-group">
                <label class="info-title">Footer Phone </label>
         <input type="text" name="phone" class="form-control input-default " value="{{ $footer->phone }}"  >
            @error('phone')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


                 <div class="form-group">
                <label class="info-title">facebook </label>
         <input type="text" name="facebook" class="form-control input-default " value="{{ $footer->facebook }}"  >
            @error('facebook')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>



                 <div class="form-group">
                <label class="info-title">youtube </label>
         <input type="text" name="youtube" class="form-control input-default " value="{{ $footer->youtube }}"  >
            @error('youtube')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


                 <div class="form-group">
                <label class="info-title">twitter </label>
         <input type="text" name="twitter" class="form-control input-default " value="{{ $footer->twitter }}"  >
            @error('twitter')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


                <div class="form-group">
                <label class="info-title">Footer Credit </label>
         <input type="text" name="footer_credit" class="form-control input-default " value="{{ $footer->footer_credit }}"  >
            @error('footer_credit')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

       

           <input type="submit" class="btn btn-success" value="Update Footer">
            
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