@include ('layouts.admin.head')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body id="page-top">
  <div id="wrapper">
  @if (session('success'))
        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'บันทึกข้อมูลเรียบร้อบแล้ว',
            showConfirmButton: false,
            timer: 1800
          })
        </script>
        @endif

        @if (session('update'))
        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'แก้ไขข้อมูลเรียบร้อบแล้ว',
            showConfirmButton: false,
            timer: 1800
          })
        </script>
        @endif

        @if (session('delet'))
        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'ลบข้อมูลเรียบร้อบแล้ว',
            showConfirmButton: false,
            timer: 1800
          })
        </script>
        @endif

        @if (session('error'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'ไม่สามารถลบประเภทสินค้าได้เนื่องจากมีสินค้าอยู่',
                showConfirmButton: false,
                timer: 2500
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
            <h1 class="h3 mb-0 text-gray-800">หน้า Typeproduct</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Typeproduct</li>
            </ol>
          </div>

            

          <div class="row">
            <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">หน้า Typeproduct</h6> <a href="{{route('addtypeproduct')}}" class="btn btn-success">เพิ่มข้อมูล</a>
          </div>

                @if ($typeproduct->count()>0)
            <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>ชื่อเมนู</th>
                        <th>จำนวนสินค้า</th>
                        <th>created_at</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($typeproduct as $showtypeproduct)
                      <tr>
                        <td scope="row">{{$showtypeproduct->id_pt}}</td>
                        <td>{{$showtypeproduct->name_manu}}</td>
                        <td>{{$showtypeproduct->product->count()}}</td>
                        <td>{{$showtypeproduct->created_at}}</td>
                        <td><a href="{{url('admin/type_product/edittypeproduct/'.$showtypeproduct->id_pt)}}" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="{{url('admin/type_product/delettypeproduct/'.$showtypeproduct->id_pt)}}" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

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

  @else
    <div class="alert alert-danger">
      <p>ไม่มีข้อมูลประเภทสินค้า</p>
    </div>
  @endif

               
  


</body>

</html>