@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    <script>
                        alert("You are Logged In");
                    </script>
                  <center> <B>  WELCOME DASHBOARD....</B></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection