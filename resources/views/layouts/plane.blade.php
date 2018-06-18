<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="{{ asset('assets/game/css/reset.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/game/css/main.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/game/css/orientation_utils.css')}}" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
	<meta name="msapplication-tap-highlight" content="no"/>

        <script type="text/javascript" src="{{ asset('assets/game/js/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/createjs-2015.11.26.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/howler.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/screenfull.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/ctl_utils.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/sprite_lib.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/settings.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CSlotSettings.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CLang.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CPreloader.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CMain.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CTextButton.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CGfxButton.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CToggle.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CBetBut.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CMenu.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CGame.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CReelColumn.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CInterface.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CPayTablePanel.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CStaticSymbolCell.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CTweenController.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/game/js/CCreditsPanel.js')}}"></script>
        
    </head>
    <body ondragstart="return false;" ondrop="return false;" >
	 @yield('body')
    </body>
</html>