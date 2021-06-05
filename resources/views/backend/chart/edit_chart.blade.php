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
                                <h4 class="card-title">Edit Chart </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('chart.update') }}" >
        	@csrf

            <input type="hidden" name="id" value="{{ $chart->id }}">


  

                 <div class="form-group">
                <label class="info-title">  Techonology </label>
         <input type="text" name="Techonology" class="form-control input-default " value="{{ $chart->Techonology }}"  >
            @error('Techonology')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


               <div class="form-group">
                <label class="info-title">  Projects </label>
         <input type="text" name="Projects" class="form-control input-default " value="{{ $chart->Projects }}"  >
            @error('Projects')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

  

           <input type="submit" class="btn btn-success" value="Update Chart">
            
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



 

@endsection 