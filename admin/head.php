<?php

include ('../connections/connect.php');

?>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	 <!--<link rel="shortout icon" type="image/x-icon" href="">--> <!---->

    	 <script src="https://kit.fontawesome.com/129b086bc9.js" crossorigin="anonymous"></script>
  		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		  <link rel="stylesheet" type="text/css" href="badge.scss">
  	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
  		
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Rye&display=swap" rel="stylesheet">
<title>EB Fashion &middot; Admin</title>
<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap');
	*{
		font-family: 'Zen Kaku Gothic New', sans-serif;
	}

	.sidenav {
		height: 100%;
		width: 200px;
		z-index: 1000;
		position: fixed;
		padding: 10px;
		background-color: #f4f0ee;
	}
	.userinfo {
		text-align: center;
	}

	.wrapper {
		position: relative;

	}
	section {
		margin-left: 200px;
	}

	.topbar {
		height:auto;
		width: 100%;
		padding: 5px;
		background-color: #bdbfc0;
	}

	
	.main_contents{
		padding: 10px;
	}

	.navitems {
		margin-left:  5px;
	}
	.navitems:hover a  {
		background-color: #dee1e2;
		color:#2f7b8b;
		
	}

	.navitems i {

	}

	.navitems:hover i  {
	
		color:#2f7b8b;
		animation: swing 1.5s ;
		
	}

	@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(5deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-5deg);
  }
  100% {
    transform: rotate(0deg);
  }
}
</style>
<?php $order_count = mysqli_query($con, "SELECT COUNT(*) FROM `transaction` where status != 'completed' and paymentmethod != 'reserve' "); 
      $count = mysqli_fetch_array($order_count);?> 	
</head>
