<?php
    header("Content-type: text/css; charset: UTF-8");
?>
*
{
    scrollbar-width: none;
}
.body
{
    cursor: url(altele/cursor.cur), default;
    background-color: #31313D;
    overflow-x: hidden;
}
::-webkit-scrollbar
{
    width: 0;
}
.nav-button
{
    transform: translate(0, 50%);
}

.nav-bar
{
    background-color: black;
    width: 100%;
    padding: 0%;
    position:fixed;
    top:0%;
    left:0%;
    opacity:0.6;
    height: 10%;
}
.nav-ul
{
    position: right;
}
.nav-a
{
    color: white;
    font-weight: bold;
    margin: 5 5px;
    display: inline-block;
    font-size: 120%;
    border-radius: 3px;
    text-transform: uppercase;
    transform: translate(20%, 0%);
    background: black;
}
#main
{
    display: flex;
    position: fixed;
    top: 1.6vh;
    left: 5%;
    scale: 70%;
}

#main span
{
   font-size: 210%; 
   color: white;
   padding: 0px 0px;
   border-radius: 5px;
   cursor: pointer;
}
.sidenav
{
   background-color: #212129;
   width:0;
   height: 100vh;
   position: relative;
   z-index: 2;
   top: 0;
   left: 0; 
   transition: all 0.5s;
   padding-top: 30px;
   opacity: 0;
   visibility: hidden;
   position: fixed;

}
.sidenav .box-c1
{
    display: flex;
    flex-direction: row;
    padding: 3px 15px;
    position: relative;
}

.sidenav .closebtn
{
    position: absolute;
    top: 0;
    right: -35px;
    font-size: 36px;
    padding: 0px 7px;
    color: #fff;
    text-decoration:none;
    transition: all 0.02s linear;
    z-index:1;
}

@media screen and (min-width: 1151px) {

.sidenav .nav-list
{
    padding: 0;
    list-style: none;
    font-size:1vw;
}
.sidenav .nav-list a
{
    padding: 3% 2% 2% 5%;
    margin: 6%;
    text-decoration: none;
    font-weight:500;
    font-size:160%;
    color:#000;
    display: block;
    background-color: #b8b8ba;
    transition: all 0.1s;
    transform:translate(0%, 0%);
}

.navside
{
    width: 17%;
    visibility: visible;
    opacity:0.95;
}

.sidenav .nav-list a:hover
{
    background-color: #363647;
    color:#fff;
    font-size:210%;
}

.sidenav .closebtn:hover
{
    color:red;
}


.div-copy
{
    font-size:1.2vw;
    color:white;
    position:absolute;
    top:90%;
    left:5%;
}


.div-Project1
{
    top:30vh;
    left:-5vw;
    height:50%;
    position:absolute;
    z-index: 1;
}

.div-Project1 a
{
    text-decoration: none;
    font-size:10vw;
    font-weight:500;
    color:#fff;
    text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black; 
    background-size: 72vw 28vh;
    display: block;
    background-image: url('poze/poza_masina.png');
    transition: all 0.1s;
    opacity:65%; 
}

.div-Project1 a:hover
{
    font-size:12vw;
    opacity:100%;
    background-color: #363647;
    color:#fff;   
}
.div-login
{
    top: 3.8%;
    left: 75vw;
    height:50%;
    position:fixed;
    z-index: 1; 
    font-size: 1vw;
}

.div-login a:hover
{
    font-size:130%;
    background-color: #363647;
    color:#fff;
}
.div-detjc > details > summary
{
    font-size:0vw;
}
}

