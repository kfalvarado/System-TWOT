<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <style>

      



/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  background: #0c0b09;
  color: #fff;
}

.fst-italic{

    color:black;
   
    
    
}



a {
  color: #cda45e;
  text-decoration: none;
}

a:hover {
  color: #d9ba85;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", serif;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
/*

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #1a1814;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #1a1814;
  border-top-color: #cda45e;
  border-bottom-color: #cda45e;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
*/

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
  border: 2px solid #cda45e;
}
.back-to-top i {
  font-size: 28px;
  color: #cda45e;
  line-height: 0;
}
.back-to-top:hover {
  background: #cda45e;
  color: #1a1814;
}
.back-to-top:hover i {
  color: #444444;
}
.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}
/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  height: 40px;
  font-size: 14px;
  transition: all 0.5s;
  z-index: 996;
}
#topbar.topbar-scrolled {
  top: -40px;
}
#topbar .contact-info i {
  font-style: normal;
  color: #d9ba85;
}
#topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}
#topbar .languages ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  color: #cda45e;
}
#topbar .languages ul a {
  color: white;
}
#topbar .languages ul li + li {
  padding-left: 10px;
}
#topbar .languages ul li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: rgba(255, 255, 255, 0.5);
  content: "/";
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: rgba(12, 11, 9, 0.6);
  border-bottom: 1px solid rgba(12, 11, 9, 0.6);
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  top: 40px;
}
#header.header-scrolled {
  top: 0;
  background: rgba(0, 0, 0, 0.85);
  border-bottom: 1px solid #37332a;
}
#header .logo {
  font-size: 28px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}
#header .logo a {
  color: #fff;
}
#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
# Book a table button Menu
--------------------------------------------------------------*/
.book-a-table-btn {
  margin: 0 0 0 15px;
  border: 2px solid #cda45e;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
}
.book-a-table-btn:hover {
  background: #cda45e;
  color: #fff;
}
@media (max-width: 992px) {
  .book-a-table-btn {
    margin: 0 15px 0 0;
    padding: 8px 20px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #d9ba85;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  color: #444444;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #cda45e;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 6px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1a1814;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #cda45e;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #cda45e;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
  padding: 0;
}
#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .container {
  padding-top: 110px;
}
@media (max-width: 992px) {
  #hero .container {
    padding-top: 98px;
  }
}
#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}
#hero h1 span {
  color: #cda45e;
}
#hero h2 {
  color: #eee;
  margin-bottom: 10px 0 0 0;
  font-size: 22px;
}
#hero .btns {
  margin-top: 30px;
}
#hero .btn-menu, #hero .btn-book {
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;
}
#hero .btn-menu:hover, #hero .btn-book:hover {
  background: #cda45e;
  color: #fff;
}
#hero .btn-book {
  margin-left: 15px;
}
#hero .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#cda45e 50%, rgba(205, 164, 94, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}
#hero .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
#hero .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(205, 164, 94, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}
#hero .play-btn:hover::after {
  border-left: 15px solid #cda45e;
  transform: scale(20);
}
#hero .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 992px) {
  #hero .play-btn {
    margin-top: 30px;
  }
}
@media (max-height: 500px) {
  #hero {
    height: auto;
  }
  #hero .container {
    padding-top: 130px;
    padding-bottom: 60px;
  }
}
@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/

section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #1a1814;
}

.section-title {
  padding-bottom: 40px;
}
.section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}
.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  margin: 4px 10px;
}
.section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  font-family: "Playfair Display", serif;
  color: #cda45e;
}


/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/

