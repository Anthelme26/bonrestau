@extends('layouts.page')
@section('tittle', 'Dashboard')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('content')
<script src="{{asset('assets/js/count.js')}}"></script>
    <style>
      .dashboard{
        width: 100%;
        height: 100%;
      }
    </style>
    <div class="container">
        <div class="dashboard">
          @if(Auth::check() && Auth::user()->user_type === "admin" && isset($clients))
             @include('admin.dashboard',[
             'clients' =>$clients,
             'counts'=>$counts,
             'coupons'=>$coupons,
             'coupons_up'=>$coupons_up,
             'qteV'=>$qteV,
             'qteT'=>$qteT,
             'ventes'=>$ventes,
             'bmsc'=>$bmsc])
          
             @include('clients.users',['trans'=>$trans])
          @else
             @include('clients.dashboard')
          @endif
      

        
 
        
</div>
</div>



@endsection
