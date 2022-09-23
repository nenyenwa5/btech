@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    Laravel includes built-in authentication and session services, these features provide cookie-based
                    authentication for requests that are initiated from web browsers. They provide methods that allow you to
                    verify a user's credentials and authenticate the user.

                    In simple terms, Auth short for authentication helps in safeguarding our web page, any block of code 
                    enclosed within auth…endauth are hidden from visitors or users who are not logged in yet.

                    The guest user is a user that is not logged in, the feature will limit what the user can access on the webpage. 
                    The guest feature is used to initiate the authorization process for specific users. 
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
