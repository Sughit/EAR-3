<?php
    header("Content-type: text/css; charset: UTF-8");
?>
*
{
    scrollbar-width: none;
}
.body
{
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
    top: 1.3%;
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
    top: 2%;
    left: 25%;
    height:50%;
    position:fixed;
    z-index: 0;  
}

.div-Project1 a
{
    padding: 5% 10% 6% 0%;
    margin: 10px;
    text-decoration: none;
    font-size:175%;
    font-weight:500;
    color:#000;
    display: block;
    background-color: #b8b8ba;
    opacity:80%;
    transition: all 0.1s;
}

.div-Project1 a:hover
{
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
}

@media screen and (max-width: 1150px) {

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
    top: 2%;
    left: 32%;
    height:50%;
    position:fixed;
    z-index: 0;  
}

.div-Project1 a
{
    padding: 5% 10% 6% 0%;
    margin: 10px;
    text-decoration: none;
    font-size:175%;
    font-weight:500;
    color:#000;
    display: block;
    background-color: #b8b8ba;
    opacity:80%;
    transition: all 0.1s;
}

.div-Project1 a:hover
{
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
    font-size: 0vw;
}
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
.text
{
    transform: translate(0, 0);
    padding: 3%;
    color: white;
    font-size: 2vh;
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

.div-login a:hover
{
    background-color: #363647;
    color:#fff;
}



























@media only screen and (min-device-width: 1366px) {
    body, html {
  height: 100%;
  padding: 10px;
  width: 98.7%;
}
}
body, html {
  height: 100%;
  width: 98.7%;
}
body {
  cursor: url(altele/cursor.cur), auto;
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