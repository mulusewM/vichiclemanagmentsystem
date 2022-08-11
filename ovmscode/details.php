

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
                                   
                                    <input id="amount" type="text" name="uid"  required>
                                   
                                    <label for="name">user id</label>
                                </div>
                            </div>
						 
							<div class="row">
								<div class="input-field col s12">
                                    <input id="amount" type="text" required name="amount" >
                                    <label for="name">Birr</label>
                                </div>
                                
							</div>
                              
                            <div class="row">
								
                                <div class="input-field col s12">
									

                                    <div class="col-lg-6">
                                    <button type="submit"  name="submit" >Credit Card</button> 
                                    </div>

                                </div>
								
                                </div>
                            </div>
							
                        </form>
						<?php
if(isset($_POST['submit'])) {
	include("connection.php");
		$id=$_POST['uid'];
	    $amount=$_POST['amount'];
	$result = mysql_query("select * from payment where user_id='$id'")or die (mysql_error());
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	 $cost=$row['amount'];	 
	 $useramount=$cost- $amount;
	 $result2 = mysql_query("select *from organazition where id='1' ")or die (mysql_error());
	$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
	$oamunt=$row2['amount'];
	$organazition_amount=$oamunt + $amount;
mysql_query("update payment set amount='$useramount' where user_id = '$id'")or die (mysql_error());	
mysql_query("update organazition set amount='$organazition_amount' where id = '1'") or die (mysql_error());
echo "<script>alert('Sucessfully reserved!');window.parent.location.href = 'passenger.php';</script>";
}
?>

                       
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