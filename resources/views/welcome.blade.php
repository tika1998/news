@extends('layouts.index')

@section('content')
    <div class="col-lg-8 col-md-8 col-sm-8">
        @include('inclouds.slide')
    </div>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                @include('inclouds.category')
            </div>
            @include('inclouds.popularPosts')
        </div>
    </section>
@endsection
