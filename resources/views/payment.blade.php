<!DOCTYPE html>
@extends('layouts.plane_normal')
@section('page_title','Rolling Coin 88')
@section('body')

  <bizapp-root>
    <button onclick="login()">Login</button>
    <button onclick="pay()">Pay</button>
    <pre id="result"></pre>
    <script></script>
  </bizapp-root>
</body>
</html>
@stop
@push('scripts')

<script>
  function login() {
    
    // Make sure the endpoint and path match the one you specified on Server side SDK
    BizApp.login({
      url: "https://mybizapp.com:3000/api/login"
    }, function(error, userData) {
      if (userData.name) {
        $("#result").text("Logged in!");
      } else {
        $("#result").text("Failed to log in");
      }
    });
  }
  
  
</script>
<script>
  function pay() {
    var options = {
      address: "TGNy3ZbSfTB5aFKZdEidXC9U4FXPJxeQsM",
      amount: 100000000, // 1 TRVC
      message: "Payment for BizApp",
      identifier: "446f7261"
    };

    BizApp.payToWallet(options, function(error, result) {
      if (error) {
        $("#result").text("Payment failed: " + error);
      } else {
        $("#result").text("Payment success: " + JSON.stringify(result));
        // You can send to backend for verification
        $.post("https://mybizapp.com:3000/api/verify",
          { trxId: result.txId, toAddress: result.toAddress, amount: result.amount },
          function() { });
      }
    });
  }
</script>

@endpush