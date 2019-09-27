<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}" /> --}}
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        .brand{
            height: 300px;
        }
        .text-white{
            color: #fff !important;
        }
    </style>

    <main class="mt-10">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        

                        <div class="card-body">
                            <div class="card-title d-flex justify-content-center">
                            <img src="{{ asset('img/logo.png')}}" alt="" class="img-responsive brand">
                        </div>

                        
                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                        {{ $subcopy ?? '' }}


                        {{ $footer ?? '' }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
</body>
</html>
