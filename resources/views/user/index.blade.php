<!DOCTYPE html>
<html lang="zxx" class="js">

    <head>
        <base href=".">
        <meta charset="utf-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- Page Title  -->
        <title>Home</title>
        <!-- StyleSheets  -->
        <link rel="stylesheet" href={{asset('assets1/css/dashlite.css?ver=2.9.1')}}>
        <link id="skin-default" rel="stylesheet" href={{asset('assets1/css/theme.css?ver=2.9.1')}}>


        <style type="text/css">
            @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

            body {
                background: url("{{asset('assets1/images/good.jpeg')}}");

                font-family: "Poppins", sans-serif;
                font-weight: 300;
                background-size: cover;
            }

            .height {
                height: 100vh
            }

            .search {
                position: relative;

            }
            .input_height{
                height: 40px;
            }
            .search input {


                border: 2px solid #d6d4d4
            }

            .search input:focus {
                box-shadow: none;
                border: 2px solid blue
            }

            .search .fa-search {
                position: absolute;
                top: 20px;
                left: 16px
            }

            .search button {
                position: absolute;
                top: 5px;
                right: 5px;
                height: 50px;
                width: 110px;
                background: blue
            }
        </style>

    </head>

    <body class="nk-body npc-invest bg-lighter ">
        <div class="nk-app-root">
            <!-- wrap @s -->
            <div class="nk-wrap ">

                <div class="container mx-auto">
                    <div class="container">
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col-md-6 card  p-3 mb-5  " style="border-radius: 25px;background:rgba(0,0,0,0.5);">
                                <div class="card-body p-4">
                                    <form action="{{route('search')}}" method="POST">
                                        @csrf
                                        <div class="search mb-4 "><select name="code" type="text" class="form-select input_height" placeholder="" > 

                                                <option value="ea_name" selected>ELECTORAL AREA </option>
                                                <option value="ea_code">ELECTORAL AREA CODE</option>
                                                <option value="ps_name">POLLING STATION </option>
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
                                            <button type="submit" class="btn btn-primary    "style="border-radius: 6px;"><em class="icon ni ni-search"></em>Search</button> 
                                        </div>
                                    </form>
                                </div>  
                            </div>

                        </div>
                    </div>  
                </div>

                <!-- content @e -->


            </div>
            <!-- wrap @e -->
        </div>
        <!-- app-root @e -->

        <!-- JavaScript -->
        <script src={{asset('assets1/js/bundle.js?ver=2.9.1')}}></script>
        <script src={{asset('assets1/js/scripts.js?ver=2.9.1')}}></script>
     
    </body>

</html>