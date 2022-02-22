<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
  <table class="table table-striped table-bordered">
  	<thead>
	<tr>
		 <th>EA CODE</th>
          <th>EA NAME</th>
          <th>POSITION</th>
          <th>VOTERS_IDE</th>
          <th>GENDER</th>
          <th>PHONE</th>
          <th>PICTURE</th>
          

</tr>
</thead>
	<tbody>
		
   @foreach($pollers as $pollers)
<tr style="height40px;">
	 <td>{{$pollers->ps_code}}</td>
     <td>{{$pollers->name}}</td>
     <td>{{$pollers->position}}</td>
     <td>{{$pollers->voter_id}}</td>
     <td>{{$pollers->gender}}</td>
     <td>{{$pollers->phone}}</td>
      <td><img src="assets/images/profiles/{{$pollers->pic}}" alt="" class="rounded-circle" width="60" height="50"></td>
     </tr>
    @endforeach
		
	</tbody>
</table>
</body>
</html>

