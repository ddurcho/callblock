<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Call block Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url('images/ccc.jpg');
                background-size: cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 4em;
                background-color: white;
                opacity: 0.8;
                padding-left: 5vh;
                padding-right: 5vh;
                margin-top:2em;

            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .search{
                width:30vh;
                height:3vh;
                color: black;
                margin-top:10vh;
                border:0px;
                cursor:default;
                outline:none;
                
            }
            
            input[type="text"]{
                background: transparent;
                border: 0px dashed #fff;
                border-bottom-width: 2px;
                color: #fff;
                text-align: center;
                font-size: 2em;
                height: 1em;
                width:90%;
            }
            ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
              color: white;
            }
            ::-moz-placeholder { /* Firefox 19+ */
              color: white;
            }
            :-ms-input-placeholder { /* IE 10+ */
              color: white;
            }
            :-moz-placeholder { /* Firefox 18- */
              color: white;
            }
            input:focus::-webkit-input-placeholder { color:transparent; }
            input:focus:-moz-placeholder { color:transparent; } /* FF 4-18 */
            input:focus::-moz-placeholder { color:transparent; } /* FF 19+ */
            input:focus:-ms-input-placeholder { color:transparent; } /* IE 10+ */
            .submit {
            border-radius: 4px;
            padding:10px 40px 10px 40px;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            background-color: #feff00;
            border: none;
            text-transform: uppercase;
            }
            .storeicons{
                padding-top:50px;
                width:100%;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
                <div class="top-left links">
                    
                        <a href="{{ url('/') }}" class="logo">Laravel</a>
                    
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    The Best Call Block Service
                </div>

                <div class="links">
                    
                       
                      <input type="text" class="search" name="phone_number" id="phone_number" placeholder="Enter Phone number" required>
                      <br><br>
                      <input type="submit" class="submit" value="Find" onclick="goToPage();">
                    
                    <script type="text/javascript">
                        function goToPage() {
                            var page = document.getElementById('phone_number').value;
                            var replaced = page.split(' ').join('');
                            console.log(replaced);
                            
                            window.location = "/" + replaced;
                        }
                    </script>
                </div>
                <div class="storeicons">
                    <img src="images/astore.png" alt="Mountain View" style="width:20vh;height:8vh;">
                    <img src="images/gstore.png" alt="Mountain View" style="width:20vh;height:8vh;">
                </div>
            </div>
        </div>
    </body>
</html>