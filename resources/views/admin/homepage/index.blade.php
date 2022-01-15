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
            <h1 class="h3 mb-0 text-gray-800">หน้า Homepage</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Homepage</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Homepage</h6> <a href="{{route('addhomepage')}}" class="btn btn-success">เพิ่มข้อมูล</a>
                </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>แบบทดสอบข้อมูล</th>
                        <th>สินค้าแนะนำ</th>
                        <th>ชื่อสินค้า</th>
                        <th>รูปภาพ</th>
                        <th>ราคา</th>
                        <th>ผู้สร้างเนื้อหา</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($homepage as $homepages)

                      <tr>
                        <td>{{$homepages->id_homepage}}</td>
                        <td>{{$homepages->information_test}}</td>
                        <td>{{$homepages->recommended_product}}</td>
                        <td>{{$homepages->product_name}}</td>
                        <td>
                          <img src="{{asset('admin/imagehomepage/'.$homepages->image_bg)}}" alt="" style="width:100px">
                        </td>
                        <td>{{number_format($homepages->price)}} บาท</td>
                        <td>{{$homepages->admin->name}}</td>
                        <td><a href="{{url('admin/homepage/edithomepage/'.$homepages->id_homepage)}}" class="btn  btn-warning"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{url('admin/homepage/deletehomepage/'.$homepages->id_homepage)}}" class="btn  btn-danger"><i class="fas fa-trash-alt"></i></a></td>
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


</body>

</html>
