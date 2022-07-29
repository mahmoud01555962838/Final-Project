@extends('layouts.app')

@section('content')
@can('isAdmin')
@include('admin.dashbord')
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('مرحبا بك') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('انت الان عضو ف الموقع هديتك') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection
