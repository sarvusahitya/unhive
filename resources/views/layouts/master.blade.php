<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>

    <div id="loader" class="loader loader-block d-none">
        <div class="ring"></div><span>Loading...</span>
    </div>
    <div class="container form-container ">
        @yield('body')

    </div>

</body>

</html>