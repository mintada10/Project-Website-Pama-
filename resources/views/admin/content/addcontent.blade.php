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
            <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูล  Contents</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Contents</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Content</h6>
                </div>
                <div class="card-body">

                  <form action="{{route('createcontent')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                     
                    <div class="form-group">
                     <label for="category">รูปภาพ</label>
                      <div class="custom-file">
                       <input type="file" class="custom-file-input" name="image" id="image">
                       <label class="custom-file-label" for="image">Choose file</label>
                       <div class="row mt-3">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name">ชื่อ</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="กรอกข้อมูล">
                      <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="price">ราคา</label>
                      <input type="text" class="form-control" id="price" name="price" placeholder="กรอกข้อมูล">    
                      <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>                
                    </div>

                    
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">ผู้สร้างเเนื้อหา</label>
                      <input type="text" class="form-control" id="id_admin" name="id_admin" placeholder="กรอกข้อมูล"> 
                      <div class="row mt-3">
                            @error('id_admin')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>                   
                    </div> -->

                    <div class="form-group">
                        <label>ผู้สร้างเนื้อหา</label>
                        <select class="form-control" name="id_admin" >
                            @foreach ($admins as $admin)
                            <option value="{{$admin->id_admin}}">{{$admin->name}}</option>
                            @endforeach
                        </select>
                      </div>
                   
                    
                   
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{route('content.index')}}" class="btn btn-primary">ย้อนกลับ</a>
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