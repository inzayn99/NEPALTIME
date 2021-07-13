@extends('frontend.master.master')
@section('content')
    <section>
        <div class="container">

            <h1>welcome {{Auth::guard('web')->user()->username}}</h1>

        </div>


    </section>
    <!---------------------------end partial ---------------------------------->
@endsection
