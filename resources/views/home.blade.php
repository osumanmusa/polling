
@extends('layouts.homeapp')


@section('content')

      



<div class="container mx-auto">
<div class="container">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-6 card  p-3 mb-5  " style="border-radius: 25px;background:rgba(0,0,0,0.5);">
            <div class="card-body p-4">
                <form action="{{route('search')}}" method="POST">
                    @csrf
             <div class="search mb-4 "><select name="code" type="text" class="form-select input_height" placeholder="Have a question? Ask Now" > 
                <option value="" disabled selected>Select By</option>
                <option value="ea_name">EA NAME</option>
                <option value="ea_code">EA CODE</option>
                <option value="ps_name">POLLING STATION NAME</option>
                <option value="ps_code">POLLING STATION CODE</option>
        </select>
                @if ($errors->has('code'))
            <span class="text-danger">
                <strong>{{ $errors->first('code') }}</strong>
            </span>
        @endif

    </div>
            <div class="search ">
             <input type="text" list="searcher" class="typeahead form-control input_height" name="query" placeholder="Search Here" autocomplete="on">  
             <datalist id="searcher">
              
                @for($i=0; $i<count($datum); $i++ )
                @foreach($datum[$i] as $key => $value)
            <option value={{$value}}></option>
               
                @endforeach
                 @endfor
          </datalist>
     @if ($errors->has('query'))
            <span class="text-danger">
                <strong>{{ $errors->first('query') }}</strong>
            </span>
        @endif

            </div>
            <div class="d-flex  pull-right  mt-4  ">
            <button type="submit" class="btn btn-primary    "style="border-radius: 6px;"><i class="fa fa-search"></i> Search</button> 
        </div>
        </form>
    </div>  
        </div>

        </div>
</div>  
</div>



<!--<script type="text/javascript">

    var path = "{{ route('autocomplete') }}";

    $('input.typeahead').typeahead({

        source:  function (query, process) {

        return $.get(path, { query: query }, function (data) {

                return process(data);

            });

        }

    });

</script> -->
@endsection
