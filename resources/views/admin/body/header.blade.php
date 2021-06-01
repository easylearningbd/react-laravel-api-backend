  <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img src="{{ asset('backend/images/logo_white.png')}}">
                 
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		 
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
						 


                            <li class="nav-item dropdown header-profile">


 <a href="{{ route('admin.logout') }}"  >
        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
        <span class="ml-2">Logout </span>
    </a>

    @php

        $id = Auth::user()->id;
        $user = App\Models\User::find($id);
    @endphp
                          

                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
          <img src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" width="20" alt=""/>
					<div class="header-info">
						<span>{{ $user->name }}</span>
						<small>Super Admin</small>
					</div>
                </a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>