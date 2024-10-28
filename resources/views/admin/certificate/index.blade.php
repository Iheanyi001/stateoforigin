<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{env('APP_NAME')}} - Certificate Download</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="{{asset('css/certificat.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <div class="container pm-certificate-container">
    <div class="outer-border"></div>
    <div class="inner-border"></div>

    <div class="pm-certificate-border col-xs-12">
      <div class="row pm-certificate-header">
        <div class="pm-certificate-title cursive col-xs-12 text-center">
            <img style="width:100px;" src="{{asset('assets/rivers-logo.png')}}"/>
            <h2 style="font-family: sans-serif; text-transform:capitalize">Rivers State Government</h2>
            <div style="display:flex; justify-content:center">
            <h1 style="font-size:36px; background-color: green; color:white; padding:10px; font-weight:bold; border-radius:10px">Certificate Of Origin</h1>
            </div>
        </div>
      </div>

      <div class="row pm-certificate-body">
        <div style="margin-top:30px" class="row">

            <div class="col-xs-4 pm-certified col-xs-4 text-center">
              <span class="pm-credits-text block sans" style="font-size: 16px">Date : {{$data->updated_at->format('jS F, Y')}}</span>
              <div style="margin-top:20px; background: green; font-size:14px; color:white; padding:5px">
                  Certificate No. : {{$data->ref}}
              </div>
            </div>

            <div class="col-xs-4">
            </div>
            <div class="col-xs-4 pm-certified col-xs-4 text-center">
              <img style="width:100px" src="{{asset('images/passport.png')}}" alt=""/>
            </div>

        </div>


        <div class="pm-certificate-block">

            <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                  <div class="pm-certificate-name  margin-0 col-xs-8 text-center">
                    <span class="pm-name-text bold">This is to certify that</span>
                  </div>
                  <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="row">

                  <div class="pm-earned col-xs-12 text-center">
                    <span style="font-family: sans-serif;font-style: italic; font-size: 16px;" class="pm-earned-text padding-0 block cursive">The person whose name and photograph appeared on this certificate is a bonafide
                      indigene of Rivers State </span>
                  </div>

                  <div class="col-xs-12"></div>
                </div>
            </div>

            <div class="col-xs-12">
                <h5 style="font-weight: 700">Name:</h5>
                <div class="row underline">
                    <div class="col-xs-4">{{$data->last_name}}</div>
                    <div class="col-xs-4">{{$data->first_name}}</div>
                    <div class="col-xs-4">{{$data->middle_name}}</div>
                </div>
                <div class="row">
                    <div class="col-xs-4">Surname</div>
                    <div class="col-xs-4">First Name</div>
                    <div class="col-xs-4">Middle Name</div>
                </div>
            </div>

            <div class="col-xs-12">
                <h5 style="font-weight: 700">Parent:</h5>
                <div class="row underline">
                    <div class="col-xs-6">{{$data->father_name}}</div>
                    <div class="col-xs-6">{{$data->mother_name}}</div>

                </div>
                <div class="row">
                    <div class="col-xs-6">Father Name</div>
                    <div class="col-xs-6">Mother Name</div>
                </div>
            </div>

            <div class="col-xs-12">
                <h5 style="font-weight: 700">Address:</h5>
                <div class="row underline">
                    <div class="col-xs-6">Home Town</div>
                    <div class="col-xs-6">{{$data->compound}}</div>

                </div>
                <div class="row">
                    <div class="col-xs-6">Home Town</div>
                    <div class="col-xs-6">Compound</div>
                </div>
            </div>


            <div class="col-xs-12" style="margin-top: 30px">

                <div class="row" >
                    <div class="col-xs-4  underline">
                        <img style="width:100px" src="{{asset('images/signature.png')}}" alt=""/>
                    </div>
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        @livewire('qr-code-generator', ['text' => route('certificate.download', ['id' => $data->id])])
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-4">Permanent Secretary<br> Government House</div>
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">Scan to verify document</div>
                </div>
            </div>

        </div>
      </div>

    </div>

  </div>
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