@media screen and (max-width: 1150px) {
    #main
{
    scale:65%;
    left:-2vw;
    top:1.2vh;
}

.sidenav .closebtn
{
    background-color:red;
}
.sidenav .nav-list
{
    padding: 0;
    list-style: none;
    font-size:1.35vw;
}

.sidenav .nav-list a
{
    padding: 8% 2% 8% 5%;
    margin: 6%;
    text-decoration: none;
    font-weight:500;
    font-size:200%;
    color:#000;
    display: block;
    background-color: #b8b8ba;
    transition: all 0.1s;
    transform:translate(0%, 0%);
}

.navside
{
    width: 30%;
    visibility: visible;
    opacity:0.95;
}

.div-copy
{
    font-size:2vw;
    color:white;
    position:absolute;
    top:90%;
    left:5%;
}

.div-Project1
{
    top:30vh;
    left:-5vw;
    height:50%;
    position:absolute;
    z-index: 1;
}

.div-Project1 a
{
    text-decoration: none;
    font-size:10vw;
    font-weight:500;
    color:#fff;
    text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black; 
    background-size: 72vw 8vh;
    display: block;
    background-image: url('poze/poza_masina.png');
    transition: all 0.1s;
    opacity:65%; 
}

.div-Project1 a:hover
{
    font-size:10vw;
    opacity:100%;
    background-color: #363647;
    color:#fff;   
}
.div-login
{
    top: 4.2vh;
    left: 55vw;
    height:50%;
    position:fixed;
    z-index: 1; 
    font-size: 0vw;
}

}
.div-detjc
{
    top:4vh; 
    left:30vw;
    z-index:1;
    color:#fff;
    position:fixed;
}

.div-detjc > details
{   
    font-size:150%;
    color:#fff;
}

.div-detjc > details > summary
{
    list-style: none;
    color:#fff;
}
.div-detjc > details[open] > summary
{
    list-style: none;
}
.div-detjc a
{
    text-decoration:none;
    padding: 0.2vw 0.2vw 0.5vw 0%;
    font-size:4vw;
    text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
    background-image: url('poze/poza_masina.png');
    background-size: 25vw 5vh;
    transform:translate(-12vw,0%);
    
    
}
.div-detjc ul
{
    list-style-type: none; 
}


.sidenav .nav-list a:hover
{
    background-color: #363647;
    color:#fff;
}

.nav-b
{
    color: white;
    font-weight: bold;
    margin: 5 5px;
    display: inline-block;
    font-size: 120%;
    padding: 0.5% 0.9%;
    border-radius: 2%;
    text-transform: uppercase;
    transform: translate(0%, 0%);
}
.footer
{
    transform: translate(0, 0);
    height: 3%;
    width: 99%;
    background-color: black;
    position: absolute;
    bottom: -90px;
}
.text-footer
{
    color: white;
    font-size: 2vh;
    transform: translate(3%, -70%);
}

.div-store
{
    background-color: #535366;
    margin: 3%;
    padding: 2%;
    top: 10%;
    left: 18.5%;
    position:absolute;
}
.div-poza
{
    top: 35%;
    right: 35%;
    scale: 300%;
    position:absolute;
    z-index: -1;
}
.div-textComunitate
{
    top: 20%;
    left: 20%;
    height:50%;
    position:absolute;
    z-index: -1;
}
.div-textMagazin
{
    top: 30%;
    left: 20%;
    height:50%;
    position:absolute;
    z-index: -1;
}
.div-textAcasa
{
    top: 80%;
    left: 42%;
    position:absolute;
    z-index: -1;
}
.div-textDespre
{
    top: 20%;
    left: 20%;
    height:50%;
    position:absolute;
    z-index: -1;
}
.div-textAjutor
{
    top: 20%;
    left: 20%;
    height:50%;
    position:absolute;
    z-index: -1;    
}
.nav-steag1
{
    position:fixed;
    z-index: 1;
    right: 5%;
    top:2.5%;
    border-style:solid;
    border-width: 1px;
    border-color: white;
    transform: translate(-75%, 0);
}
.nav-steag2
{
    position:fixed;
    z-index: 1;
    right: 3%;
    top:2.5%;
    border-style:solid;
    border-width: 1px;;
    border-color: white;
}
.div-cercMeniu
{
    transform: translate(20%, 0%);
}
.div-textMeniu
{
    background-color: #000;
    color: #c2c2c2;
    margin: 10px;
}
.div-textProject1
{
    top: 20%;
    left: 20%;
    height:50%;
    position:absolute;
    z-index: -1;  
}
.login {
    align="center"
  width: 50px;
  height: 250px;
  background-color: #282828;
  border: 1px solid #383838; 
  border-radius: 5px;
  padding: 10px;
  font-family: Arial, sans-serif;
}



