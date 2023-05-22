<?php
    header("Content-type: text/css; charset: UTF-8");
?>
.body
{
    background-color: #31313D;
    scrollbar-width: none;
}
::-webkit-scrollbar
{
    width: 0;
}
.nav-bar
{
    background-color: black;
    width: 100%;
    padding: 1%;
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
    padding: 0.5% 0.9%;
    border-radius: 3px;
    text-transform: uppercase;
    transform: translate(20%, 0%);
    background: black;
}
#main
{
    display: flex;
    position: absolute;
    top: 1%;
    left: 5%;
    scale: 60%;
}

#main span
{
   font-size: 30px;
   background-color: #000;
   color: white;
   padding: 4px 10px;;
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
    opacity:1;
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
    height: .5%;
    width: 100%;
    background-color: black;
}
.text
{
    padding: 3%;
    color: white;
    font-size: 2vh;
}
.div-store
{
    background-color: #535366;
    margin: 3%;
    padding: 2%;
}
