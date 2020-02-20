<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
</head>
<body>
    @include('templates.navbar')
    <div class="slider fullscreen">
        <ul class="slides">
            <li>
                <img src="{{asset('assets/img/slider/1.png')}}">
                <div class="caption left-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/img/slider/2.png')}}">
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/img/slider/3.png')}}">
                <div class="caption right-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
</body>
    @include('templates.foot')
    <script>
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            fullWidth: true,
            // height: 500,
            duration: 400,
            interval: 3000
        });
    </script>
</html>