.div-login a
{
    background:0;
    text-decoration: none;
}



























@media only screen and (min-device-width: 1366px) {
    body, html {
  height: 100%;
  padding: 10px;
  
  align: center;
  width: 98.7%;
}
}
body, html {
  height: 100%;
  width: 98.7%;
  align: center;
}


.parallax {
    
    
                                                 /* MODIFICATI  DE AICI IMAGINEA DE SUS */

  background-image: url('https://builtin.com/sites/www.builtin.com/files/styles/og/public/2022-08/gaming-companies.png'); 

  height: 100%; 

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.rounded-corners {
  border-radius: 0 0 20px 20px;
}
.rounded-corners2 {
  border-radius: 20px 20px  0 0;
}
.mainul {

    align="center"
      width: 50px;
      height: 100px;
      background-color: #282828;
      border: 1px solid #383838; 
      border-radius: 5px;
      padding: 10px;
      font-family: Arial, sans-serif;
    }

.postare {

  width: 350px;
  height: 200px;
  background-color: #282828;
  border: 1px solid #383838; 
  border-radius: 5px;
  padding: 10px;
  font-family: Arial, sans-serif;
}

@media only screen and (max-device-width: 1366px) {
  .parallax {
    background-attachment: scroll;
  }
}


#top-button {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #000;
            color: #fff;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            cursor: pointer;
            z-index: 9999;
            opacity: 0;
            border-radius: 10px;
            transition: opacity 0.3s ease-in-out;
}




















@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins',sans-serif;
}

.login-form{
  position: fixed;
  width: 370px;
  height: auto;
  background: #1b1b1b;
  padding: 40px 35px 60px;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  box-shadow: inset 0 0 1px #272727;
  transform: translate(145%, 10%);
}
.text{
  font-size: 30px;
  color: #c7c7c7;
  font-weight: 600;
  letter-spacing: 2px;
}
form{
  margin-top: 40px;
}
form .field{
  margin-top: 20px;
  display: flex;
}
.field .fas{
  height: 50px;
  width: 60px;
  color: #868686;
  font-size: 20px;
  line-height: 50px;
  border: 1px solid #444;
  border-right: none;
  border-radius: 5px 0 0 5px;
  background: linear-gradient(#333,#222);
}
.field input,form button{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 19px;
  color: #868686;
  padding: 0 15px;
  border-radius: 0 5px 5px 0;
  border: 1px solid #444;
  caret-color: #339933;
  background: linear-gradient(#333,#222);
}
input:focus{
  color: #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.2),
              inset 0 0 5px rgba(0,255,0,.1);
  background: linear-gradient(#333933,#222922);
  animation: glow .8s ease-out infinite alternate;
}
@keyframes glow {
   0%{
    border-color: #339933;
    box-shadow: 0 0 5px rgba(0,255,0,.2),
                inset 0 0 5px rgba(0,0,0,.1);
  }
   100%{
    border-color: #6f6;
    box-shadow: 0 0 20px rgba(0,255,0,.6),
                inset 0 0 10px rgba(0,255,0,.4);
  }
}
button{
  margin-top: 30px;
  border-radius: 5px!important;
  font-weight: 600;
  letter-spacing: 1px;
  cursor: pointer;
}
button:hover{
  color: #339933;
  border: 1px solid #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.3),
              0 0 10px rgba(0,255,0,.2),
              0 0 15px rgba(0,255,0,.1),
              0 2px 0 black;
}
.link{
  margin-top: 25px;
  color: #868686;
}
.link a{
  color: #339933;
  text-decoration: none;
}
.link a:hover{
  text-decoration: underline;
}