<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aleksy Domżalski - Website</title>
	<link rel="stylesheet" href="style/style.css"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<section class="main">
		<nav>
			<a href="#" class="logo">
				<img src="images/logo.png"/>
			</a>
			
			<ul class="menu">
				<li><a href="#" class="active">Home</a></li>
				<li><a href="https://www.freelnk.com/domzal" target="_blank">My Social Media</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="main-heading">
			<h1>Hello!,	 I'm Aleksy,</h1>
			<p>web developer</p>
			<a class="main-btn" href="#">Contact</a>
		</div>
	</section>
	
	<section class="features">
		<div class="features-container">
			
			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon1.png"/>
				</div>
				<div class="f-text">
					<h4>Web Development</h4>
					<p>Lorem ipsum dolor sit amet</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>
			
			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon2.png"/>
				</div>
				<div class="f-text">
					<h4>Software Development</h4>
					<p>Lorem ipsum dolor sit amet</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>
			
			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon3.png"/>
				</div>
				<div class="f-text">
					<h4>Mobile Apps Development</h4>
					<p>Lorem ipsum dolor sit amet</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>
		</div>
	</section>
	

	<section>
	
	<section class="about">
		<div class="about-img">
			<img src="images/about.png">
		</div>
		<div class="wrapper">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="container">
            <h2>My Experience</h2>
            <div class="skills">
                <div class="details">
                    <span>HTML</span>
                    <span>90%</span>
                </div>
                <div class="bar">
                    <div id="html-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>CSS</span>
                    <span>75%</span>
                </div>
                <div class="bar">
                    <div id="css-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>JavaScript</span>
                    <span>72%</span>
                </div>
                <div class="bar">
                    <div id="js-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>PHP</span>
                    <span>68%</span>
                </div>
                <div class="bar">
                    <div id="jQuery-bar"></div>
                </div>
            </div>
			<div class="skills">
                <div class="details">
                    <span>.Lua</span>
                    <span>70%</span>
                </div>
                <div class="bar">
                    <div id="lua-bar"></div>
                </div>
            </div>
        </div>
    </div>
	
	<style media="screen">
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.wrapper{
    width: 40%;
    min-width: 590px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 75%;
    top: 53%;
}
.container{
    width: 100%;
    padding: 30px 30px 50px;
    background-color: white;
    border: 2px solid rgba(255,255,255,0.06);
    border-radius: 10px;
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
    backdrop-filter: blur(10px);
} 
.container *{
    font-family: "Poppins",sans-serif;
    color: black;
    font-weight: 500;
}
h2{
    margin-bottom: 50px;
    letter-spacing: 2px;
    text-align: center;
    font-size: 33px;
    font-weight: bold;
}
.skills:not(:last-child){
    margin-bottom: 30px;
}
.details{
    width: 100%;
    display: flex;  
    justify-content: space-between;
    margin-bottom: 10px;
}
.bar{
    position: relative;
 
    border: 2px solid #000000;
 
    border-radius: 20px;
  
}
.bar div{
    position: relative;
    width: 0;
    height: 9px;
    border-radius: 10px;
    background-color: #fc6f41;
   
 
}
#html-bar{
    animation: html-fill 2s forwards;
}
@keyframes html-fill{
    100%{
        width: 90%;
    }
}
#css-bar{
    animation: css-fill 2s forwards;
}
@keyframes css-fill{
    100%{
        width: 75%;
    }
}
#js-bar{
    animation: js-fill 2s forwards;
}
@keyframes js-fill {
    100%{
        width: 72%;
    }
}
#lua-bar{
    animation: lua-fill 2s forwards;
}
@keyframes lua-fill{
    100%{
        width: 75%;
    }
}
#jQuery-bar{
    animation: jQuery-fill 2s forwards;
}
@keyframes jQuery-fill{
    100%{
        width: 58%;
    }
} 
    </style>
	</section>
	
	<section>
		<div class="contact">
			<div class="contact-heading">
				<h1>CONTACT ME</h1>
				<p>Lorem ipsum sit amet fjdksfndskjfndskjfndskjfdnskjfndskjfndskjfds</p>
			</div>
			<form action="userinformation.php" method="post">
				<input type="text" name="user" placeholder="Type Your Full Name"/>
				<input type="email" name="email" placeholder="Type Your E-Mail"/>
				<textarea name="message" placeholder="Type Your Message Here..."></textarea>
				<button class="main-btn contact-btn" type="submit">Continue</button>
			</form>
	</section>
</body>
</html>