<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style_.css">
    
    <title>Document</title>
</head>
<body>

<body class="animsition">
	<?php
    include("partials/connect.php");
    session_start();
    ?>
    <a href="index.php"><i class="fa-solid fa-circle-left back"></i></a>

    <div class="container-fluid my-5  d-flex  justify-content-center">
        <div class="card card-1">
            <div class="card-header bg-white">
                <div class="media flex-sm-row flex-column-reverse justify-content-between  ">
                    <div class="col my-auto"> <h4 class="mb-0">Thanks for your Order,<span class="change-color"><?php echo $_SESSION['email'] ?></span> !</h4> </div>
                    <div class="col-auto text-center  my-auto pl-0 pt-sm-4">

                    <svg width="41" height="41" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M44.0662 15.4337C44.0662 23.1634 37.9586 29.3675 30.5 29.3675C23.0414 29.3675 16.9337 23.1634 16.9337 15.4337C16.9337 7.70407 23.0414 1.5 30.5 1.5C37.9586 1.5 44.0662 7.70407 44.0662 15.4337Z" stroke="url(#paint0_linear_1_6)" stroke-width="3"/>
					<path d="M29.3675 30.1325C29.3675 37.8279 23.1291 44.0663 15.4337 44.0663C7.73835 44.0663 1.5 37.8279 1.5 30.1325C1.5 22.4371 7.73835 16.1988 15.4337 16.1988C23.1291 16.1988 29.3675 22.4371 29.3675 30.1325Z" stroke="url(#paint1_linear_1_6)" stroke-width="3"/>
					<path d="M44.0662 45.5663C44.0662 53.2959 37.9586 59.5 30.5 59.5C23.0414 59.5 16.9337 53.2959 16.9337 45.5663C16.9337 37.8366 23.0414 31.6325 30.5 31.6325C37.9586 31.6325 44.0662 37.8366 44.0662 45.5663Z" stroke="url(#paint2_linear_1_6)" stroke-width="3"/>
					<path d="M59.5 30.5C59.5 37.9586 53.2959 44.0663 45.5663 44.0663C37.8366 44.0663 31.6325 37.9586 31.6325 30.5C31.6325 23.0414 37.8366 16.9337 45.5663 16.9337C53.2959 16.9337 59.5 23.0414 59.5 30.5Z" stroke="url(#paint3_linear_1_6)" stroke-width="3"/>
					<defs>
					<linearGradient id="paint0_linear_1_6" x1="30.5" y1="0" x2="30.5" y2="30.8675" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint1_linear_1_6" x1="15.4337" y1="14.6988" x2="15.4337" y2="45.5663" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint2_linear_1_6" x1="30.5" y1="30.1325" x2="30.5" y2="61" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint3_linear_1_6" x1="45.5663" y1="15.4337" x2="45.5663" y2="45.5663" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					</defs>
          			  </svg>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto"> <h6 class="color-1 mb-0 change-color">Receipt</h6> </div>
                    <div class="col-auto  "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php
                             $sum=0;
                        
                            $id = $_SESSION['customerid'];
                            $connect->query("set @m = '$id'");
                            $res = $connect->query("call user_order(@m)");
                            while($final = $res->fetch_assoc())
                            {
                            $sum+=($final["price"] * $final['quantity']);
                        ?>
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="<?php echo $final['image'] ?>" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row  my-auto flex-column flex-md-row">
                                            <div class="col my-auto"> <h6 class="mb-0"> <?php echo $final['title'] ?></h6>  </div>
                                            <div class="col my-auto"> <small>Qty : <?php echo $final['quantity'] ?></small></div>
                                            <div class="col my-auto"><h6 class="mb-0"><?php echo ($final["price"] * $final['quantity']) ?>$</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3 ">
                                <div class="row">
                                    <div class="col-md-3 mb-3"><a href="deleteorderhandler.php?orderID=<?php echo $final['order_id']?>&status=<?php echo $final['status'] ?>"><button type="button" class="btn btn-danger">Cancel Order</button></a></div>
                                    <div class="col mt-auto">
                                        <div class="progress my-auto"> <div class="progress-bar progress-bar  rounded" style="width:
                                         <?php
                                         if($final['status']=="preparing"){
                                              echo'22%;';
                                            }

                                         else if($final['status']=="on way") {echo  '62%;';}

                                         else if($final['status']=="Delivered"){ echo  '100%;';}


                                         
                                         ?>" role="progressbar" aria-valuenow="25" aria-valuemin="0"  aria-valuemax="100"></div> </div>
                                        <div class="media row justify-content-between ">
                                            <div class="col-auto text-right"><span> <small  class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                            <div class="col-auto flex-col-auto"><small  class="text-right mr-sm-2">Delivered</small><span> <i  class="fa fa-circle"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="card card-2">
 
                <div class="row mt-4">
                    <div class="col">
                        <div class="row justify-content-between">
                            <div class="col-auto"><p class="mb-1 text-dark"><b>Order Details</b></p></div>
                            <div class="flex-sm-col text-right col"> <p class="mb-1"><b>Total</b></p> </div>
                            <div class="flex-sm-col col-auto"> <p class="mb-1"><?php echo $sum ?>$</p> </div>
                        </div>
                        <div class="row justify-content-between">
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col"><p class="mb-1"><b></b></p></div>
                            <div class="flex-sm-col col-auto"><p class="mb-1"></p></div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col"><p class="mb-1"><b>Delivery Charges</b></p></div>
                            <div class="flex-sm-col col-auto"><p class="mb-1">Free</p></div>
                        </div>
                    </div>
                </div>
        
            </div>
            <div class="card-footer">
                <div class="jumbotron-fluid">
                    <div class="row justify-content-between ">
                        <div class="col-auto my-auto "><h2 class="mb-0 font-weight-bold">TOTAL PAID</h2></div>
                        <div class="col-auto my-auto ml-auto"><h1 class="display-3 "><?php echo $sum ?>$</h1></div>
                    </div>
                    <div class="row mb-3 mt-3 mt-md-0">
                        <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                        <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                        <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>