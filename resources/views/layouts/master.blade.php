<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('master_layout_title', 'Default Title')</title> <!-- Default title -->

    @include('layouts.link') <!-- CSS links -->
    @yield('extra_link') <!-- Additional CSS links specific to the view -->

    <meta name="description" content="@yield('meta_description', 'Default description for the page.')"> <!-- SEO description -->
</head>

<body>
    <div class="main-wrapper">

        @include('layouts.sidebar') <!-- Sidebar inclusion -->
        @include('layouts.settings') <!-- Settings inclusion -->

        <div class="page-wrapper">
            @include('layouts.header') <!-- Header inclusion -->

            <div class="page-content">
                @yield('content') <!-- Main content area -->
            </div>

            @include('layouts.footer') <!-- Footer inclusion -->
        </div>
    </div>

    @include('layouts.script') <!-- JavaScript inclusion -->
    @yield('extra_script') <!-- Additional JavaScript specific to the view -->
</body>

</html>
