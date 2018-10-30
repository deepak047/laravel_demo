@include('inc.header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			
		<legend>Courses List</legend>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				@if(session('info'))
				<div class="alert alert-success">
               {{session('info')}}
           </div>
			</div>
			@endif
		</div>
			
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Type</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  	@foreach($refine_array['elements'] as $data )
  	<form class="form-horizontal" method="POST" action="{{url('/add')}}">
  			{{csrf_field()}}
    <tr >
      <th ><input type="hidden" name="id" value="{{$data['id']}}"> {{$data['id']}}</th>
      <td> <input type="hidden" name="name" value="{{$data['name']}}">{{$data['name']}}</td>
      <td> <input type="hidden" name="type" value="{{$data['courseType']}}">{{$data['courseType']}}</td>
      <td>
          <button type="submit" class="btn btn-primary">Save</button>
      </td>
    </tr>
</form>
   @endforeach
  </tbody>
</table> 

	</div>
	</div>
	</div>

@include('inc.footer')