<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="png" href="download.jpeg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHNOLOGY</title>
    <link rel="stylesheet" href="./Main.css">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./download.jpeg" alt="PSG">
                </span>

                <div class="text logo-text">
                    <span class="name">PSG Collge of Technology</span>
                    <span class="profession">PSG</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#Dashboard">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#Popular">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Popular</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="./Login and signup.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
    </div>
    <div style="margin-left: 37%; margin-top: -10%; display: inline-flex;position: absolute;" id="home"> 
    <img src="./download.jpeg" alt="PSG" width="60" height="60">&emsp;&nbsp;
    <h1 style="margin-top: 7px; color: rgb(255, 255, 255); text-shadow: 2px 2px 4px rgb(0, 166, 255);font-family: Tahoma, sans-serif;">ABC TECHNOLOGY</h1>
    </div>
    <div style="display: inline-flex;float: right; margin-right: 5%; margin-top: -10%; font-family: Tahoma, sans-serif; font-size: 18px;color: rgb(232, 232, 232);text-shadow: 1px 1px 4px rgb(68, 68, 68);">
       <a href="#about" style="text-decoration: none; color: white;"><p class="pa2">Service</p></a> &emsp;&emsp;&emsp;
       <a href="./about.html" style="text-decoration: none; color: white;"><p class="pa3">About</p></a> &emsp;&emsp;
       <a href="#contact" style="text-decoration: none; color: white;"><p class="pa4">Contact</p></a> &emsp;&emsp;
    </div>
    <div style="margin-left: 10%;font-family: Tahoma, sans-serif; margin-top: 13%;font-size: 24px;">
    <h1 style="color: white;">
        Knowledge ,love and<br/>Work</h1> <br/>
    <p style="color: rgb(214, 214, 214);line-height: 1.5em;">PSG College of Technology is an autonomous,  <br/> 
        government aided, private engineering college in Coimbatore, India. <br>It is affiliated with Anna University.  <br/></p>
    </div> <br/><br/><br/><br/>
    <div class="btn1">
        <p style="font-size: 16px;text-shadow: 1px 1px 1px black;"> <a href="#" style="text-decoration: none; color: white;">log in&nbsp;</a> <span>&#8594;</span></p>
    </div>
    <div class="btn2">
        <p style="font-size: 16px;text-shadow: 1px 1px 1px black;"><a href="#about" style="text-decoration: none; color: white;">SIGN UP!&nbsp;</a> <span>&#8594;</span></p>
    </div>
    <div style="float: right; margin-top: -30%;margin-right: 2%;">
        <img src="./pic(1).png" alt="Pic" width="600" height="500"/>
    </div>
    <div style="margin-top: 10%;" id="about">
        <h1 style="text-align: center;color: white;text-shadow: 2px 2px 4px rgb(130, 130, 130);">Campus resources <br/>and services</h1>
    </div> <br/><br/><br/>
    <div style="display: inline-flex; margin-left: 15%;">
    <div class="box1" style="color: white; border: 1px solid rgb(85, 85, 255);border-radius: 37px;padding-block: 50px;background-color: rgb(115, 115, 255); width: 25%; height: 30%; position: relative;">
        <h1 style="text-align: center;line-height: 2em;margin-top: -7%;"> Essential Services:</h1>
        <h4 style="line-height: 2em;margin-left: 7%;">Here, We will provide...!</h4> <br/>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Academic support.</p>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Course step by step guidelines from scratch to advanced.</p>
    </div> &emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="box2" style="color: white; border: 1px solid rgb(85, 85, 255);border-radius: 37px;padding-block: 50px;background-color: rgb(115, 115, 255); width: 25%; height: 30%; position: relative;">
        <h1 style="line-height: 2em;margin-top: -7%;text-align: center;">IT support:</h1>
        <h4 style="line-height: 2em;margin-left: 7%;">Here, We will provide...!</h4> <br/>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Theory & video content, E-books for that courses.</p>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Premium Tools and Practising platforms.</p>
    </div> &emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="box3" style="color: white; border: 1px solid rgb(85, 85, 255);border-radius: 37px;padding-block: 50px;background-color: rgb(115, 115, 255);width: 25%; height: 30%;position: relative;">
        <h1 style="line-height: 2em;margin-top: -7%;text-align: center;">Maintainence:</h1>
        <h4 style="line-height: 2em;margin-left: 7%;">Here, We will provide...!</h4>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Testing your skill through task assigning.</p>
        <p style="margin-left: 12%; line-height: 1.5em;"><span>&#8594; </span>Step by step guidelines for how to start your career on Freelancing platforms.</p>
    </div>
    </div>
    <div class="service-swipe" id="Dashboard">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">VISION AND MISSION</p></center>
		</div>
		<a href="./computer_courses.html"><div class="s-card"><p>Empower individual to acheive their managerial potential</p></div></a>
		<a href="./jee.html"><div class="s-card"><p>Deep innovative teaching and learning methods</p></div></a>
		</div>
    <div class="title" id="Popular">

	</div>
	<br><br>
	
    <footer>
        <div class="footer-content" id="contact">
            <h3>PSG TECHNOLOGY</h3>
            <p>At PSG we specialize in providing Courses, E-Books,Premium Software and scaling beautiful,and best for you all over the world...! Then Managing you business with our best service...!</p>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
             </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 <a href="#">All In One!</a>  </p>
            <div class="footer-menu">
                <ul class="f-menu">
                   <li class="pa1"><a href="#home">Home</a></li>
                   <li class="pa2"><a href="#about">Services</a></li>
                   <li class="pa3"><a href="./about.html">About</a></li>
                   <li class="pa4"><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>
  <script src="./Main.js"></script>
</body>
</html>