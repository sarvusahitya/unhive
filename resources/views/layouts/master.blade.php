<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>

    <div id="loader" class="loader loader-block d-none">
        <div class="ring"></div><span>Loading...</span>
    </div>
    <div class="body">
        <center><img src="{{URL::asset('resources')}}/assets/images/logo/logo.png" width="200"></center>
        @yield('body')

    </div>

</body>

</html>