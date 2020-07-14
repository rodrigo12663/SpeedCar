<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        
        <style type="text/css">
		
		

    .card{
      border: none;
    }	
    #imgT{
      width: 380px;
    
      border: none;
    }
    .container{
      margin: 70px;
    }
    



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


  
  /*//////////////////////////////////////////////////////////////////
  [ RESTYLE TAG ]*/
  
  * {
      margin: 0px; 
      padding: 0px; 
      box-sizing: border-box;
      
  }
  
  body, html {
      height: 100%;
   
  }
  h3{
    color: black;
  }
  #texts{
    color: black;
  }
  #btn-financiamento{
    background:#f8a736 ;
    color:white;
    -webkit-transition: 0.5s ease-in !important;
    -moz-transition: 0.5s ease-in !important;
    -o-transition: 0.5s ease-in !important;
    transition: 0.5s !important ;

  }
  
  
  #btn-financiamento:hover {
    background-color:rgba(235, 118, 10) ;
    -webkit-transition: 0.5s ease-in !important;
    -moz-transition: 0.5s ease-in !important;
    -o-transition: 0.5s ease-in !important;
    transition: 0.5s !important ;

  

  }
  #texto-financiamento{
    
    font-size: 16px;
    width: 270px;
    
    color: black;
  }
  
  /*---------------------------------------------*/
  
  
  a:focus {
      outline: none !important;
  }
  
  a:hover {
      text-decoration: none;
  }
  
  /*---------------------------------------------*/
  h1,h2,h3,h4,h5,h6 {
      margin: 0px;
  }
  
  p {
      font-family: SourceSansPro-Regular;
      font-size: 14px;
      line-height: 1.7;
      color: #666666;
      margin: 0px;
  }
  
  ul, li {
      margin: 0px;
      list-style-type: none;
  }
  
  
  /*---------------------------------------------*/
  input {
      outline: none;
      border: none;
  }
  
  textarea {
    outline: none;
    border: none;
  }
  
  textarea:focus, input:focus {
    border-color: transparent !important;
  }
  
  
  input::-webkit-input-placeholder { color: #999999;}
  input:-moz-placeholder { color: #999999;}
  input::-moz-placeholder { color: #999999;}
  input:-ms-input-placeholder { color: #999999;}
  
  textarea::-webkit-input-placeholder { color: #999999;}
  textarea:-moz-placeholder { color: #999999;}
  textarea::-moz-placeholder { color: #999999;}
  textarea:-ms-input-placeholder { color: #999999;}
  
  /*---------------------------------------------*/
  button {
      outline: none !important;
      border: none;
      background: transparent;
  }
  
  button:hover {
      cursor: pointer;
  }
  
  iframe {
      border: none !important;
  }
  
  
  /*---------------------------------------------*/
  .container {
      max-width: 1200px;
  }
  
  
  
  
  /*//////////////////////////////////////////////////////////////////
  [ Contact ]*/
  
  .container-contact100 {
    width: 100%;  
    min-height: 30vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    position: relative;
    z-index: 1;
  }
  
  .container-contact100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    ;
    pointer-events: none;
  }
  
  .contact100-map {
    position: absolute;
    z-index: -2;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }
  
  .wrap-contact100 {
    width: 800px;
    height: 375px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 72px 150px 25px 150px;
  
    box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  }
  
  
  /*==================================================================
  [ Form ]*/
  
  .contact100-form {
    width: 100%;
    
    
  }
  
  .contact100-form-title {
    display: block;
  
    font-size: 30px;
    color: #333333;
    line-height: 1.2;
    text-align: left;
    padding-bottom: 34px;
  }
  
  /*------------------------------------------------------------------
  [ Input ]*/
  
  .wrap-input100 {
    width: 100%;
    position: relative;
    background-color: #fff;
    border-radius: 20px;
    margin-bottom: 30px;
  }
  
  .input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 16px;
    color: #4b2354;
    line-height: 1.2;
  }
  
  
  /*---------------------------------------------*/
  input.input100 {
    height: 62px;
    padding: 0 20px 0 23px;
  }
  
  
  textarea.input100 {
    min-height: 199px;
    padding: 19px 20px 0 23px;
  }
  
  /*------------------------------------------------------------------
  [ Focus Input ]*/
  
  .focus-input100 {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    border-radius: 20px;
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }
  
  .input100:focus + .focus-input100 {
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  }
  
  /*------------------------------------------------------------------
  [ Button ]*/
  .container-contact100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 10px;
    padding-bottom: 43px;
  }
  
  .contact100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 160px;
    height: 42px;
    background-color: #f8a736;
    border-radius: 21px;
  
    font-family: JosefinSans-Bold;
    font-size: 14px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    padding-top: 5px;
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  
    box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
  }
  
  .contact100-form-btn:hover {
    background-color: #f3b407;
    box-shadow: 0 10px 30px 0px rgba(247, 184, 14, 0.87);
    -moz-box-shadow: 0 10px 30px 0px rgba(247, 184, 14, 0.87);
    -webkit-box-shadow: 0 10px 30px 0px rgba(247, 184, 14, 0.87);
    -o-box-shadow: 0 10px 30px 0px rgba(247, 184, 14, 0.87);
    -ms-box-shadow: 0 10px 30px 0px rgba(247, 184, 14, 0.87);
  }
  
  /*------------------------------------------------------------------
  [ Responsive ]*/
  
  @media (max-width: 768px) {
    .wrap-contact100 {
      padding: 72px 50px 25px 50px;
    }
  }
  
  @media (max-width: 576px) {
    .wrap-contact100 {
      padding: 72px 15px 25px 15px;
    }
  }
  
  
  /*------------------------------------------------------------------
  [ Alert validate ]*/
  
  .validate-input {
    position: relative;
  }
  
  .alert-validate .focus-input100 {
    box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -moz-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -webkit-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -o-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -ms-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  }
  
  .alert-validate::before {
    content: attr(data-validate);
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    width: 100%;
    min-height: 62px;
    background-color: #fff;
    border-radius: 20px;
    top: 0px;
    left: 0px;
    padding: 0 45px 0 22px;
    pointer-events: none;
  
    font-family: SourceSansPro-Bold;
    font-size: 16px;
    color: #fa4251;
    line-height: 1.2;
  }
  
  .btn-hide-validate {
    font-family: Material-Design-Iconic-Font;
    font-size: 15px;
    color: #fa4251;
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    height: 62px;
    top: 0px;
    right: 28px;
  }
  
  .rs1-alert-validate.alert-validate::before {
    background-color: #fff;
  }
  
  .true-validate::after {
    content: "\f269";
    font-family: Material-Design-Iconic-Font;
    font-size: 15px;
    color: #57b846;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    height: 62px;
    top: 0px;
    right: 28px;
  }
  
  /*---------------------------------------------*/
  @media (max-width: 576px) {
    .alert-validate::before {
      padding: 0 30px 0 10px;
    }
  
    .true-validate::after,
    .btn-hide-validate {
      right: 10px;
    }
  }
  
  
  /*==================================================================
  [ Contact more ]*/
  
  .contact100-more {
    font-family: SourceSansPro-Regular;
    font-size: 16px;
    color: #999999;
    line-height: 1.5;
    text-align: center;
  }
  
  .contact100-more-highlight {
    color: #bd59d4;
  }

	</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speed Car</title>
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style_menu.css">
    
    

    <link rel="shortcut icon" href="../../assets/css/imagens/logos.ico" >
    </head>
    <body>
    <div class="container-fluid">
            @yield('menu')
            @yield('content')
           
    </div>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
    </body>
    </html>
