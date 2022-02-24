<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!--	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->

</head>
<body>
  <div class="">
  <table class="table">
  	<thead>
	<tr class="header">
		  <th>PS CODE</th>
          <th>NAME</th>
          <th>POSITION</th>
          <th>VOTERS ID</th>
          <th>GENDER</th>
          <th>PHONE</th>
          <th>PICTURE</th>
          

</tr>
</thead>
	<tbody>
		
   @foreach($pollers as $pollers)
    
<tr style="height40px;" class="{{($loop->iteration % 2 ==0)?'data-cell':'' }}" >
	 <td class="cell">{{$pollers->ps_code}}</td>
     <td class="cell">{{$pollers->name}}</td>
     <td class="cell">{{$pollers->position}}</td>
     <td class="cell">{{$pollers->voter_id}}</td>
     <td class="cell">{{$pollers->gender}}</td>
     <td class="cell">{{$pollers->phone}}</td>
      <td class="cell"><img src="assets/images/profiles/{{$pollers->pic}}" alt="" class="rounded-circle"></td>
     </tr>
    @endforeach
		
	</tbody>
</table>
</div>
</body>
</html>

