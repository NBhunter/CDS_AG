@extends('admin.admindashboard')
@section('content')

<style type="text/css">

    body{margin-top:20px;
    background-color:#f2f6fc;
    color:#69707a;
    }
    .img-account-profile {
        height: 10rem;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }
    .card .card-header {
        font-weight: 500;
    }
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control, .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .form-select{
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

    }


    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }
    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }

    </style>
<div class="card mb-4">
    <div class="card-header">Thông tin người dùng</div>
    <div class="card-body">
    <form>
@foreach ($User as $key => $user )


    <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Họ tê người dùng</label>
    <input class="form-control" id="Username" type="text" placeholder="Enter user username" value="{{ $user->tennguoidung }}">
    </div>

    <div class="row gx-3 mb-3">

    <div class="col-md-6">
    <label class="small mb-1" for="inputFirstName"></label>
    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
    </div>

    <div class="col-md-6">
    <label class="small mb-1" for="inputLastName">Last name</label>
    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
    </div>
    </div>

    <div class="row gx-3 mb-3">

    <div class="col-md-6">
    <label class="small mb-1" for="inputOrgName">Organization name</label>
    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
    </div>

    <div class="col-md-6">
    <label class="small mb-1" for="inputLocation">Location</label>
    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
    </div>
    </div>

    <div class="mb-3">
    <label class="small mb-1" for="inputEmailAddress">Email address</label>
    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ $user->email }}">
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="inputEmailAddress">Quyền:</label>

        <select class="form-select form-select-lg mb-3 "  >
            @foreach ($Roles as $id => $role )

            @if ($role->id == $user->Role_id)
            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
            @else
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endif



            @endforeach
          </select>

          </div>
    </div>

    </div>

    <button class="btn btn-primary" type="button">Save changes</button>
    @endforeach
    </form>
    </div>
    </div>
    </div>
    <script>
$('.dropdown-el').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('expanded');
  $('#'+$(e.target).attr('for')).prop('checked',true);
});
$(document).click(function() {
  $('.dropdown-el').removeClass('expanded');
});
    </script>
@endsection
