<style type="text/css">
	html{
		scroll-behavior: smooth;
	}
	*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif; }
	.row{margin-left: 0!important;margin-right: 0!important}
	.nav_style{
		background-color: #8E44AD;
	}
	.nav_style a{
		color: white;
	}
	/*/////main header/////*/
	.main_header{
		height: 450px;
		width: 100%;
	}
	.rightside h1{
		font-size: 3rem;
	}
	/*.leftside img{
		animation: gocorona 3s linear infinite;
	}
	@keyframes gocorona{
		0% { transform: rotate(0); }
		100% { transform: rotate(360deg); }
	}*/


	/*corona update*/
	.corona_update{
		margin: 0 0 30px 0;
	}
	.corona_update h2{
		color: #17202A;
	}

	/***********section****************/
	.sub_section{
		background-color: #fbfafd;
	}

/***********footer****************/

	.footer_style{
		background-color: #8E44AD!important;
	}
	/*.footer_style h3{
		margin-bottom: 0!important;
	}*/

	#myBtn{
		display: none;
		position: fixed;
		bottom: 30px;
		right: 40px;
		z-index: 99;
		border: none;
		outline: none;
		background-color: #00A8FF;
		color: white;
		cursor: pointer;
		padding: 10px;
		border-radius: 10px;
	}
	#myBtn:hover{
		background: #0606060;
	}
	#BotBtn{
		display: none;
		position: fixed;
		bottom: 30px;
		right: 40px;
		z-index: 99;
		border: none;
		outline: none;
		background-color: #00A8FF;
		color: white;
		cursor: pointer;
		padding: 10px;
		border-radius: 10px;
	}
	#BotBtn:hover{
		background: #0606060;
	}




/*////////responsive//////////////*/

@media(max-width: 768px){
	.main_header{height: 700px;text-align: center;}
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
	.count_style{
		display: inline!important;
	}
	.count_style h1 {
		text-align: center;
	}
	.count_style h4 {
		text-align: center;
	}
	.about_image{
		margin-left: 0!important;
	}
	.symp_style{
		margin-left: 0!important;
	}
	.prev_style{
		padding-left: 0!important;
	}
	.about_image_style img{
		padding-left: 0!important;
	}
	.about_image_style{
		margin-left: 0!important;
	}
	.prev_container_style{
		margin-left: 0!important;
	}
	
}

</style>