<!DOCTYPE html>
<html>
<head>

	<title>Temprature CONVERSION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<style>
		*{
			margin:0; padding: 0; box-sizing: border-box;
		}

		header{
			background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgb(0, 0, 0, 0.5)), url('images/landscape-photography-of-green-mountains-910411.jpg');
			height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
		}

		h1{
			text-align: center; line-height: 20vh;
		}
		.main-div{
			width: 100%; height: 80vh; display: flex; justify-content: space-around; align-items: center;
		}
         
         .left-side img{
         	max-width: 400px;
         	height: auto;
         }
         .right-side{
         	width: 400px;
         	height: 300px;
         	background-color: gray;
         	border-radius: 15px;
         	display:flex;
         	flex-direction: column;
         	justify-content: center;
         	align-items: center;
         	text-align: center;
         }
         body{
                font-family: 'Flamenco', cursive;



         }
         .input1{
         	height: 40px;
         	width: 250px;
         	padding: 5px;
         	border-radius: 1px solid gray;
         	border-radius: 5px;
         	outline: none;

         }
         .selection{
         	width: 100%;
         	margin: 15px;
         }
         .colorchange{
	animation: colorchangeArt 1s infinite;
}

@keyframes colorchangeArt {
	0%{color:red;}
	25%{color: yellow;}
	50%{color:whie;}
	100%{color:purple;}
}
         .btn{
         	padding: 10px 18px;
         	border-radius: 10px;
         	outline: none;
         	border: none;
         	background-color: blue;
         	color: white;
         	font-size: 0.6em;
         	text-align: center;
         }
          p{
          	margin: 20px 0 0 0;
          	color: white;
          }

          .convt{
          	text-align: center;
          	color: white;
          }
          @media only screen and (max-width: 1366px){
           .left-side{font-size: 280%;}

           
          }
            @media only screen and (max-width: 852px){
               .right-side{font-size: 100%;}

           }
            @media only screen and (max-width: 680px){
            	.right-side{font-size: 80%;}

            }

             @media only screen and (max-width: 844px){
             	.right-side{
             		width: 260px;
             	}
             }
              @media only screen and (max-width: 844px){
              	.left-side{
                   font-size: 120%;
                   width: auto;
                   height: auto;
              	}
              }
               @media only screen and (max-width: 710px){
               	.right-side{
                  width: 240px;
               	}
               }
                @media only screen and (max-width: 710px){
                	.input1{
                     width: 220px;
                	}
                }
                 @media only screen and (max-width: 710px){
                 	.left-side{
                       margin-right: 10px;
                       height: auto;
                       	
                       
                 	}
                 }
                   @media only screen and (max-width: 690px){
                   	.right-side{
                      width: 200px;
                   	}
                   }
                    @media only screen and (max-width: 690px){
                    	.input1{
                    		width: 180px;
                    	}
                    }
                     @media only screen and (max-width: 635px){
                     	.right-side{
                           width: 140px;
                     	}
                     }
                      @media only screen and (max-width: 635px){
                      	.input1{

                      		width: 120px;

                      	}
	                      	}
   	</style>
</head>
         
<body>

	<header>

		<h1> Temprature Conversion</h1>
		<div class="convt">
		<h2> <span class="colorchange"> EASY TO USE AND QUICK TO ACCESS</span></h2>
	</div>
		<div class="main-div">
			<div class="left-side">
				<img src="images/—Pngtree—_blue smoke abstract_3780311.png">
				
				
			</div>
			<div class="right-side">

					<form method="POST">
						<input type="text" name="num" placeholder="enter your number" class="input1">
						<div class="selection">
							<label>celc</label>
							<input type="radio" name="units" value="celc">
							<label>farh</label>
							<input type="radio" name="units" value="farh">
							
						</div>

                       <input type="submit" name="submit" value="Convert Now" class="btn">					
				</form>
				<div>
					<p> 
                         <?php
                                if(isset($_POST['submit'])){

                                  $num = $_POST['num'];
                                  $temp = $_POST['units'];
                                  if($temp == "celc"){
                                  	$result = $num*9/5 +32;
                                  	echo "The conversion of celcius to farhenheit is:" .$result;
                                  }else{
                                  	$result = ($num-32)*5/9;
                                  	echo "The conversion of farenheit to celcius is:" .$result;
                                  }




                                }


                         ?>


			</p>
				</div>
	</header>

</body>
</html>