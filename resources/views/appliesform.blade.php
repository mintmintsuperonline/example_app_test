<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Apply Xin Việc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style> body {padding: 20px}</style>
  </head>
  <body>

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </div>

  @endif

  @if ($message = Session::has('success'))
  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Alert!</h5>

      {{ Session::get('success') }}
  </div>
    
  @endif


  @if ($message = Session::has('error'))
  <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Alert!</h5>

      {{ Session::get('error') }}
  </div>

  @endif
    <div class="container">
      <h2 class="text-center">Form Apply Xin Việc Công Ty X</h2>
      <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="chinhanh">Chi nhánh:</label>
          <select class="form-control" id="chinhanh" name="branches_id">
            <option value="">Vui lòng chọn chi nhánh muốn làm việc</option>
            @foreach($branches as $branch)
            <option value="{{$branch->id}}">{{$branch->branch_name}}</option>

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tenchinhanh">Tên chi nhánh:</label>
          <input type="text" class="form-control" id="tenchinhanh" name="branch_name" readonly />
        </div>
        <div class="form-group">
          <label for="diachichinhanh">Địa chỉ chi nhánh:</label>
          <input type="text" class="form-control" id="diachichinhanh" name="branch_address" readonly />
        </div>
        <div class="form-group">
          <label for="hoten">Họ tên:</label>
          <input type="text" class="form-control" id="hoten" name="name" value="{{old('name')}}" />
        </div>
        <div class="form-group">
          <label for="diachi">Địa chỉ:</label>
          <input type="text" class="form-control" id="diachi" name="address" value="{{old('address')}}"  />
        </div>
        <div class="form-group">
          <label for="dienthoai">Điện thoại:</label>
          <input type="tel" class="form-control" id="dienthoai" name="telephone" value="{{old('telephone')}}"  />
        </div>
        <div class="form-group">
          <label for="hinhanh">Hình ảnh:</label>
          <input type="file" class="form-control-file" name="image" id="hinhanh" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <script type="text/javascript">
      $(document).ready(function(){
        $("select[name='branches_id']").change(function(){
          var branchesID = $(this).val();
          // console.log(branchesID);
          
          $.get(`http://127.0.0.1:8000/get-branch/${branchesID}`,function(data){
            console.log(data);
          })

        })
      });
    </script>
  
  </body>
</html>
