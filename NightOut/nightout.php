<?php

if( isset($_POST['participant_first'])) 
{
	$participant_first = $_POST['participant_first'];
	$participant_middle = $_POST['participant_middle'];
	$participant_last = $_POST['participant_last'];
	$title = $_POST['title'];
	$story = $_POST['story'];
}

?>



<html lang="en">
    
  <head>
      
    <title>CATT | Technitude 2017</title>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
    <link href="https://fonts.googleapis.com/css?family=Righteous|Roboto+Condensed" rel="stylesheet">    

    <link rel="stylesheet" type="text/css" href="./css/all-re-style.css">
      
    <link rel="icon" type="image/png" href="./images/favicon.jpg">
		
		
		<style>
		
			#data1 {
				
				font-size: 10em;
				color: yellow;
				
				
			}
			
			#data2 {
				
				font-size: 10em;
				color: yellow;
				
				
			}
			
			#data3 {
				
				font-size: 10em;
				color: yellow;
				
			}
			
			@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Handlee);

body {
    margin: 40px 0 0;
    background: #91D1D3;
    font-family: 'Roboto', sans-serif;
}

.paper {
    position: relative;
    width: 90%;
    max-width: 800px;
    min-width: 400px;
    height: 480px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    overflow: hidden;
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 60px;
    background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
    background-size: 30px 30px;
    border-right: 3px solid #D44147;
    box-sizing: border-box;
}

.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 60px;
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}

.paper-content textarea {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: mediumblue;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;
}

footer {
    margin-top: 30px;
    text-align: center;
    font-size: 12px;
    color: rgba(0,0,0,.6);
}
footer a {
    color: rgba(255,255,255,.8);
}
			
			label {
				
				font-size: 2em;
				
			}			

		
		</style>
      
  </head>
    
 <body data-spy="scroll" data-target=".navbar" data-offset="50">


	

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">CATT</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Technitude <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#second">Events </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#third">Contact Us </a>
          </li>
	
	  <li class="nav-item">
            <a class="nav-link" href="index.html#fourth">Gallery </a>
          </li>
	
			  <li class="nav-item">
            <a class="nav-link" href="index.html#fifth">Sponsors </a>
					</li>
					
					<li class="nav-item">
            <a class="nav-link" href="index.html#fifth">Register for Events </a>
					</li>

        </ul>
      </div>
    </nav>
	 
	 	 <div class="jumbotron jumbotron-fluid jumbotron-fluid-4" style="text-align: center" id="fifth">
        
      <div class="container">

				<h1 class="head display-3">Click on the Genre to get points for your story.</h1>

				<h1 class="head display-3">Choose your preferred GENRE: <h1>
				
      </div>
        
    </div>
	 
	 <div class="jumbotron bg-inverse jumbotron-fluid-2" id="second">
        
     
<section class="cd-slider">
  <ul>
    <li data-color="#FF384B">
      <div class="content" style="background-image:url(./images/sci-fi.jpg); text-align: center;">
        <blockquote class="blockquote-1">
					<p id="data1" onclick="scifi()">SCI-FI</p>
            </blockquote>          
      </div>
    </li>
    <li data-color="#FF9C00">
      <div class="content" style="background-image:url(./images/always1.jpg); text-align: center;">
        <blockquote class="blockquote-1">
          <p id="data2" onclick="fantasy()">FANTASY</p>
          
        </blockquote>
      </div>
    </li>
    <li data-color="#002AFF">
      <div class="content" style="background-image:url(./images/mystery.jpg); text-align: center;">
        <blockquote class="blockquote-1">
          <p id="data3" onclick="mystery()">MYSTERY</p>
        </blockquote>
      </div>
    </li>

  </ul>
  <nav class="slider-nav">
    <div><a class="prev" href="#"></a></div>
    <div><a class="next" href="#"></a></div>
  </nav>
</section>  
    </div>
				
				<div class="jumbotron jumbotron-fluid jumbotron-fluid-4" style="text-align: center" id="fifth">
        
      <div class="container">

				<h1 class="head display-3">You get your points here !!</h1>
				
				<h1 class="head display-3" id="demo"></h1>
			<form id="nightout_form" action="add.php" method="GET">
			<div class="form-group"><label>First Name</label>
				<input  name = "participant_first" type = "text" placeholder= "First Name" value = <?php if(isset($_POST['participant_first'])): ?> <?=  $participant_first ?> <?php endif; ?>></input>
				<div class="form-group">
				<label>Middle Name</label>
				<input name = "participant_middle" type = "text" placeholder= "Middle Name" value = <?php if(isset($_POST['participant_middle'])): ?> <?=  $participant_middle ?> <?php endif; ?><br> </div>
				<div class="form-group">
				<label>Last Name</label>
				<input name = "participant_last" type = "text" placeholder= "Last Name" value = <?php if(isset($_POST['participant_last'])): ?> <?=  $participant_last ?> <?php endif; ?> <br>
			</div>
			<div class="form-group">
					<label>Title</label>
					<input name = "title" type = "text" placeholder="title" value = <?php if(isset($_POST['title'])): ?> <?=  $title ?> <?php endif; ?> 
				</div>
				<div class="paper">
    <div class="paper-content">
        <textarea name = "story" id = "story" type = "text" placeholder="You can write your story here." name='story'></textarea>
    </div>
