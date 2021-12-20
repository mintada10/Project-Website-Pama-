@include('layouts.admin.head')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <h1 class="h3 mb-0 text-gray-800">หน้ามูลแก้ไข  Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้าแก้ไข Product</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้าแก้ไข Product</h6>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/product/updateproduct/'.$editproduct->id_product)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="category">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <!-- แสดงผลรูปภาพ -->
                                    <div class="mt-4">
                                    <img id="showImage" src="{{asset('admin/images/'.$editproduct->image)}}" width="150px" >
                                    </div>
                                    <div class="row mt-3">
                                    @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" >
                      <label for="name">ชื่อ</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$editproduct->name}}">
                      <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="price">ราคา</label>
                      <input type="text" class="form-control" id="price" name="price" value="{{$editproduct->price}}">    
                      <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>                
                    </div>

                    <div class="form-group">
                      <label for="id_admin">ผู้สร้างเนื้อหา</label>
                      <input type="text" class="form-control" id="id_admin" name="id_admin"  value="{{$editproduct->id_admin}}">   
                      <div class="row mt-3">
                            @error('id_admin')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>                 
                    </div>
                <!--                                    
                      <div class="form-group">
                    <div class="form-group">
                      <label for="id_pt">ประเภทสินค้า</label>
                      <input type="text" class="form-control" id="	id_pt" name="id_pt"  value="{{$editproduct->id_pt}}">   
                      <div class="row mt-3">
                            @error('id_pt')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>                 
                    </div>
                    </div> -->

                    <div class="form-group">
                        <label>ประเภทสินค้า</label>
                        <select class="form-control" name="id_pt" >
                        <option selected="selected" value="{{$editproduct->id_pt}}">{{$editproduct->typeproduct->name_manu}}</option>
                            @foreach ($typeproducts as $typeproduct)
                            <option value="{{$typeproduct->id_pt}}">{{$typeproduct->name_manu}}</option>
                            @endforeach
                        </select>
                      </div>
                   
                    
                   
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{route('product.index')}}" class="btn btn-primary">ย้อนกลับ</a>
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
 
</body>

</html>