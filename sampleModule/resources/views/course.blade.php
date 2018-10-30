
@include('inc.header')

		<div class="container">
	<div class="row">
		<legend>Courses List</legend>
			
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
  
  	@foreach($carray as $data )
    <tr >
      <th>{{$data['course_id']}}</th>
      <td>{{$data['course_name']}}</td>
      <td>{{$data['course_type']}}</td>
      <td>

      </td>
    </tr>
   @endforeach
  </tbody>
</table> 
	
	</div>
	</div>
		
	

@include('inc.footer')
