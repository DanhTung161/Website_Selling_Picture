<!DOCTYPE html>
<html>

<head>

    @include('frontend.header.header')

</head>

<body data-plugin-page-transition>

    <div class="body">
    
        @include('frontend.header.header_item')

        <div role="main" class="main shop pt-4">

            <div class="container">

                <div class="row">
                    @include('frontend.header.sidebar')
                    @yield('content1')
                </div>
            </div>

        </div>

        @include('frontend.footer.footer');
    </div>

    @include('frontend.footer.js');

</body>

</html>
