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
            <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูล  User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า User</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า User</h6>
                </div>
                <div class="card-body">
                  <form>
                  <div class="form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">
                      </div>
            
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อ</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อผู้ใช้</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">รหัสผ่าน</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ยืนยัน Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">remember_token</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                                   
                      <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ประเภทสินค้า</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    </div>

                   
                    
                   
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{route('user.index')}}" class="btn btn-primary">ย้อนกลับ</a>
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