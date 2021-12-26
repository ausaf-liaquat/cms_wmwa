<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <link rel="stylesheet" href="{{asset('assets/css/errorsstyle.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/index.css')}}"> --}}
</head>

<body>
   

    <nav>
        <div class="menu">
            <p class="website_name">WMWA</p>
            {{-- <div class="menu_links">
                <a href="" class="link">about</a>
                <a href="" class="link">projects</a>
                <a href="" class="link">contacts</a>
            </div> --}}
            <div class="menu_icon">
                <span class="icon"></span>
            </div>
        </div>
    </nav>

    <section class="wrapper">

        <div class="container">

            <div id="scene" class="scene" data-hover-only="false">


                <div class="circle" data-depth="1.2"></div>

                <div class="one" data-depth="0.9">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="two" data-depth="0.60">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="three" data-depth="0.40">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <p class="p404" data-depth="0.50">404</p>
                <p class="p404" data-depth="0.10">404</p>

            </div>

            <div class="text">
                <article>
                    <p>Uh oh! Looks like you got lost. <br>Go back to the homepage if you dare!</p>
                    <button>i dare!</button>
                </article>
            </div>

        </div>
    </section>
    <script src="{{asset('assets/js/parallax.min.js')}}"></script>
    <script>
              // Parallax Code
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
</body>

</html>
