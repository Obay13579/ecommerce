@extends('admin_panel.adminLayout') @section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.categories')}}"> < Back to List</a>
                    <br><br>
                      <h4 class="card-title">Edit Category</h4>
                      <br>
                      <form class="forms-sample" method="post"  id="cat_form">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category name</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Category type</label>
                          <textarea type="textarea" class="form-control" id="type" name="type" >{{$category->type}}</textarea>
                        </div>
                        <input  type="submit" name="updateButton"  class="btn btn-success mr-2" id="updateButton" value="UPDATE" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
    
    <!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#cat_form").validate({
			rules: {
				name: "required",
				type: "required",
				
				
				
			},
			messages: {
				name: "Category name is Required",
				type: "Category type is Required",
                	
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->
@endsection