
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;

    }
    
    
    </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

       
     <div class="container" align="center" style="padding-top:100px;">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                X
            </button>
           
            {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('upload_doctor')}}" method="Post" enctype="multipart/form-data"> 
           @csrf
            <div style="padding:15px;">
                <label for=""> Doctor Name</label>
                <input type="text" name="name"  required  placeholder="write the name" style="color: black">

            </div>

            <div style="padding:15px;">
                <label for=""> Phone</label>
                <input type="number" name="number"  required placeholder="write the number" style="color: black">

            </div>

            <div style="padding:15px;">
                <label for="">Speciality</label>
                <select name="speciality" required  style="color:black; width:200px">
                    <option value="">--select--</option>
                    <option value="skin">Skin</option>
                    <option value="heart"> Heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                </select>
            </div>
            <div style="padding:15px; ">
                <label for=""> Room No</label>
                <input type="text" name="room" required placeholder="write the room number" style="color:black">

            </div>
            <div style="padding:15px;">
                <label for=""> Doctor Image</label>
                <input type="file" name="file" required >

            </div>

            <div style="padding:15px;">
            
                <input type="submit" class="btn btn-success">
            </div>
        </form>
     </div>
      </div>
        <!-- partial -->
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>