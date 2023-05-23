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
    top: 1%;
    left: 5%;
    scale: 60%;
}

#main span
{
   font-size: 30px; 
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
   z-index: 1;
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

.sidenav .box-c1 a.logo
{
    font-size: 35px;
    opacity:1;
    color: #000000;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
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
}
.sidenav .nav-list
{
    padding: 0;
    list-style: none;
}

.sidenav .nav-list a
{
    padding: 10px 8px 8px 32px;
    margin: 10px;
    text-decoration: none;
    font-size:25px;
    font-weight:500;
    color:#000;
    display: block;
    background-color: #b8b8ba;
    transition: all 0.1s;
    transform:translate(0%, 0%);
}
.sidenav .nav-list a:hover
{
    background-color: #363647;
    color:#fff;
}
.navside
{
    width: 300px;
    visibility: visible;
    opacity:0.95;
}
.nav-b
{
    color: white;
    font-weight: bold;
    margin: 5 5px;
    display: inline-block;
    font-size: 120%;
    padding: 0.5% 0.9%;
    border-radius: 3px;
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
.div-copy
{
    transform: translate(0%, 420%);
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

