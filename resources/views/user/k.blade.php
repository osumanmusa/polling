@extends('layouts.layout')
@section('title','')

@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Consult Experts</h3>
            <div class="nk-block-des text-soft">
                <p>Manage Consult Experts</p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <a class="btn btn-primary"
               href="{{ route('consultExperts.create') }}">
                <em class="icon ni ni-plus"></em>
            </a>
        </div><!-- .nk-block-head-content -->
    </div>
</div>


<div class="content">

    <!--@include('flash::message')-->

    <div class="card card-bordered card-stretch">
        <div class="card-inner">
            <div class="card-inner-group">
                <div class="card-body">
                    <!--@include('consult_experts.table')-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection