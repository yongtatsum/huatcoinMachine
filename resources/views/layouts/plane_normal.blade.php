<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="HandheldFriendly" content="true">
  <title>My BizApp</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bizstore.io/bizapp-0.0.2.min.js"></script>
  <style>
    button { width: 100%; margin: 0.3rem 0; border: 0; background-color: #42A5F5; color: white; font-size: 1rem; padding: 0.6rem 1.3rem; border-radius: 8px; transition: all 0.2s; cursor: pointer; outline: 0; }
    button:hover { background-color: #1565C0; }
  </style>
</head>
<body>
	 @yield('body')
    </body>
    
       @stack('scripts')
</html>