.breadcrumbs {
  padding: 15px 0;
  background: #1d1b16;
  margin-top: 110px;
}
@media (max-width: 940px) {
  .breadcrumbs {
    margin-top: 98px;
  }
}
.breadcrumbs h2 {
  font-size: 26px;
  font-weight: 300;
}
.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}
.breadcrumbs ol li + li {
  padding-left: 10px;
}
.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #37332a;
  content: "/";
}
@media (max-width: 740px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/

.about {
  background: url("../img/about-bg.jpg") center center;
  background-size: cover;
  position: relative;
  padding: 80px 0;
}
.about:before {
  content: "";
  background: rgba(192,192,192,0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
.about .about-img {
  position: relative;
  transition: 0.5s;
}
.about .about-img img {
  max-width: 100%;
  border: 4px solid rgba(255, 255, 255, 0.2);
  position: relative;
}
.about .about-img::before {
  position: absolute;
  left: 20px;
  top: 20px;
  width: 60px;
  height: 60px;
  z-index: 1;
  content: "";
  border-left: 5px solid #cda45e;
  border-top: 5px solid #cda45e;
  transition: 0.5s;
}
.about .about-img::after {
  position: absolute;
  right: 20px;
  bottom: 20px;
  width: 60px;
  height: 60px;
  z-index: 2;
  content: "";
  border-right: 5px solid #cda45e;
  border-bottom: 5px solid #cda45e;
  transition: 0.5s;
}
.about .about-img:hover {
  transform: scale(1.03);
}
.about .about-img:hover::before {
  left: 10px;
  top: 10px;
}
.about .about-img:hover::after {
  right: 10px;
  bottom: 10px;
}
.about .content h3 {
  font-weight: 600;
  font-size: 26px;
}
.about .content ul {
  list-style: none;
  padding: 0;
}
.about .content ul li {
  padding-bottom: 10px;
}
.about .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #cda45e;
}
.about .content p:last-child {
  margin-bottom: 0;
}
@media (min-width: 1024px) {
  .about {
    background-attachment: fixed;
  }
}


/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/

.why-us .box {
  padding: 50px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all ease-in-out 0.3s;
  background: #1a1814;
}
.why-us .box span {
  display: block;
  font-size: 28px;
  font-weight: 700;
  color: #cda45e;
}
.why-us .box h4 {
  font-size: 24px;
  font-weight: 600;
  padding: 0;
  margin: 20px 0;
  color: rgba(255, 255, 255, 0.8);
}
.why-us .box p {
  color: #aaaaaa;
  font-size: 15px;
  margin: 0;
  padding: 0;
}
.why-us .box:hover {
  background: #cda45e;
  padding: 30px 30px 70px 30px;
  box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
}
.why-us .box:hover span, .why-us .box:hover h4, .why-us .box:hover p {
  color: #fff;
}


/*--------------------------------------------------------------
# Menu Section
--------------------------------------------------------------*/

.menu #menu-flters {
  padding: 0;
  margin: 0 auto 0 auto;
  list-style: none;
  text-align: center;
  border-radius: 50px;
}
.menu #menu-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 12px 10px 12px;
  font-size: 16px;
  font-weight: 500;
  line-height: 1;
  color: #fff;
  margin-bottom: 10px;
  transition: all ease-in-out 0.3s;
  border-radius: 50px;
  font-family: "Playfair Display", serif;
}
.menu #menu-flters li:hover, .menu #menu-flters li.filter-active {
  color: #cda45e;
}
.menu #menu-flters li:last-child {
  margin-right: 0;
}
.menu .menu-item {
  margin-top: 50px;
}
.menu .menu-img {
  width: 70px;
  border-radius: 50%;
  float: left;
  border: 5px solid rgba(255, 255, 255, 0.2);
}
.menu .menu-content {
  margin-left: 85px;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  position: relative;
}
.menu .menu-content::after {
  content: "......................................................................" "...................................................................." "....................................................................";
  position: absolute;
  left: 20px;
  right: 0;
  top: -4px;
  z-index: 1;
  color: #bab3a6;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
.menu .menu-content a {
  padding-right: 10px;
  background: #1a1814;
  position: relative;
  z-index: 3;
  font-weight: 700;
  color: white;
  transition: 0.3s;
}
.menu .menu-content a:hover {
  color: #cda45e;
}
.menu .menu-content span {
  background: #1a1814;
  position: relative;
  z-index: 3;
  padding: 0 10px;
  font-weight: 600;
  color: #cda45e;
}
.menu .menu-ingredients {
  margin-left: 85px;
  font-style: italic;
  font-size: 14px;
  font-family: "Poppins", sans-serif;
  color: rgba(255, 255, 255, 0.5);
}

/*--------------------------------------------------------------
# Specials
--------------------------------------------------------------*/

.specials {
  overflow: hidden;
}
.specials .nav-tabs {
  border: 0;
}
.specials .nav-link {
  border: 0;
  padding: 12px 15px;
  transition: 0.3s;
  color: #fff;
  border-radius: 0;
  border-right: 2px solid #cda45e;
  font-weight: 600;
  font-size: 15px;
}
.specials .nav-link:hover {
  color: #cda45e;
}
.specials .nav-link.active {
  color: #1a1814;
  background: #cda45e;
  border-color: #cda45e;
}
.specials .nav-link:hover {
  border-color: #cda45e;
}
.specials .tab-pane.active {
  -webkit-animation: fadeIn 0.5s ease-out;
  animation: fadeIn 0.5s ease-out;
}
.specials .details h3 {
  font-size: 26px;
  font-weight: 600;
  margin-bottom: 20px;
  color: #fff;
}
.specials .details p {
  color: #aaaaaa;
}
.specials .details p:last-child {
  margin-bottom: 0;
}
@media (max-width: 992px) {
  .specials .nav-link {
    border: 0;
    padding: 15px;
  }
}


/*--------------------------------------------------------------
# Events
-------------------------------------------------------------*/

.events {
  background: url(../img/events-bg.jpg) center center no-repeat;
  background-size: cover;
  position: relative;
}
.events::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
.events .section-title h2 {
  color: #fff;
}
.events .container {
  position: relative;
}
@media (min-width: 1024px) {
  .events {
    background-attachment: fixed;
  }
}
.events .events-carousel {
  background: rgba(255, 255, 255, 0.08);
  padding: 30px;
}
.events .event-item {
  color: #fff;
}
.events .event-item h3 {
  font-weight: 600;
  font-size: 26px;
  color: #cda45e;
}
.events .event-item .price {
  font-size: 26px;
  font-family: "Open Sans", sans-serif;
  font-weight: 700;
  margin-bottom: 15px;
}
.events .event-item .price span {
  border-bottom: 2px solid #cda45e;
}
.events .event-item ul {
  list-style: none;
  padding: 0;
}
.events .event-item ul li {
  padding-bottom: 10px;
}
.events .event-item ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #cda45e;
}
.events .event-item p:last-child {
  margin-bottom: 0;
}
.events .swiper-pagination {
  margin-top: 30px;
  position: relative;
}
.events .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.4);
  opacity: 1;
}
.events .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #cda45e;
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}
#footer .footer-top {
  background: #0c0b09;
  border-top: 1px solid #37332a;
  border-bottom: 1px solid #28251f;
  padding: 60px 0 30px 0;
}
#footer .footer-top .footer-info {
  margin-bottom: 30px;
}
#footer .footer-top .footer-info h3 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 300;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}
#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Playfair Display", serif;
  color: #fff;
}
#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #28251f;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
#footer .footer-top .social-links a:hover {
  background: #cda45e;
  color: #fff;
  text-decoration: none;
}
#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}
#footer .footer-top .footer-links {
  margin-bottom: 30px;
}
#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #cda45e;
  font-size: 18px;
  line-height: 1;
}
#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}
#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}
#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}
#footer .footer-top .footer-links ul a:hover {
  color: #cda45e;
}
#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #28251f;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  border: 1px solid #454035;
}
#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
  background: #28251f;
  color: white;
}
#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: -1px;
  right: -1px;
  bottom: -1px;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px 2px 20px;
  background: #cda45e;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}
