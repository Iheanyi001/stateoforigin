<x-guest-layout>

    @livewire('RegisterForm')

    @section('styles')
        <style>
            .reg-ul{
                margin-left: -0.5em;
                margin-right: -0.5em;
                display: flex;
                list-style: none !important;
                padding: 0;
                margin-bottom: 20px;

            }
            .reg-li{
                float: none;
                display: block;
                width: auto
            }
            .current{
                background-color: #17A2B8;
                color:#fff;
                border-color:#fff!important;
            }
            .not-current{
                background-color: #e9ecef;
                color: #adb5bd;
                border-color:#adb5bd!important;
            }
            .reg-a{
                cursor: default;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 3px;
                width: auto;
                margin: 0 0.5em 0.5em;
                padding: 1em 1em;
                text-decoration: none;
            }
            .reg-num{
                font-size: 14px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 25px;
                height: 25px;
                border: 1px solid #adb5bd;
                border-radius: 50px;
                margin-right: 10px;
            }
        </style>
    @endsection

</x-guest-layout>