</div>
				</form>
				
      </div>
        
    </div>

				<script type="text/javascript">
					
					var firstTime ="1";
					
					function scifi() {
						
						if(firstTime == 1) {
							
							firstTime = "0";
							
					var x = Math.floor(Math.random() * 3);
							
					var y = Math.floor(Math.random() * 3);
				
				var scifiobj= '{ "objects" : [' +
'{ "firstObjects":" Time Machine " , "lastObjects":" Car " },' +
'{ "firstObjects":" Dream Interceptor " , "lastObjects":" Memories " },' +
'{ "firstObjects":" Light Saber " , "lastObjects":" Darth Vaders Helmet " } ]}';

var scifistory= '{ "storyline" : [' +
'{ "firstLine":" Nazis won the WW2. "},' +
'{ "firstLine":" Gandhiji lived a long life. "},' +
'{ "firstLine":" Japan dropped Nuclear Bomb on USA instead of the other way around. "} ]}';

obj = JSON.parse(scifiobj);
obj1 = JSON.parse(scifistory);
document.getElementById("demo").innerHTML = "The first object you got is" + obj.objects[x].firstObjects + ".<br>" + "The second object is" + obj.objects[x].lastObjects + ".<br>" + " And the Situation is " + obj1.storyline[y].firstLine;


						}
					
						
					}
				</script>
				
				<script type="text/javascript">
					
					var firstTime ="1";
					
					function fantasy() {
						
						if(firstTime == 1) {
							
							firstTime = "0";
							
					var x = Math.floor(Math.random() * 3);
							
					var y = Math.floor(Math.random() * 3);
				
				var fantobj= '{ "objects" : [' +
'{ "firstObjects":" Wand " , "lastObjects":" Broomstick " },' +
'{ "firstObjects":" Ring " , "lastObjects":" Sword " },' +
'{ "firstObjects":" Infinity Stone " , "lastObjects":" Infintity Gauntlet " } ]}';

var fantstory= '{ "storyline" : [' +
'{ "firstLine":" Harry kills Dumbeldore, and becomes leader of Death Eaters in Harry Potter. "},' +
'{ "firstLine":" Batman destroyed The Justice League and reveals he is Joker in DC Comics. "},' +
'{ "firstLine":" Jaadu kills Rohit in Koi Mil Gaya "} ]}';

obj = JSON.parse(fantobj);
obj1 = JSON.parse(fantstory);
document.getElementById("demo").innerHTML = "The first object you got is" + obj.objects[x].firstObjects + ".<br>" + "The second object is" + obj.objects[x].lastObjects + ".<br>" + " And the Situation is " + obj1.storyline[y].firstLine;


						}
					
						
					}
				</script>
				
				
								<script type="text/javascript">
					
					var firstTime ="1";
					
					function mystery() {
						
						if(firstTime == 1) {
							
							firstTime = "0";
							
					var x = Math.floor(Math.random() * 3);
							
					var y = Math.floor(Math.random() * 3);
				
				var mystobj= '{ "objects" : [' +
'{ "firstObjects":" Sherlocks Hat " , "lastObjects":" Violin " },' +
'{ "firstObjects":" Suicide Tapes " , "lastObjects":" Helmet " },' +
'{ "firstObjects":" Death Note " , "lastObjects":" Apple " } ]}';

var myststory= '{ "storyline" : [' +
'{ "firstLine":" Mycroft kills Sherlock. "},' +
'{ "firstLine":" Hannah is still alive. "},' +
'{ "firstLine":" Misa betrays Light. "} ]}';

obj = JSON.parse(mystobj);
obj1 = JSON.parse(myststory);
document.getElementById("demo").innerHTML = "The first object you got is" + obj.objects[x].firstObjects + ".<br>" + "The second object is" + obj.objects[x].lastObjects + ".<br>" + " And the Situation is " + obj1.storyline[y].firstLine;


						}
					
						
					}
				</script>
				
	 <script type="text/javascript" src="./javascript/slider-start.js"> </script>

<script type="text/javascript" src="./javascript/slider.js"> </script>
	</body>
	
</html>