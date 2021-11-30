@include('layouts.admin.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">เเก้ไขข้อมูล Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้าแก้ไข Admin</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้าแก้ไข Admin</h6> 
                </div>
                <div class="card-body">
                  <form action="{{url('admin/admin/updateadmin/' .$admin->id_admin)}}" method="post">
                  {{csrf_field()}}
                  
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$admin->name}}" >
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" id="password" name="password" value="{{$admin->password}}" >
                      @error('password')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="Email" name="email" value="{{$admin->email}}">      
                      @error('email')
                      <span class="text-danger">{{$message}}</span>
                      @enderror              
                  </div>



                    <div class="form-group">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-success">Update</button> 
                    <a href="{{route('admin.index')}}" class="btn btn-primary">ย้อนกลับ</a>
                  </form>
                </div>
              </div>

           
              
            </div>

          
          </div>
         
          <!--Row-->

      
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>