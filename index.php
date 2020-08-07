<?php 
if(!isset($_SESSION)){session_start();}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Dynamic Header for logged in and logged out users using jQuery, PHP and Bootstrap" />
 
<title>
Dynamic Header using jQuery, PHP, Bootstrap - Javadomain
</title>
<!-- this can be finalizedd -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">

function changeHeader(trueOrFalse)
{
var value ="";
if(trueOrFalse){
	value = "with_login";
}else{
	value = "without_login";
}
var ajaxData="hs="+value;
	$.ajax({
		type: "POST",
		url: "dynamicHeader.php",
		data: ajaxData,
		success: function(response)
		{
			location.reload();
		}
	});

} 
</script>

</head>
<body>

<?php
$loginSuccess = 0;
if (isset ( $_SESSION ['IS_USER_LOGGEDIN'] ) &&  $_SESSION ['IS_USER_LOGGEDIN']==1) {
	$loginSuccess = 1;
}
?>
<?php
?>
<!-- header using bootstrap starts -->
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">GR Menu</span> <span class="icon-bar"></span>
				<span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand active" href="http://javadomain.in"><i class="fa fa-home"></i> &nbsp;Javadomain</a>
			
			<a class="navbar-brand active" href="http://javadomain.in/responsive-dynamic-header-using-jquery-php-bootstrap"> &nbsp;Javadomain</a>
			
			<a class="navbar-brand" target="_blank" href="https://www.couponzcorner.com">&nbsp;Best deals and Exclusive Offers for you</a>
			
			<a class="navbar-brand" target="_blank" href="https://1site.online">&nbsp;1site for all your needs</a>
			
			
			
		</div>
		<div id="navbar" class="navbar-collapse collapse">

<!-- javascript:void(0) -->

			<ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav pull-right">
			  				<?php
									if ($loginSuccess == 1) {
										?>
              <li class="dropdown "><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" >My
						Account <span class="caret"></span>
				</a>

					<ul class="dropdown-menu" role="menu">
						<li><a href="#logout" onclick="changeHeader(false);">Logout</a></li>

					</ul></li>
					
					
					
					
					
					
			  				<?php
									} else {
										?>
 <li><a href="#login" class="dropdown-toggle"onclick="changeHeader(true);"
					>Login</a></li>
<?php
									}
									?>
            </ul>
		</div>
		<!--/.nav-collapse -->
	</div>
	</nav>
	<!-- header using bootstrap ends -->
	
	
	
	<?php if($loginSuccess==1) {?>
	
	<div class="container" style="margin-top: 50px;"> 
	  
	  
	  <h3> You are logged in successfully.</h3>
	  
	  
	  <div id="no-more-tables">
	   
            <table class="col-md-12 table-bordered table-striped table-condensed cf" style="margin-top:30px;">
        		<thead class="cf">
        			<tr>
        				<th>Popular Articles</th>
        			</tr>
        		</thead>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Single post - 1 (www.javadomain.in) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="8555201327"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


				
        		<tbody>
        			 
					 
					 <tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/25-tips-to-use-google-effectively/">How to use google very effectively tips?</a></div></td>
        			</tr>
					 
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://demo.javadomain.in/type_writing_script/">Improve your type writing speed with our type writing script</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://recharge.javadomain.in/ors/">Start your own Paytm/Freecharge site with paytm/freecharge clone script</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/how-to-create-a-mobile-recharge-website/">How to create online recharge website ?</a></div></td>
        			</tr>
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/autocomplete-using-jquery-php-and-mysql/">Autocomplete using jQuery, PHP and mysql</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/freecharge-paytm-style-mobile-number-auto-operator-loading/">Freecharge/Paytm style mobile number auto operator loading</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/tips-clear-ocjp-6-scjp-certification/">Tips to Clear OCJP 6 (SCJP) certification</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/google-style-autosuggest-using-google-suggest-jquery-plugin/">Google style AutoSuggest using Google Suggest jQuery</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/responsive-bootstrap-3-masonry-image-gallery-example/">Responsive Bootstrap 3 Masonry Image Gallery Example</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/how-to-create-book-price-comparison-website/">How to create a book comparison website ?</a></div></td>
        			</tr>
        			
        			<tr>
        				<td ><div id="pop_articles"> <a href="http://www.javadomain.in/pnr-status-script-using-php-jquery-and-ajax/">PNR status script using jQuery, PHP and Ajax</a></div></td>
        			</tr>
        			
        			 
        		</tbody>
        	</table>
		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300*600 left and right sidebars in demo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="9848225328"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
	  
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- czc_sidebar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="4598089721"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


	  
    </div> <!-- /container -->
	<?php } else {?>
	
	<div class="container" style="margin-top: 60px;"> 
	  
	  
	  <h3> You are not logged in curretly. Login to see our popular posts.</h3>
	  
	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Single post - 2 (www.javadomain.in) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="1031934524"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

 
	  </div>
	<?php }?>
	
	
	
	
	
	
	
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>