@extends('admin.admindashboard')

@section('video')
<style>
     #myVideo {
        position: fixed;
  top: 0;
  left: 0;
  opacity: 50%;

    }


</style>

<video autoplay muted loop id="myVideo">
    <source src="{{ asset('logout_file/img/bg.mp4') }}" type="video/mp4">
</video>


@endsection