#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #d3af71;
}
#footer .copyright {
  text-align: center;
  padding-top: 30px;
}
#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}



      
  </style>


  <title>TWOT | Bienvenida</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="public/favicons/favicon.ico.ico" rel="icon">-->
  <!--<link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrapp/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxiconsp/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!--<link href="public/css/style.css" rel="stylesheet">-->


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="inicio">The World Of Tools</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">??Quienes somos?</a></li>
          <li><a class="nav-link scrollto" href="#events">M??s de Nosotros</a></li>
       
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      

       <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/inicio') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Entrar</a>
                    @else


                        <a href="{{ route('login') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Iniciar Sesion</a>

                        @if (Route::has('register'))


                            <a href="{{ route('register') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Registrar</a>

                          
                        @endif
                    @endauth
                </div>
            @endif

    <!-- <a href="{{ route('register') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Registrar</a>-->
     <!--<a href="{{ route('login') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Iniciar sesion</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenidos a </h1>
          <h1><span>The World Of Tools</span></h1>
          <h2>Buenas herramientas para buenas obras!</h2>

          <div class="btns">
            
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
               <img src="../img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>??Quienes somos?</h3>
            
            <h3 class="fst-italic">
              Un buen dise??o hace la vida mejor. 
</h3>
        
            <p class="fst-italic"><strong>
              Somos expertos en dise??o web y entrenados en desarrollo web para la industria digital. 
              Ofrecemos un servicio personalizado, profesional y confiable, estamos conformado 
              por un equipo fresco, vibrante y energ??tico con talento creativo y est??ndares de calidad muy alto
              podemos ajustarnos a tus necesidades sin problemas.
              
            </p></strong>

            <p class="fst-italic"><strong>
               
              Para la realizaci??n de este proyecto nos hemos apoyado en herramientas PHP, JAVASCRIPT, CSS, 
              BOOSTRAP, HTML, MSQL, ETC para el desarrollo e integraci??n del sitio web.
            </p></strong>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informaci??n</h2>
          <p>Conoce m??s de nosotros</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Misi??n </h3>
                
                  <p>
                    The World Of Tools, es una empresa que desea satisfacer la necesidad que
                    usted requiere, para ello contamos con un equipo capacitado e id??neo en el ??rea; 
                    los cuales son el eje principal de nuestro trabajo.
                    Es as??, que The World Of Tools le ofrece el mejor servicio para que usted
                    tenga la mayor confianza,comodidad  y tranquilidad en el desarrollo de
                    sus proyectos. 
                  </p>

                  <h3>Visi??n</h3>
                
                  <p>
                    Posesionarnos como una empresa L??der en el desarrollo web,
                    donde todos nuestros servicios sean de requerimiento diario
                    y mantener una imagen institucional de calidad.
                  </p>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Objetivo General</h3>
                  <p>
                    Nuestra prioridad es mantener la confiabilidad y la satisfacci??n de nuestros clientes, 
                    en el cual estos puedan encontrar los materiales y herramientas necesarios para su bienestar
                    y con esto seamos reconocidos por nuestros productos y servicio de calidad.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Objetivos Espec??ficos</h3>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>Permanecer en una mejora continua para as?? mantener nuestro producto de alta calidad y desempe??o.</li>
                    <li><i class="bi bi-check-circled"></i>Comprometi??ndonos a estar a la vanguardia con nuestro producto a las nuevas tendencias.  </li>
                    <li><i class="bi bi-check-circled"></i>Ser los mejores en la competencia en desarrollo de tecnolog??a web y plataformas virtuales.</li>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>The World Of Tools</h3>
              <p>
                A110 Twot<br>
                Francisco Morazan, Honduras<br><br>
                <strong>Celular:</strong> +504 3378-4545<br>
                <strong>Email:</strong> TWOT@THEWORD.HN<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>The World Of Tools</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">TWOT</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 <script src="public/vendor/aos/aos.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <!--<script src="public/js/main.js"></script>-->


  <script>
      /**
* Template Name: Restaurantly - v3.7.0
* Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  let selectTopbar = select('#topbar')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
      } else {
        selectHeader.classList.remove('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Menu isotope and filter
   */
  window.addEventListener('load', () => {
    let menuContainer = select('.menu-container');
    if (menuContainer) {
      let menuIsotope = new Isotope(menuContainer, {
        itemSelector: '.menu-item',
        layoutMode: 'fitRows'
      });

      let menuFilters = select('#menu-flters li', true);

      on('click', '#menu-flters li', function(e) {
        e.preventDefault();
        menuFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        menuIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        menuIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Events slider
   */
  new Swiper('.events-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()
  </script>



</body>

</html>