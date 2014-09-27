<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1480181578919967',
	      xfbml      : true,
	      version    : 'v2.1'
	    });
	  };
	
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	
	<div class = "blur"></div>
	<div id="text">
		<div id="login">
			<a class="btn-auth btn-facebook large" href="login"><h1>Login with Facebook</h1></a>
			
		</div>
	</div>
	
	<div
	  class="fb-like"
	  data-share="true"
	  data-width="450"
	  data-show-faces="true">
	</div>
<style>

	#text{
		position: absolute;
		top: 20%;
		left: 20%;
		width: 60%;
		height: 60%;
		background-color: #333333;
		opacity: .4;
		filter: alpha(opacity=40);
		border-radius: 15px;
		padding: 16px;
	}
	h1{
		opacity: 1;
		filter: alpha(opacity=100);
	}
	.blur {
		background:url('http://technical.ly/baltimore/wp-content/uploads/sites/3/2013/10/UMBCcommons.jpg') no-repeat center;
		background-size:cover;
		-webkit-filter: blur(8px);
		-moz-filter: blur(8px);
		-o-filter: blur(8px);
		-ms-filter: blur(8px);
		filter: blur(8px);
		position: fixed;
		width: 111%;
		height: 110%;
		left: -10;
		top: -10;
	}
	
</style>

</body>
