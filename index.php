
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" />

  <title>Latpay</title>
  <style>

    section.products{
    margin-top:6%;
  }
  .buy_btn,.card-header{
    font-weight: bold;
  }
  body{
    background: #f4f7cb26;
  }

  .response,.account_details{
    display: none;  
  }
  .latpay_logo{
    width:23%;
  }
  .google_pay_btn{
    width: 90%;
    margin-top: 16px;
  }

  .card-header{
    padding: 0px
  }

   footer {
  position: relative;
    bottom: 0;
    right: 0;
    left: 0;
}
  



</style>
</head>
<body>
<div class="mt-5"><h1>Checkout</h1></div>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Lateral Payment Solution</a>
      </div>
    </nav>
  </header>

  <section class="checkout">
   <div class="container">
    <div class="py-5 text-center">
      &nbsp;
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          
          <div class="card">
            <div class="card-header">
              <center>
              <img src="https://www.latpay.com/wp-content/uploads/2017/11/lat-pay-logo-300x135.png" class="latpay_logo" alt="">
              </center>
            </div>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Reference ID :</h6>
                </div>
                <span class="text-muted" id="product_name">e96f44c85a8f72d5415a</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Currency :</h6>
                </div>
                <span class="text-muted" id="trans_id">AUD</span>
              </li>            
              <li class="list-group-item d-flex justify-content-between">
                <h6>Total</h6>
                <strong id="amount">$0.01</strong>
              </li>
           
                <center>
            <div id="container" class="google_pay_btn"></div>
            </center>
            </ul>
          </div>
          
          
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
<!-- 
    <div class="container">
      <div class="row">
        <div class="col-md-4">    
          <section class="account_details">  
            <h4 class="mb-3">Account Details</h4>
            <form class="needs-validation" id="account_settings" novalidate>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="env">Environment</label>
                  <select class="form-control" name="env" id="env">
                    <option value="">Choose</option>
                    <option value="TEST">TEST</option>
                    <option value="PRODUCTION">PRODUCTION</option>
                  </select>          
                </div>
                <div class="col-md-12 mb-3">
                  <label for="merchant_id">Merchant ID</label>
                  <input type="text" name="merchant_id" value="17214699117036424514" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="gateway_merchant_id">Gateway MerchantID</label>
                  <input type="text" name="gateway_merchant_id" value="gpaulpy37642822" class="form-control">
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <center>
                 <button class="btn btn-primary" id="change_setting">Change</button>
               </center>
             </div>
           </form>
         </section>
       </div>
       <div class="col-md-8">
        <section class="response">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h4 class="mb-3">Response</h4>
              <textarea class="form-control" id="response" rows="3"></textarea>
            </div>
            <div class="col-md-2"></div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h4 class="mb-3">Token</h4>
              <textarea class="form-control" id="token" rows="3"></textarea>
            </div>
            <div class="col-md-2"></div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h4 class="mb-3">Base 64</h4>
              <textarea class="form-control" id="base64" rows="3"></textarea>
            </div>
            <div class="col-md-2"></div>
          </div>    
        </section>
      </div>
    </div>
  </div> -->

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="copy_right mb-1">&copy; 2021 Lateral Payment Solution</p>   
  </footer>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/gpay.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>

</body>
</html>