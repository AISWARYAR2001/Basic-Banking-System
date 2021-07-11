<html lang="en">
<head>
  <title>TRANSFER MONEY</title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
       crossorigin="anonymous"></script>
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
    button
	{
		transition:1.5s;
    }
	button:hover
	{
		background-color:silver;
		color:white;
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
              <a class="nav-link"  href="getstart.html">Customer</a>
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
   <?php
     include'database.php';
	 $sql="SELECT*FROM users";
	 $result=mysqli_query($conn,$sql);
   ?>
   
 <div class="container">
        <h2 class="text-center pt-4" style="color : white;"><b>Transfer Money<b></h2></br>
            <div class="row">
                <div class="col">
                   <div class="table-responsive-sm">
                       <table class="table table-hover table-sm table-dark table-condensed table-bordered" style="border-color:white;">
                        <thead style="color:white;">
                            <tr style="color:white;">
                              <th scope="col" class="text-center py-2">Id</th>
                              <th scope="col" class="text-center py-2">Name</th>
                              <th scope="col" class="text-center py-2">Email</th>
                              <th scope="col" class="text-center py-2">Balance</th>
							  <th scope="col" class="text-center py-2">Click to view</th>
                            </tr>
                        </thead>
       	                <tbody>
		                    <?php
							  while($rows=mysqli_fetch_assoc($result))
							  {
						    ?>
                            <tr style="color:white;">
                              <td class="py-2"><?php echo $rows['id'] ?></td>
                              <td class="py-2"><?php echo $rows['name']?></td>
                              <td class="py-2"><?php echo $rows['email']?></td>
                              <td class="py-2"><?php echo $rows['balance']?></td>
                              <td><a href="user.php?id= <?php echo $rows['id'] ;?>">
							   <button type="button" class="btn" style="background-color : white; color:#1256c4;"><b>Transaction</b></button></a></td> 
                            </tr>
                            <?php
                             }
                            ?>
                        </tbody>
                       </table>
                    </div>
                </div>
            </div> 
    </div>
</body>
</html>