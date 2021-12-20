@include ('layouts.admin.head')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body id="page-top">
  <div id="wrapper">
  @if (session('typeproduct'))
        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'ต้องมีประเภทสินค้าอย่างน้อย 1 รายการ',
            showConfirmButton: false,
            timer: 1800
          })
        </script>
        @endif
    <!-- Sidebar -->
    @include ('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include ('layouts.admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูล  Typeproduct</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Typeproduct</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Typeproduct</h6>
                </div>
                <div class="card-body">
                <form action="{{route('createtypeproduct')}}" method="post">
                {{csrf_field()}}

                  <div class="form-group">
                      <label for="name_manu">Namemenu</label>
                      <input type="text" class="form-control" id="name_manu" name="name_manu" placeholder="กรอกข้อมูล">
                      </div>
                      <div class="form-group">
                      @error('name_manu')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>
                 
                    <button type="submit" name="submit" class="btn btn-success">Submit</button> 
                    <a href="{{route('type_product.index')}}" class="btn btn-primary">ย้อนกลับ</a>
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
      @include ('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>