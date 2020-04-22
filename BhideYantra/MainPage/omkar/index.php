
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BhideLohYantra</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	    <script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	<link rel="stylesheet" type="text/css" href="css/main.css">
		
	</head>

	<style>
    .container2 {
        width: 100%;
        height: auto;
        background: #fff;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        flex-flow: wrap;
    }

    .box2 {
        width: 25%;
        height: 250px;
        background: black;
        margin: 20px;
        box-sizing: border-box;
        box-shadow:10px 10px 10px;
        border:1px solid;
    }

    img {

        width: 100%;
        height: 90%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
	}
	.pdf_btn{
		padding-top:25px;
        text-align:center;
	}
    .intro{
        height:70vh;
        background-color:blue;
        text-align:center;
    }
    h1{
        padding-top:10%;
        display:flex;
        justify-content:space-around;
        text-align:center;
        color:white;
        text-shadow:10px 10px 15px black;
        font-family:helvatic;
        font-size:60px;
        text-decoration: underline;
        
    }

 @media screen and (max-width:1200px) {
        .box2 {
            width: 25%;
        height: 250px;
        }
        img {
        width: 100%;
        height: 100%;
        display: block;
         
        object-fit: cover;
        }

        
    }

    @media screen and (max-width:600px) {
        .box2 {
            width: 90%;
            height: 90%;
        }
        h1{
        padding-top:10%;
        font-size:35px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        
        object-fit: cover;
        }

    }
    @media screen and (max-width:360px) {
        .box2 {
            width: 25%;
            height: 250px;
        }
       
    }

    @media(min-width:992px)
{
    .box2 {
            width: 25%;
        height: 250px;
        }
        img {
        width: 100%;
        height: 100%;
        display: block;
         
        object-fit: cover;
        }

}
@media(min-width:768px)and(max-width:991px){
    .box2 {
            width: 100%;
            height: 50%;
        }
        h1{
            padding-top:10%;
        font-size:40px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
        }

}

@media(min-width:575px) and (max-width:767px){
    .box2 {
            width: 100%;
            height: 50%;
        }
        h1{
            padding-top:10%;
        font-size:40px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
        }

}

@media(min-width:480px)and(max-width:574px){
        h1{
            padding-top:10%;
        font-size:40px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
        }


}


@media(min-width:303px) and @media(max-width:479px){
        h1{
            padding-top:20%; 
        font-size:40px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
        }
        .intro{
        height:70vh;
        background-color:blue;
        text-align:center;
    }

}


@media(min-width:302px) {
        h1{
    
        font-size:50px;
        padding-top:120px;
    }
    img {
        width: 100%;
        height: 100%;
        display: block;
        /*  remove extra space below image */
        object-fit: cover;
        }
        .intro{
        height:70vh;
        background-color:blue;
        text-align:center;
    }
    
}


</style>


<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href=".../index.html" class="navbar-brand">BhideLohYantra</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse" style="box-shadow:0px 5px 30px;">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="Catalog.php"><span class="glyphicon glyphicon-modal-window"></span>Catalog</a></li>
                <li><a href="About.html"><span class="glyphicon glyphicon-modal-window"></span>About Us</a></li>
			</ul>
			<!--<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>-->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
					
				</li>
				<li>
				<a href="customer_registration.php" ><span class="glyphicon glyphicon-user"></span>SignUp</a>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
				<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
<p><br></p>
<p><br></p>
<p><br></p>
    <div class="intro" style="background-image:url('images/intro.jpg');background-size:cover; box-shadow:0px 10px 15px rgba(0,0,0,0.5);">

    <h1>
        BHIDE YANTRA
        <br> 
    LOHA VASTU KENDRA
    </h1>

    </div>

    <p><br/></p>
	<p><br/></p>

	<div class="container2">
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/taparianew.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/taparia.pdf" target="_blank" style="font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>

        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/nortannew.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/Norton.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/fenner2.png" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/test.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/MIRANDA.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/test.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/jkengineer.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/jkengineering.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/totem.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/Totem.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/pioneer.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/PIONEER.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
        <div class="box2">
            <div style="display:block; object-fit:cover;height:75%;">
                <img src="images/image.jpg" alt="">
            </div>
            <div class="pdf_btn">
                <a href="PDF/test.pdf" target="_blank" style="text-align: center; font-size: 2rem;"><span style="color:#fff;"> View </span></a>
            </div>
        </div>
    </div>


<footer style="background-color:black;height:5vh;color:white;">
    <p style="text-align:center;padding-top:2px;">E-Mail : bhideyantra@gmail.com</p>
</footer>

	</body>
</html>
















































