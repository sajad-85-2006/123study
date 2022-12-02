@extends('web.layouts.app')

@section('content')<!-- Start Page-title Area -->
<div>
    <div style="width: 94%;
padding: 20px;
border-bottom: 2px solid gainsboro;
margin: 23px auto;
display: block;">
        <h2 style="color: #adadad">You Are Search:{{$search}}</h2>
    </div>
    <div>
        <div style="margin: 10px auto;
display: block;
width: 94%;" class="card">
            <div class="card-header">
                <h3>product</h3>
            </div>
            <div class="card-body">
                <p>body</p>
            </div>
        </div>
    </div>
</div>
@endsection
