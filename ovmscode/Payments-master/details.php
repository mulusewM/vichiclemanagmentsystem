

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Details</title>
        <link href="img/logo_small.png" rel="icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
       
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <style>
           * {
  box-sizing: border-box;
}

                .form-container{
                    padding: 20px;
                }

      

                #radio_bt{
                    background:white;
                    width:100%;
                }
                #radio_bt:hover{
                    background: black;
                    color:white;
                }

        </style>


    </head>
    <script src="https://js.stripe.com/v3/"></script>
    <body>

    <script>
        function paytm(){
            document.getElementById("reused_form").action ="paytm/PaytmKit/pgRedirect.php";
        }

        function paypal(){
            document.getElementById("reused_form").action ="https://www.sandbox.paypal.com/cgi-bin/webscr";
        }

        function card(){
            document.getElementById("reused_form").action ="card.php";
        }


        function usd(){
         document.getElementById("usd").style.display = "block";     
		 }

         function data(){
         document.getElementById("data").style.display = "block";     
		 }

        </script>

		<div class="row" style="height:80%;padding:50px;">
			<div class="col-lg-6">	
                
            
            <div class="container">
                <div class="form-container z-depth-5">
                   
                    <div class="row">
                        <form class="col s12" id="reused_form" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" required name="first_name" class="validate">
                                    
                                    <INPUT TYPE="hidden" NAME="return" value="http://mypayments.000webhostapp.com/">
                                    
                                    <input type="hidden" name="currency_code" value="USD">
                                    
                                    <input type="hidden" name="business" value="akashshuklavizag@gmail.com">
                                    <input type="hidden" name="page_style" value="paypal">
                                   
                                    <label for="name">Name</label>
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <input id="phone" type="number" required name="night_phone_a" class="validate" maxlength="10">
                                    <label for="name">Phone Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" onclick="data()" required name="email"  class="validate">
                                    <label for="email">Email</label>
                                    
                                </div>
                            </div>
							<div class="row">
								<div class="input-field col s12">
                                    <input id="amount" type="number" required name="amount" class="validate" onclick="usd()">
                                    <label for="name">Amount</label>
                                </div>
                                
							</div>

                           

                            <div class="row">
								
                                <div class="input-field col s12">
									<h4>Choose Payments Methods :</h4><br>
									
									<img src="img/mastercard_logo.png"> &nbsp;&nbsp;
									<img src="img/visa_logo.png">&nbsp;&nbsp;
									<img src="img/paypal_logo.png">&nbsp;&nbsp;
									<img src="img/Paytm_logo.png" width="100" height="50">&nbsp;&nbsp;
                                    <br><br>
                                    <!--
                                    <input type="radio" name="card" value="1">
                                   <label for="Debit"> <h5 style="color: black;">Debit Card</h5></label>
									
									<br>
									<input type="radio" name="card" value="2">
                                    <label for="Debit"><h5 style="color: black;">Credit Card</h5></label>
									
									<br>
									<input type="radio" name="card" value="3">
                                    <label for="Debit"><h5 style="color: black;">Paypal</h5></label>
									
									<br>
									<input type="radio" name="card" value="4">
                                    <label for="Debit"><h5 style="color: black;">Paytm</h5></label>-->
                                    <br><br>

                                    <div class="row">

                                    <div class="col-lg-6">
                                        <button type="submit" name="debit"
                                        value="1" onclick="card()"  class="btn btn-outline-dark abc" id="radio_bt">Debit Card</button>
                                    </div>


                                    <div class="col-lg-6">
                                    <button type="submit" onclick="card()" name="credit" class="btn btn-outline-dark" id="radio_bt">Credit Card</button> 
                                    </div>

                                </div>
                                    <div class="row">
                                        <div class="col-lg-12" id="debit_credit_card">


                                            </div>
                                     </div>




                                 

                                </div>
                            </div>
							
                           
                        </form>
                        <div id="error_message" style="width:100%; height:100%; display:none; ">
                            <h4>
                                Error
                            </h4>
                            Sorry there was an error sending your form. 
                        </div>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h4>
                                Success! Your Message was Sent Successfully.
                            </h4>
                        </div>
                    </div>
                
				
			</div>
			
            </div>
			</div>
			
            </div>
			
            <!--Import jQuery before materialize.js-->

            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        </div>
    </body>
</html>