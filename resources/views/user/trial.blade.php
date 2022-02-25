<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!--	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->
<style>
  .header{
    font-weight: 900;
    color: #ffffff;
    background: #2980b9;
    margin-bottom: 5px;
  }

  body{
  font-family: 'Helvetica Neue', Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
 
    }
.table{
    margin: 0 0 40px 0;
  width: 100%;
 /*box-shadow: 0 1px 3px rgba(0,0,0,0.2);*/
  display: table;
  padding: 10px;
}

    .cell{
      padding: 6px 12px;
  display: table-cell;
    }

    .data-cell{
      background-color: #eeeeee;
    }
td{
  text-align: center;
}
th{
  padding: 10px;
}
   </style>

</head>
<body>
  <div style="text-align:center;">
    <h3>ELECTORAL AREA : {{$search[0]->polling_station_name}}</h3>
    <h3>POLLING STATION : {{$search[0]->EA_NAME}}</h3>
  </div>
  <div class="">
  <table class="table">
  	<thead>
	<tr class="header">
   
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
     
     <td class="cell">{{$pollers->name}}</td>
     <td class="cell">{{$pollers->position}}</td>
     <td class="cell">{{$pollers->voter_id}}</td>
     <td class="cell">{{$pollers->gender}}</td>
     <td class="cell">{{$pollers->phone}}</td>
      <td class="cell"><img src="assets/images/profiles/{{$pollers->pic}}" alt="" class="rounded-circle" width="60" height="50"></td>
     </tr>
    @endforeach
		
	</tbody>
</table>
</div>
</body>
</html>

