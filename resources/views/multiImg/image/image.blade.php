@extends('multiImg.layouts.master')
@section('admin_content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Image</a>
          </li>
          <li class="breadcrumb-item active">MultiImage</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Image List
            <a href="" class="btn btn-warning" style="float: right;"  data-toggle="modal" data-target="#exampleModal">Add New</a>

        </div>

        @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                	
                  <tr>
                    <th> Id</th>
                    <th>Image</th>
                    
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                	
                	<tr>
                		<td></td>
                    
                    <td><img src="" style="height: 70px;width: 100px;"></td>
                    <td>
                      <a href="" class="btn btn-sm btn-info">Edit</a>
                      <a href="" class="btn btn-sm btn-danger" id="#delate">Delete</a>
                    </td>                
                    	</tr>
                	
                </tbody>
                
                </table>
            </div>
          </div>
{{-- <..modal..> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



     <form method="post" action="{{route('store.image')}}" enctype="multipart/form-data">
      	@csrf
    <div class="modal-body">    
  
   <div class="field" align="left">
      <h3>Upload Multiple images</h3>
      <input type="file" id="files" name="image[]" multiple />
   </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>

    </div>
  </div>
</div>


@endsection