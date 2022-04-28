@extends('layouts.dashboardmain')
@section('containerfluid')
 <!-- Container fluid -->
 <div class="container-fluid">
    <h1>Wellcome, {{ auth()->user()->name }}!!</h1>
</div>
@endsection
