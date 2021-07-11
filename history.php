<html lang="en">
<head>
    
    <title>TRANSACTION HISTORY</title>
    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!--Awesome CSS-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  <!--style-->
  <style type="text/css">
    .nav-link 
	{
    margin-right:90px;
    letter-spacing: 0.5px;
    }
	body
	{
	background-repeat:no-repeat;
	background-size:100% 100%;
	}
	.d-flex
	{
	margin-top:8px;
	}
  </style>
</head>

<body background="R (1).jpg">
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-style:italic;font-family:timesnew;font-size:40px;">TSF BANK</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#coll">
          <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse" id="coll">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link"  href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="getstart.html.">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
          </form>
		</div>
    </div>
  </nav>
</header> 


	<div class="container">
        <h2 class="text-center pt-4" style="color : white;"><b>TRANSACTION HISTORY</b></h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table  table-condensed table-hover table-bordered table-dark">
        <thead style="color :white;">
            <tr style="color:white;">
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'database.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows= mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color:white;">
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
               
        <?php
            }

        ?>
		    </tr>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>