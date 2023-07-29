<html>
    <head>
        <title>NEWS API</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background: url(https://wallpaperaccess.com/full/8881280.jpg);
                background-size: cover;
            }

            #btn {
                position: absolute;
                right:    10;
                bottom:   20;
            }

            #welcome a {
                text-decoration: none;
                text-align: center;
                color: white;
                margin: auto;
                background-color: red;
                border-radius: 10px;
                padding: 10px;
            }

            #welcome a:hover {
                background-color: wheat;
                color: black;
            }

            #welcome {
                margin-top: 200px;
                /* width: 1000px; */
            }
        </style>
    </head>
    <body class="container-fluid">

    <h5 style="outline: 4px solid white;" class="text-center text-light bg-dark shadow p-3 fixed-top">
    <img width="190px" src="https://upload.wikimedia.org/wikinews/en/5/57/Breaking.png">
    <p>RPL NEWS</p></h5>
     <a href="#news">News</a>

    <div id="welcome" class="h-90 bg-dark rounded"> 
         <!-- <h5 class="text-light text-center p-4">a -->
              <!-- <a href="#news">News</a> -->
         </h5>
        <img style="padding: 10px; width: 100%" src="https://media.tenor.com/pfcqgFEp2OsAAAAd/welcome.gif">
    </div>

        @foreach($news as $n)
    <div style="padding-left: 100px;">
        <div id="news" class="card bg-dark text-light mt-5" style="width: 25rem; float:left; margin:10px; height:105vh; outline: 4px solid white;">
            <img src="{{$n['urlToImage']}}" style="background-size: cover; width:400px; height: 250px;">
            <div class="card-body">
                <h5 class="card-title">{{ $n['title'] }}</h5>
                <span id="{{$n['source']['id']}}"></span>
                <p class="card-text">Author : {{ $n['author'] }}</p>
                <p>Published : {{ $n['publishedAt'] }}</p>
                <hr>
                <!-- <p class="card-text">{{ $n['description'] }}</p> -->

                <div>
                    <p>{{ $n['description'] }}<span id="dots">...</span><span id="invisible">{{ $n['content'] }}</span></p>
                    <a class="btn btn-primary bottom" id="btn" href="javascript:MoreLess();">Read More</a>
                </div>
            </div>
        </div>
    </div>
        @endforeach

        <script>
            function MoreLess(){
                var id=document.getElementById("");
                var dots=document.getElementById("dots");
                var invisibletext=document.getElementById("invisible");
                var btntext=document.getElementById("btn");

                if(dots.style.display!="none"){
                    dots.style.display="none";
                    invisibletext.style.display="inline";
                    btntext.innerHTML="Read Less";
                } else {
                    dots.style.display="inline";
                    invisibletext.style.display="none";
                    btntext.innerHTML="Read More";
                }
            }
        </script>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>