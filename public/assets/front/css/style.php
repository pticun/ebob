<?php
header("Content-Type:text/css");
$color = "#f0f"; // Change your Color Here

function checkhexcolor($color)
{
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if (isset($_GET['color']) AND $_GET['color'] != '') {
    $color = "#" . $_GET['color'];
}

if (!$color OR !checkhexcolor($color)) {
    $color = "#336699";
}

?>


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i');


*/
/*-----------------
@Typography
-----------------*/
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900");
/*---------------------------
** Global Scss
---------------------------*/
.bg-green {
background-color: #17b212 !important; }


.section-subtitle {
font-size: 18px;
line-height: 28px;
text-transform: uppercase;
color: <?php echo $color ?>;
font-weight: 700; }

.navbar-expand-lg .navbar-nav .nav-link {
padding-right: .4rem;
padding-left: 0.4rem; }

.back-to-top {
position: fixed;
right: 30px;
bottom: 30px;
width: 50px;
height: 50px;
background-color: <?php echo $color ?>;
color: #fff;
text-align: center;
line-height: 55px;
border-radius: 50%;
z-index: 99;
font-size: 20px;
cursor: pointer; }
.back-to-top i {
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg); }

.br-10 {
border-radius: 10px; }

.boxed-btn {
display: inline-block;
text-align: center;
height: 50px;
line-height: 50px;
font-size: 16px;
font-weight: 700;
color: #fff;
width: 160px;
text-transform: uppercase;
background-color: #040a2c;
padding: 0 20px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.boxed-btn:hover {
color: #fff;
background-color: <?php echo $color ?>; }
.boxed-btn.btn-rounded {
border-radius: 30px; }
.boxed-btn.blank {
background-color: transparent;
border: 2px solid #040a2c;
color: #040a2c; }
.boxed-btn.blank:hover {
background-color: <?php echo $color ?>;
color: #fff; }

.mwd-700 {
max-width: 700px; }

.color {
color: <?php echo $color ?>; }

.section-title {
margin-bottom: 65px; }
.section-title.white .title {
color: #fff; }
.section-title.white .title strong {
color: #fff; }
.section-title.white .separator {
background-color: #fff; }
.section-title.white .separator:after {
background-color: #fff; }
.section-title.white .separator:before {
background-color: #fff; }
.section-title.white .description {
color: #777777; }
.section-title .title {
font-size: 40px;
line-height: 50px;
margin-bottom: 27px;
color: #040a2c;
font-weight: 300;
text-transform: uppercase;
margin-top: 0; }
.section-title .title strong {
font-weight: 700; }
.section-title .separator {
display: inline-block;
background-color: #040a2c;
width: 50px;
height: 50px;
line-height: 50px;
position: relative;
-ms-transform: rotate(45deg);
/* IE 9 */
-webkit-transform: rotate(45deg);
/* Chrome, Safari, Opera */
transform: rotate(45deg);
margin-bottom: 30px; }
.section-title .separator img {
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg); }
.section-title .separator:after {
position: absolute;
left: -60px;
top: 80px;
width: 60px;
height: 2px;
background-color: #040a2c;
content: '';
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg); }
.section-title .separator:before {
position: absolute;
right: -60px;
top: -30px;
width: 60px;
height: 2px;
background-color: #040a2c;
content: '';
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg); }
.section-title .description {
color: #777777;
line-height: 26px;
font-size: 16px;
margin: 0 auto;
max-width: 600px; }

.c-white {
color: #fff; }

.c-red {
color: <?php echo $color ?>; }

.bg-red {
background-color: <?php echo $color ?>; }

.c-green {
color: #00cf92; }

.submit-btn {
width: 250px;
height: 60px;
text-align: center;
font-weight: 700;
font-size: 14px;
line-height: 40px;
color: #fff;
text-transform: uppercase;
background-color: <?php echo $color ?>;
border: none;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
cursor: pointer; }
.submit-btn:hover {
background-color: #040a2c; }
.submit-btn.btn-rounded {
border-radius: 30px; }
.submit-btn.btn-center {
display: block;
margin: 0 auto;
margin-top: 25px; }
.submit-btn:focus {
outline: none; }

.section-title-inner {
text-align: center;
margin-bottom: 45px; }
.section-title-inner .subtitle {
font-size: 18px;
line-height: 28px;
text-transform: uppercase;
font-weight: 700;
color: <?php echo $color ?>;
margin-bottom: 20px;
display: block; }
.section-title-inner .title {
font-size: 48px;
font-weight: 700;
line-height: 58px; }

.form-element.margin-bottom-30 {
margin-bottom: 27px; }

.form-element label {
color: #11294d;
font-size: 14px;
font-weight: 700;
line-height: 32px; }
.form-element label span {
color: #BE1F27; }

.form-element select {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none; }

.has-icon {
position: relative;
display: block; }
.has-icon.textarea .the-icon {
top: 25px; }
.has-icon .input-field {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none; }
.has-icon .the-icon {
font-size: 14px;
position: absolute;
right: 30px;
top: 50%;
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
color: #7c7c90; }

.input-field {
width: 100%;
height: 50px;
padding: 0 30px;
border-radius: 5px;
color: #7c7c90; }
.input-field::-webkit-input-placeholder {
/* WebKit browsers */
color: #7c7c90; }
.input-field:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: #7c7c90; }
.input-field::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: #7c7c90; }
.input-field:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: #7c7c90; }
.input-field.borderd {
border: 2px solid rgba(0, 0, 0, 0.1); }
.input-field.borderd:focus {
border: 2px solid rgba(0, 0, 0, 0.1); }
.input-field.textarea {
min-height: 120px;
padding: 20px 30px;
resize: none; }
.input-field.error {
border: 2px solid #ff3133 !important; }
.input-field.error::-webkit-input-placeholder {
/* WebKit browsers */
color: #ff3133; }
.input-field.error:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: #ff3133; }
.input-field.error::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: #ff3133; }
.input-field.error:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: #ff3133; }
.input-field.error:focus {
border-color: #ff3133; }

.video-play-btn {
display: inline-block;
width: 70px;
height: 70px;
line-height: 70px;
text-align: center;
font-size: 16px;
background-color: <?php echo $color ?>;
border-radius: 50%;
color: #fff;
position: relative;
z-index: 1; }
.video-play-btn:before {
content: "";
position: absolute;
z-index: 0;
left: 50%;
top: 50%;
-ms-transform: translateX(-50%) translateY(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%) translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%) translateY(-50%);
display: block;
width: 80px;
height: 80px;
background: rgba(228, 150, 0, 0.7);
border-radius: 50%;
-webkit-animation: pulse-border 1500ms ease-out infinite;
animation: pulse-border 1500ms ease-out infinite;
visibility: visible;
opacity: 1;
z-index: -1; }
.video-play-btn:hover {
color: #fff; }
.video-play-btn:hover:before {
visibility: visible;
opacity: 1; }

.email-success {
display: block;
width: 100%; }

.checkbox-element {
display: inline-block; }

.checkbox-wrapper {
display: inline-block; }

.margin-bottom-35 {
margin-bottom: 35px; }

.disable-desktop {
display: none; }

.dblock {
clear: both;
display: block; }

.checkbox-inner {
display: block;
position: relative;
padding-left: 30px;
margin-bottom: 12px;
cursor: pointer;
font-size: 14px;
line-height: 24px;
color: #585869;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none; }
.checkbox-inner input {
position: absolute;
opacity: 0;
cursor: pointer; }
.checkbox-inner .checkmark {
position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: transparent;
border: 2px solid rgba(0, 0, 0, 0.1); }
.checkbox-inner input:checked ~ .checkmark {
background-color: <?php echo $color ?>; }
.checkbox-inner .checkmark:after {
content: "";
position: absolute;
display: none; }
.checkbox-inner input:checked ~ .checkmark:after {
display: block; }
.checkbox-inner .checkmark:after {
left: 5px;
top: 2px;
width: 5px;
height: 10px;
border: solid #fff;
border-width: 0 3px 3px 0;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg); }

.table-responsive {
display: table; }

@-webkit-keyframes pulse-border {
0% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1; }
100% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0; } }

@-moz-keyframes pulse-border {
0% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1; }
100% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0; } }

@-o-keyframes pulse-border {
0% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1; }
100% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0; } }

@keyframes pulse-border {
0% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1; }
100% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0; } }

/*---------------------
Breadcumb Area
----------------------*/
.breadcrumb-area {
padding: 125px 0 125px 0;
position: relative;
z-index: 0; }
.breadcrumb-area.breadcrumb-bg {
background-image: url(../../images/logo/breadcrumb.jpg);
background-size: cover;
background-position: center; }
.breadcrumb-area:after {
position: absolute;
content: '';
left: 0;
top: 0;
width: 100%;
height: 100%;
z-index: -1;
background-color: rgba(4, 10, 44, 0.7); }
.breadcrumb-area .title {
color: #fff;
font-size: 40px;
line-height: 50px;
font-weight: 700;
color: #fff;
text-transform: uppercase;
margin-top: 0;
margin-bottom: 7px; }
.breadcrumb-area .subtitle {
font-size: 30px;
font-weight: 300;
line-height: 40px;
color: #fff;
text-transform: uppercase; }
.breadcrumb-area p {
font-size: 16px;
color: #fff;
line-height: 30px; }
.breadcrumb-area .nav-text {
color: <?php echo $color ?>;
font-size: 16px; }
.breadcrumb-area .nav-text a {
color: <?php echo $color ?>;
font-size: 16px; }
.breadcrumb-area .nav-text .current-page {
color: <?php echo $color ?>;
font-size: 16px;
text-transform: capitalize; }
.breadcrumb-area .separator {
display: inline-block;
width: 100px;
height: 2px;
background-color: <?php echo $color ?>;
margin-bottom: 18px;
margin-top: 13px; }

/*-------------------------
Preloader Css
---------------------------*/
.preloader-inner {
background-color: #fff;
position: fixed;
left: 0;
top: 0;
width: 100%;
height: 100%;
z-index: 9999;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center; }

.dot {
background: <?php echo $color ?>; }

.dot,
.dot:after {
display: inline-block;
width: 2em;
height: 2em;
border-radius: 50%;
-webkit-animation: a 1.5s calc(((var(--i) + var(--o, 0))/var(--n) - 1)*1.5s) infinite;
animation: a 1.5s calc(((var(--i) + var(--o, 0))/var(--n) - 1)*1.5s) infinite; }

.dot:after {
--o: 1;
background: #fff;
content: ""; }

@-webkit-keyframes a {
0%,
50% {
-webkit-transform: scale(0);
transform: scale(0); } }

@keyframes a {
0%,
50% {
-webkit-transform: scale(0);
transform: scale(0); } }

/*====================
** Normalize
====================*/
html {
font-family: font-family: 'Raleway', sans-serif;
-webkit-text-size-adjust: 100%;
-ms-text-size-adjust: 100%;
overflow-x: hidden; }

body {
font-family: font-family: 'Raleway', sans-serif;
font-size: 16px;
margin: 0;
color: #11294d;
overflow-x: hidden; }

h1 {
font-size: 60px;
line-height: 1.0833333333333333; }

h2 {
font-size: 52px;
line-height: 1.4444444444444444; }

h3 {
font-size: 26px;
line-height: 1.0833333333333333; }

h4 {
font-size: 22px;
line-height: 1.2380952380952381; }

h1,
h2,
h3,
h4,
h5,
h6 {
color: #11294d;
font-weight: 400;
font-family: font-family: 'Raleway', sans-serif; }

p {
font-size: 16px;
color: #11294d;
line-height: 1.625;
-webkit-hyphens: auto;
-moz-hyphens: auto;
-ms-hyphens: auto;
hyphens: auto; }

a {
color: #11294d;
text-decoration: none; }

a,
a:hover,
a:focus,
a:active {
text-decoration: none;
outline: none; }

a i {
padding: 0 2px; }

img {
max-width: 100%; }

/*input and button type focus outline disable*/
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
textarea:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
select:focus {
outline: none;
-webkit-box-shadow: none;
box-shadow: none;
border: 1px solid #ddd; }

/**
* 5.0 - Alignments
*/
.alignleft {
float: left; }

.alignright {
float: right; }

.aligncenter {
clear: both;
display: block;
margin: 0 auto 1.75em; }

ul {
margin: 0;
padding: 0;
list-style: none; }

/*------------------------------
Navbar Area
------------------------------*/
.dropdown:hover > .dropdown-menu {
display: block; }

.navbar-area {
-webkit-transition: 0.5s ease-in;
-moz-transition: 0.5s ease-in;
-o-transition: 0.5s ease-in;
transition: 0.5s ease-in;
background-color: #040a2c;
padding: 0;
margin: 0;
border: none;
border-radius: 0; }
.navbar-area.nav-fixed {
position: fixed;
left: 0;
top: 0px;
width: 100%;
z-index: 9999;
-webkit-transition: 0.5s ease-in;
-moz-transition: 0.5s ease-in;
-o-transition: 0.5s ease-in;
transition: 0.5s ease-in;
background-color: #040a2c; }
.navbar-area.nav-fixed .nav-container {
margin-top: 0; }
.navbar-area .navbar-collapse {
-webkit-transition: 0.5s ease-in;
-moz-transition: 0.5s ease-in;
-o-transition: 0.5s ease-in;
transition: 0.5s ease-in; }
.navbar-area .navbar-collapse .navbar-nav {
float: none;
margin: 0 auto;
display: table;
table-layout: fixed; }
.navbar-area .navbar-collapse .navbar-nav .nav-item {
display: inline-block;
font-size: 14px;
line-height: 45px;
text-transform: uppercase;
font-weight: 700;
padding: 20px 16px;
position: relative; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown .dropdown-menu {
background-color: #040A2C;
margin: 0;
padding: 0; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown .dropdown-menu li a {
color: <?php echo $color ?>;
font-size: 14px;
text-transform: uppercase;
font-weight: 700;
padding: 15px 15px; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown .dropdown-menu li a:hover {
background-color: <?php echo $color ?>;
color: #fff; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown.open a {
background-color: transparent;
color: <?php echo $color ?>; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown.open a:after {
visibility: visible;
width: 100%; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.active.dropdown .dropdown-menu li a:after {
display: none; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.active .nav-link {
background-color: transparent;
color: <?php echo $color ?>; }
.navbar-area .navbar-collapse .navbar-nav .nav-item.active .nav-link:after {
visibility: visible;
opacity: 1;
width: 100%; }
.navbar-area .navbar-collapse .navbar-nav .nav-item:hover .nav-link {
color: <?php echo $color ?>; }
.navbar-area .navbar-collapse .navbar-nav .nav-item:hover .nav-link:after {
visibility: visible;
width: 100%; }
.navbar-area .navbar-collapse .navbar-nav .nav-item:last-child {
padding-right: 0; }
.navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
position: relative; }
.navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link:after {
position: absolute;
left: 0;
bottom: -20px;
width: 0%;
background-color: <?php echo $color ?>;
content: '';
height: 4px;
visibility: hidden;
-webkit-transition: 0.8s ease-in;
-moz-transition: 0.8s ease-in;
-o-transition: 0.8s ease-in;
transition: 0.8s ease-in; }

/*------------------------------
Header Area
------------------------------*/
.header-bottom-wrapper {
margin-top: -190px;
margin-bottom: 110px; }
.header-bottom-wrapper .single-about-box {
-webkit-box-shadow: 0px 8px 16px 0px rgba(189, 189, 189, 0.5);
box-shadow: 0px 8px 16px 0px rgba(189, 189, 189, 0.5); }

.header-bottom-marquee {
background-color: #040a2c;
overflow: hidden;
position: relative;
height: 120px;
margin-bottom: 0; }
.header-bottom-marquee .header-marque-inner {
position: absolute;
-webkit-animation: marquee 20s linear infinite;
animation: marquee 20s linear infinite; }
.header-bottom-marquee ul {
font-size: 0; }
.header-bottom-marquee ul li {
display: inline-block;
padding: 37px 55px;
background-color: #040a2c; }
.header-bottom-marquee ul li:nth-child(even) {
background-color: #010626; }
.header-bottom-marquee ul li .marquee-wrapper {
position: relative; }
.header-bottom-marquee ul li .marquee-wrapper .icon {
position: absolute;
left: 0;
top: -10px;
color: #fff;
font-size: 35px; }
.header-bottom-marquee ul li .marquee-wrapper .title {
font-size: 20px;
font-weight: 700;
color: #fff;
padding-left: 55px;
text-transform: uppercase; }

.header-area .header-inner .owl-dots {
position: absolute;
text-align: center;
left: 50%;
bottom: 40px;
-ms-transform: translateX(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%); }

.header-area .header-inner .owl-dots div {
height: 5px;
width: 10px;
display: inline-block;
background-color: #fff;
margin: 0 5px; }
.header-area .header-inner .owl-dots div.active {
background-color: <?php echo $color ?>; }

.header-area .header-inner .single-slider-item {
padding: 192px 0 240px 0;
z-index: 0;
position: relative; }
.header-area .header-inner .single-slider-item.home-3 {
text-align: center; }

.header-area .header-inner .single-slider-item:after {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
background-color: rgba(4, 10, 44, 0.7);
content: '';
z-index: -1; }
.header-area .header-inner .single-slider-item .title {
font-size: 60px;
font-weight: 300;
line-height: 70px;
color: #fff;
margin-bottom: 20px;
text-transform: uppercase; }
.header-area .header-inner .single-slider-item .title storng {
font-weight: 700; }
.header-area .header-inner .single-slider-item p {
color: #fff;
font-size: 16px;
line-height: 30px; }
.header-area .header-inner .single-slider-item .header-list li {
color: #fff;
display: inline-block;
font-size: 20px;
line-height: 32px;
font-weight: 400;
margin: 0 20px; }
.header-area .header-inner .single-slider-item .header-list li:first-child {
margin-left: 0; }
.header-area .header-inner .single-slider-item .header-list li i {
color: <?php echo $color ?>;
font-size: 14px; }
.header-area .header-inner .single-slider-item .btn-wrapper {
margin-top: 35px; }
.header-area .header-inner .single-slider-item .btn-wrapper .boxed-btn {
width: 150px;
height: 50px;
border-radius: 0px;
line-height: 50px;
margin-top: 36px;
margin-bottom: 18px;
font-weight: 700;
margin: 0 10px; }
.header-area .header-inner .single-slider-item .btn-wrapper .boxed-btn:first-child {
margin-left: 0;
background-color: #fff;
color: #040a2c; }
.header-area .header-inner .single-slider-item .btn-wrapper .boxed-btn:first-child:hover {
background-color: <?php echo $color ?>;
color: #fff; }
.header-area .header-inner .single-slider-item .btn-wrapper .boxed-btn:last-child {
background-color: <?php echo $color ?>; }
.header-area .header-inner .single-slider-item .btn-wrapper .boxed-btn:last-child:hover {
background-color: #fff;
color: #040a2c; }

.header-bottom-area {
background-color: #f6fafd; }
.header-bottom-area .header-bottom-area-inner {
margin-top: -75px;
-webkit-box-shadow: 0 0 20px 0 rgba(11, 33, 67, 0.4);
box-shadow: 0 0 20px 0 rgba(11, 33, 67, 0.4);
border-radius: 20px;
background-color: #fff; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner {
padding: 70px 90px 70px 90px; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .form-wrapper {
padding: 30px;
background-color: <?php echo $color ?>;
position: relative;
border-radius: 5px;
margin-bottom: 40px; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .form-wrapper .form-element .input-field {
border: none;
color: #2a372e;
max-width: 680px; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .form-wrapper .submit-btn {
background-color: #040a2c;
height: 62px;
width: 160px;
border-radius: 5px;
font-size: 16px;
text-transform: uppercase;
font-weight: 400;
position: absolute;
right: 30px;
top: 29px; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .form-wrapper .submit-btn i {
padding-right: 10px; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .price-list {
text-align: center; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .price-list li {
display: inline-block;
color: <?php echo $color ?>;
font-weight: 14px;
font-weight: 700;
padding: 0 25px;
border-right: 2px solid <?php echo $color ?>; }
.header-bottom-area .header-bottom-area-inner .domain-search-form-wrapper-outer .domain-search-form-wrapper-inner .price-list li:last-child {
border-right: none; }

@-webkit-keyframes marquee {
0% {
left: 0; }
100% {
left: -100%; } }

@-moz-keyframes marquee {
0% {
left: 0; }
100% {
left: -100%; } }

@-o-keyframes marquee {
0% {
left: 0; }
100% {
left: -100%; } }

@keyframes marquee {
0% {
left: 0; }
100% {
left: -100%; } }

/*----------------------
Top bar
-----------------------*/
.topbar-bar {
background-color: #040a2c; }
.topbar-bar .topbar-inner {
padding: 15px 0; }
.topbar-bar .topbar-inner .topbar-left-content {
display: inline-block; }
.topbar-bar .topbar-inner .topbar-left-content ul {
display: inline-block;
padding-left: 15px; }
.topbar-bar .topbar-inner .topbar-left-content ul li {
display: inline-block;
margin: 0 5px;
color: #fefeff; }
.topbar-bar .topbar-inner .topbar-left-content ul li:first-child {
margin-left: 0; }
.topbar-bar .topbar-inner .topbar-left-content ul li a {
color: #fefeff;
font-size: 16px;
line-height: 100%;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.topbar-bar .topbar-inner .topbar-left-content ul li a:hover {
color: <?php echo $color ?>; }
.topbar-bar .topbar-inner .topbar-right-content {
display: inline-block;
float: right; }
.topbar-bar .topbar-inner .topbar-right-content .ex-text {
color: #fff;
font-size: 16px; }

/*--------------------
Support Bar
--------------------*/
.support-bar-area {
padding-top: 20px;
padding-bottom: 25px;
background-color: #eaf1fa;
-webkit-box-shadow: 0px 0px 4px 0px rgba(11, 33, 67, 0.09);
box-shadow: 0px 0px 4px 0px rgba(11, 33, 67, 0.09); }
.support-bar-area .logo {
margin-top: 10px;
display: block; }
.support-bar-area .support-bar-content {
text-align: right; }
.support-bar-area .support-bar-content ul li {
display: inline-block;
margin: 0 20px;
max-width: 250px; }
.support-bar-area .support-bar-content ul li:last-child {
margin-right: 0; }
.support-bar-area .support-bar-content .single-support-item {
text-align: left;
position: relative; }
.support-bar-area .support-bar-content .single-support-item:hover .icon {
border-color: #040a2c;
background-color: transparent;
color: #040a2c; }
.support-bar-area .support-bar-content .single-support-item .icon {
position: absolute;
left: 0;
top: -5px;
color: #fff;
background-color: #040a2c;
height: 50px;
width: 50px;
font-size: 20px;
line-height: 50px;
text-align: center;
border-radius: 50%;
border: 2px solid transparent;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.support-bar-area .support-bar-content .single-support-item .content {
padding-left: 60px; }
.support-bar-area .support-bar-content .single-support-item .content h5 {
font-size: 16px;
line-height: 20px;
color: #11294d;
font-weight: 700;
margin-bottom: 5px; }
.support-bar-area .support-bar-content .single-support-item .content .opn-hr,
.support-bar-area .support-bar-content .single-support-item .content .email,
.support-bar-area .support-bar-content .single-support-item .content .loaction {
display: block;
color: #777777;
font-size: 12px; }
.support-bar-area .support-bar-content .single-support-item .content .email-info {
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.support-bar-area .support-bar-content .single-support-item .content .email-info:hover {
color: <?php echo $color ?>; }

/*--------------------
about us section
---------------------*/
.about-us-aera {
padding: 110px 0 120px 0; }
.about-us-aera.home-2 {
padding-bottom: 140px; }
.about-us-aera.home-2 .left-content-area,
.about-us-aera.home-2 .right-content-area {
margin-bottom: 0; }
.about-us-aera.about-page {
padding-top: 120px; }
.about-us-aera .left-content-area {
margin-bottom: 100px; }
.about-us-aera .left-content-area .thumb {
position: relative;
z-index: 0; }
.about-us-aera .left-content-area .thumb:after {
position: absolute;
left: -20px;
top: 20px;
width: 100%;
height: 100%;
background-color: #e5e6e9;
content: '';
z-index: -1; }
.about-us-aera .left-content-area .thumb .hover {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center; }
.about-us-aera .right-content-area {
margin-bottom: 100px; }
.about-us-aera .right-content-area .title {
color: #040a2c;
font-size: 30px;
text-transform: uppercase;
font-weight: 700;
margin-bottom: 17px; }
.about-us-aera .right-content-area p {
font-size: 16px;
font-weight: 400;
line-height: 30px;
color: #777777; }
.about-us-aera .right-content-area .list-items {
margin-top: 15px; }
.about-us-aera .right-content-area .list-items li {
display: block;
font-size: 16px;
color: #040a2c;
line-height: 30px; }
.about-us-aera .right-content-area .list-items li i {
color: #777777; }
.about-us-aera .right-content-area .btn-wrapper {
margin-top: 23px; }
.about-us-aera .single-about-box {
position: relative;
z-index: 0;
padding: 65px 30px 25px 30px;
overflow: hidden;
height: 265px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.about-us-aera .single-about-box:hover {
padding-top: 60px; }
.about-us-aera .single-about-box:hover .content .title {
color: #fff; }
.about-us-aera .single-about-box:hover .content .btn-wrapper {
margin-top: 0; }
.about-us-aera .single-about-box:hover .content .btn-wrapper .readmore {
color: #fff; }
.about-us-aera .single-about-box:hover .content .descr {
color: #a0a0a0; }
.about-us-aera .single-about-box:hover:after {
background-color: rgba(49, 54, 81, 0.9); }
.about-us-aera .single-about-box .icon {
font-size: 50px;
line-height: 50px;
color: <?php echo $color ?>;
margin-bottom: 18px; }
.about-us-aera .single-about-box .content .title {
font-size: 26px;
font-weight: 700;
color: #040a2c;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.about-us-aera .single-about-box .content .descr {
color: #777777;
font-size: 16px;
line-height: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.about-us-aera .single-about-box .content .btn-wrapper {
margin-top: 50px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.about-us-aera .single-about-box .content .btn-wrapper .readmore {
font-size: 16px;
font-weight: 700;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.about-us-aera .single-about-box .content .btn-wrapper .readmore i {
color: <?php echo $color ?>; }
.about-us-aera .single-about-box .content .btn-wrapper .readmore:hover {
color: <?php echo $color ?>; }
.about-us-aera .single-about-box:after {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
background-color: #f2f2f2;
content: '';
z-index: -1; }
.about-us-aera .single-about-box.about-box-bg-1 { }

/*----------------------
our practise
-----------------------*/
.practise-area {
background-color: #040a2c;
padding: 110px 0 120px 0; }
.practise-area.features-page {
background-color: transparent;
padding-top: 120px; }
.practise-area.features-page .single-practise-box:hover .content {
border-color: <?php echo $color ?>; }
.practise-area.features-page .single-practise-box .content {
border: 2px solid #040a2c; }
.practise-area.features-page .single-practise-box .content .title {
color: #040a2c; }
.practise-area.features-page .single-practise-box .content p {
color: #777777; }
.practise-area .single-practise-box {
position: relative;
margin-top: 50px; }
.practise-area .single-practise-box:hover .icon {
background-color: <?php echo $color ?>;
color: #fff; }
.practise-area .single-practise-box:hover .content .title {
color: <?php echo $color ?>; }
.practise-area .single-practise-box .icon {
position: absolute;
left: 30px;
top: -50px;
width: 100px;
height: 100px;
text-align: center;
line-height: 100px;
border: 2px solid #fff;
font-size: 40px;
color: <?php echo $color ?>;
background-color: #040a2c;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.practise-area .single-practise-box .content {
padding: 72px 30px 17px 30px;
border: 2px solid #fff; }
.practise-area .single-practise-box .content .title {
font-size: 26px;
font-weight: 700;
line-height: 36px;
margin-top: 0;
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.practise-area .single-practise-box .content p {
font-size: 14px;
color: #bfbfbf;
line-height: 30px; }

/*----------------------
attorney area
-----------------------*/
.our-attorney-area {
padding: 0px 0 50px 0
}
.our-attorney-area .single-attorney-box .thumb {
display: inline-block;
position: relative;
overflow: hidden; }
.our-attorney-area .single-attorney-box .thumb:hover .hover {
visibility: visible;
opacity: 1; }
.our-attorney-area .single-attorney-box .thumb:hover .hover .hover-inner .social-icon {
-ms-transform: rotate(45deg);
/* IE 9 */
-webkit-transform: rotate(45deg);
/* Chrome, Safari, Opera */
transform: rotate(45deg); }
.our-attorney-area .single-attorney-box .thumb:after {
position: absolute;
content: '';
right: -108px;
bottom: 0;
width: 50%;
height: 50%;
background-color: #fff;
-ms-transform: skewX(-45deg);
/* IE 9 */
-webkit-transform: skewX(-45deg);
/* Chrome, Safari, Opera */
transform: skewX(-45deg); }
.our-attorney-area .single-attorney-box .thumb:before {
position: absolute;
content: '';
left: -108px;
bottom: 0;
width: 50%;
height: 50%;
background-color: #fff;
-ms-transform: skewX(45deg);
/* IE 9 */
-webkit-transform: skewX(45deg);
/* Chrome, Safari, Opera */
transform: skewX(45deg);
z-index: 1; }
.our-attorney-area .single-attorney-box .thumb .hover {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
background-image: -moz-linear-gradient(90deg, #040a2c 0%, rgba(4, 10, 44, 0) 100%);
background-image: -webkit-linear-gradient(90deg, #040a2c 0%, rgba(4, 10, 44, 0) 100%);
background-image: -ms-linear-gradient(90deg, #040a2c 0%, rgba(4, 10, 44, 0) 100%);
visibility: hidden;
opacity: 0;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner {
text-align: center;
position: absolute;
bottom: 90px;
width: 100%;
left: 50%;
-ms-transform: translateX(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%); }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .name {
font-size: 20px;
line-height: 30px;
font-weight: 400;
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .post {
font-size: 12px;
font-weight: 700;
text-transform: uppercase;
color: <?php echo $color ?>;
display: block;
margin-bottom: 35px; }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .social-icon {
display: inline-block;
width: 50px;
height: 50px;
border: 1px solid #fff;
color: #fff;
text-align: center;
font-size: 16px;
line-height: 50px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
margin: 0 20px; }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .social-icon:hover {
background-color: <?php echo $color ?>;
border-color: <?php echo $color ?>; }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .social-icon i {
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg); }
.our-attorney-area .single-attorney-box .thumb .hover .hover-inner .social-icon.two {
position: absolute;
left: 50%;
top: 150px;
margin-left: -1px;
-ms-transform: translateX(-50%) rotate(45deg);
/* IE 9 */
-webkit-transform: translateX(-50%) rotate(45deg);
/* Chrome, Safari, Opera */
transform: translateX(-50%) rotate(45deg); }

/*------------------------------
Counter and subscriber area
-------------------------------*/
.counter-and-subscribe-area {
background-color: #040a2c;
padding-bottom: 120px; }
.counter-and-subscribe-area .subscribe-outer-wrapper {
margin-top: 104px;
text-align: center; }
.counter-and-subscribe-area .subscribe-outer-wrapper .title {
font-size: 50px;
font-weight: 300;
color: #fff;
text-transform: uppercase; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper {
position: relative;
margin-top: 42px; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .form-element .input-field {
border: 2px solid #fff;
background-color: transparent;
border-radius: 0;
height: 60px; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .form-element .input-field::-webkit-input-placeholder {
/* WebKit browsers */
color: "#bcbcbc"; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .form-element .input-field:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: "#bcbcbc"; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .form-element .input-field::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: "#bcbcbc"; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .form-element .input-field:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: "#bcbcbc"; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .submit-btn {
position: absolute;
right: 5px;
top: 5px;
height: 50px;
width: 160px; }
.counter-and-subscribe-area .subscribe-outer-wrapper .subscribe-form-wrapper .submit-btn:hover {
background-color: rgba(228, 150, 0, 0.8); }
.counter-and-subscribe-area .single-counter-box {
margin-top: -140px;
position: relative;
border: 10px solid #fff;
background-color: #040A2C;
text-align: center;
z-index: 0;
padding: 78px 0 70px 0;
overflow: hidden; }
.counter-and-subscribe-area .single-counter-box .bg-icon {
position: absolute;
left: -100px;
bottom: 30px;
font-size: 300px;
line-height: 200px;
z-index: -1;
color: #1e2342; }
.counter-and-subscribe-area .single-counter-box .bg-icon.two {
left: 0;
right: -180px; }
.counter-and-subscribe-area .single-counter-box .bg-icon.three {
left: -40px;
bottom: -100px; }
.counter-and-subscribe-area .single-counter-box .counter-number .count-numb {
font-size: 100px;
line-height: 100px;
font-weight: 300;
color: #fff;
margin-left: -30px; }
.counter-and-subscribe-area .single-counter-box .counter-number .top {
position: absolute;
color: #fff;
font-size: 60px;
font-weight: 300;
line-height: 60px; }
.counter-and-subscribe-area .single-counter-box .name {
font-weight: 700;
font-size: 40px;
line-height: 50px;
text-transform: uppercase;
color: <?php echo $color ?>;
margin-top: 18px; }

/*------------------------
News Feeds
-------------------------*/
.col-clear {
clear: both;
display: block; }

.news-feed-area {
padding: 110px 0  105px 0; }
.news-feed-area .single-new-feed-item #thumb-carousel .owl-dots,
.news-feed-area .single-new-feed-item .thumb-carousel .owl-dots {
position: absolute;
right: 20px;
top: 20px; }
.news-feed-area .single-new-feed-item #thumb-carousel .owl-dots .owl-dot,
.news-feed-area .single-new-feed-item .thumb-carousel .owl-dots .owl-dot {
display: inline-block;
width: 10px;
height: 10px;
background-color: #e5e5e5;
margin: 0 3px;
border-radius: 50%; }
.news-feed-area .single-new-feed-item #thumb-carousel .owl-dots .owl-dot.active,
.news-feed-area .single-new-feed-item .thumb-carousel .owl-dots .owl-dot.active {
background-color: #fff; }
.news-feed-area .single-new-feed-item .thumb {
position: relative;
display: inline-block; }
.news-feed-area .single-new-feed-item .thumb img {
max-height: 190px;
width: 100%; }
.news-feed-area .single-new-feed-item .thumb .icon {
position: absolute;
right: 0;
top: 0;
width: 50px;
height: 50px;
text-align: center;
line-height: 50px;
font-size: 16px;
color: #fff;
background-color: <?php echo $color ?>; }
.news-feed-area .single-new-feed-item .thumb .video-icon {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
-ms-transform: trnaslate(-50%, -50%);
/* IE 9 */
-webkit-transform: trnaslate(-50%, -50%);
/* Chrome, Safari, Opera */
transform: trnaslate(-50%, -50%); }
.news-feed-area .single-new-feed-item .thumb .video-icon .video-play-btn {
width: 50px;
height: 50px;
line-height: 50px; }
.news-feed-area .single-new-feed-item .thumb .video-icon .video-play-btn:before {
width: 60px;
height: 60px;
line-height: 50px; }
.news-feed-area .single-new-feed-item .content {
padding-top: 28px; }
.news-feed-area .single-new-feed-item .content .subtitle {
color: <?php echo $color ?>;
font-size: 14px;
text-transform: uppercase;
font-weight: 700;
line-height: 16px;
margin-bottom: 0;
display: block; }
.news-feed-area .single-new-feed-item .content .title {
font-size: 26px;
font-weight: 400;
color: #040a2c;
line-height: 30px;
margin-top: 5px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.news-feed-area .single-new-feed-item .content .title:hover {
color: <?php echo $color ?>; }

/*-----------------------
Faq Area
------------------------*/
.faq-area {
background-color: #040a2c;
padding: 115px 0 100px 0; }
.faq-area .section-title {
font-size: 30px;
text-transform: uppercase;
font-weight: 700;
color: #fff;
margin-top: 0; }
.faq-area .accordion-wrapper {
margin-top: 50px; }
.faq-area .accordion-wrapper .panel {
background-color: transparent;
border: none;
margin-bottom: 10px; }
.faq-area .accordion-wrapper .panel .panel-heading {
background-color: transparent;
border: none;
padding: 0; }
.faq-area .accordion-wrapper .panel .panel-heading .panel-title a {
border: 2px solid #fff;
width: 100%;
display: block;
font-size: 20px;
line-height: 20px;
color: #fff;
padding: 18px 30px;
position: relative;
padding-left: 90px; }
.faq-area .accordion-wrapper .panel .panel-heading .panel-title a[aria-expanded="true"] {
border-color: <?php echo $color ?>;
color: <?php echo $color ?>; }
.faq-area .accordion-wrapper .panel .panel-heading .panel-title a .icon {
display: inline-block;
position: absolute;
left: 0;
top: 0;
width: 60px;
height: 60px;
text-align: center;
color: #fff;
font-size: 30px;
line-height: 60px;
z-index: 0; }
.faq-area .accordion-wrapper .panel .panel-heading .panel-title a .icon:after {
position: absolute;
content: '';
left: -2px;
top: -2px;
width: 62px;
height: 100%;
background-color: <?php echo $color ?>;
z-index: -1; }
.faq-area .accordion-wrapper .panel .panel-body {
border: none;
font-size: 16px;
line-height: 30px;
color: #bfbfbf;
padding: 33px 0 14px 0; }

/*------------------------
Brand Logo
------------------------*/
.happy-clients-area {
padding: 110px 0 115px 0; }
.happy-clients-area .brand-carousel {
margin-top: 30px; }
.happy-clients-area .brand-carousel .owl-dots {
position: absolute;
left: 50%;
top: -35px;
-ms-transform: translateX(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%); }
.happy-clients-area .brand-carousel .owl-dots .owl-dot {
display: inline-block;
width: 10px;
height: 10px;
border-radius: 50%;
background-color: #d1d1d1;
margin: 0 5px; }
.happy-clients-area .brand-carousel .single-brand-logo {
border: 1px solid #040a2c;
display: inline-block;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
padding: 10px; }
.happy-clients-area .brand-carousel .single-brand-logo:hover {
border-color: <?php echo $color ?>; }

/*------------------------
call to action
------------------------*/
.call-to-action {
background-color: #040a2c; }
.call-to-action .call-to-action-inner {
position: relative;
z-index: 0;
padding: 75px 0 85px 0; }
.call-to-action .call-to-action-inner .bg-icon {
position: absolute;
right: 100px;
top: 0;
color: #393c4f;
font-size: 150px;
line-height: 150px;
z-index: -1; }
.call-to-action .call-to-action-inner .left-content {
display: inline-block; }
.call-to-action .call-to-action-inner .left-content .title {
font-size: 28px;
text-transform: uppercase;
font-weight: 700;
color: #fff; }
.call-to-action .call-to-action-inner .right-content-area {
display: inline-block;
float: right; }
.call-to-action .call-to-action-inner .right-content-area .boxed-btn {
margin-top: 10px;
width: 160px;
height: 50px;
line-height: 50px;
background-color: <?php echo $color ?>; }

/*-------------------------
Get In Touch area
--------------------------*/
.get-in-touch-area {
padding: 110px 0 120px 0; }
.get-in-touch-area.cotnact-page {
padding-top: 120px; }
.get-in-touch-area .contact-form-wrapper .form-element .input-field {
background-color: #f4f4f4;
border: 2px solid transparent;
border-radius: 0;
color: #565656;
font-weight: 700;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.get-in-touch-area .contact-form-wrapper .form-element .input-group-addon {
background-color: #f4f4f4;
border: 2px solid #ccc;
border-radius: 0;
color: #565656;
font-weight: 700;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.get-in-touch-area .contact-form-wrapper .form-element .input-field:focus {
border-color: <?php echo $color ?>;
background-color: transparent; }

.get-in-touch-area .contact-form-wrapper .submit-btn {
height: 50px;
line-height: 50px;
background-color: #040a2c; }
.get-in-touch-area .contact-form-wrapper .submit-btn:hover {
background-color: <?php echo $color ?>; }

/*----------------------
Contact Info area
------------------------*/
.contact-info-area {
padding: 120px 0; }
.contact-info-area .single-contact-info-box {
position: relative;
border: 10px solid #040a2c;
text-align: center;
padding: 70px 0 70px 0;
z-index: 0;
overflow: hidden; }
.contact-info-area .single-contact-info-box .bt-icon {
position: absolute;
left: 0;
top: 0;
font-size: 250px;
line-height: 200px;
z-index: -1;
color: #e5e6e9; }
.contact-info-area .single-contact-info-box .bt-icon.one {
top: -40px; }
.contact-info-area .single-contact-info-box .bt-icon.two {
top: -40px; }
.contact-info-area .single-contact-info-box .bt-icon.two i {
-ms-transform: rotate(-25deg);
/* IE 9 */
-webkit-transform: rotate(-25deg);
/* Chrome, Safari, Opera */
transform: rotate(-25deg); }
.contact-info-area .single-contact-info-box .bt-icon.three {
top: -30px;
right: -100px; }
.contact-info-area .single-contact-info-box .bt-icon.three i {
-ms-transform: rotate(35deg);
/* IE 9 */
-webkit-transform: rotate(35deg);
/* Chrome, Safari, Opera */
transform: rotate(35deg); }
.contact-info-area .single-contact-info-box .bt-icon.four {
top: -25px;
right: -120px; }
.contact-info-area .single-contact-info-box .title {
font-size: 40px;
line-height: 50px;
margin-bottom: 22px;
color: #040a2c;
text-transform: uppercase;
font-weight: 700; }
.contact-info-area .single-contact-info-box .list {
display: block;
font-size: 20px;
color: #040a2c;
line-height: 30px; }

/*----------------------
google map area
------------------------*/
.map-wrapper {
height: 500px; }

/*------------------------
Footer Area
-------------------------*/
.footer-area {
background-color: #040a2c;
padding: 100px 0 95px 0; }
.footer-area .footer_widget.about .footer-logo {
margin-bottom: 33px;
display: block; }
.footer-area .footer_widget.about .widget_body .social-icons {
margin-top: 20px; }
.footer-area .footer_widget.about .widget_body .social-icons li a:hover {
color: <?php echo $color ?>; }
.footer-area .footer_widget .widget_title .title {
font-size: 20px;
font-weight: 700;
color: #fff;
margin-bottom: 25px;
margin-top: 0; }
.footer-area .footer_widget .widget_body p {
color: #d4d4d4;
font-size: 16px;
line-height: 30px; }
.footer-area .footer_widget .widget_body .social-icons li {
display: inline-block;
margin: 0 5px; }
.footer-area .footer_widget .widget_body .social-icons li:first-child {
margin-left: 0; }
.footer-area .footer_widget .widget_body .social-icons li a {
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.footer-area .footer_widget .widget_body .gallery li {
display: inline-block;
margin: 0 3px;
margin-bottom: 10px; }
.footer-area .footer_widget .widget_body .links li {
display: block;
font-size: 14px;
font-weight: 700;
color: #fff;
margin: 12px 0; }
.footer-area .footer_widget .widget_body .links li:first-child {
margin-top: 0; }
.footer-area .footer_widget .widget_body .links li:last-child {
margin-bottom: 0; }
.footer-area .footer_widget .widget_body .links li a {
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.footer-area .footer_widget .widget_body .links li a i {
color: <?php echo $color ?>; }
.footer-area .footer_widget .widget_body .links li a:hover {
color: <?php echo $color ?>; }


.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
color: #fff !important;
text-decoration: none;
background-color: <?php echo $color ?>;
outline: 0;
}

.breadcrumb-area .nav-text .current-page {
color:  <?php echo $color ?>;
font-size: 30px;
text-transform: capitalize;
}
.breadcrumb-area .nav-text a {
color: <?php echo $color ?>;
font-size: 30px;
}
.breadcrumb-area .nav-text {
color: <?php echo $color ?>;
font-size: 30px;
}

.post-navigation .pagination li.active a, .post-navigation .pagination .dashboard-nav .left-content-area .nav.nav-tabs li.nav-item.nav-link:hover a, .dashboard-nav .left-content-area .nav.nav-tabs .post-navigation .pagination li.nav-item.nav-link:hover a {
background-color: #fff;
border: 2px solid <?php echo $color ?>;
color: <?php echo $color ?>;
}


.post-navigation .pagination li a {
background-color:  <?php echo $color ?>;
}

.post-navigation .pagination li a:hover {
color:  <?php echo $color ?>;
border: 2px solid  <?php echo $color ?>;
}

.custom-sbtn:hover,
.custom-sbtn:active,
.custom-sbtn:focus
{
background-color: <?php echo $color ?> !important;
border: 1px solid <?php echo $color ?> !important;
}
.btn-border{
border: 1px solid <?php echo $color ?> !important;
}
.notification-wrapper .icon .badge__ {
background-color:  <?php echo $color ?>;
}

.blog-details-content .single-blog-post .details-container .post-body .post-bottom-content .bottom-content .left-content ul li:hover {
border-color: <?php echo $color ?>;
background-color: <?php echo $color ?>; }

.blog-details-content .single-blog-post .details-container .post-body .post-bottom-content .bottom-content .right-content ul li:hover a {
color: <?php echo $color ?>; }

.widget-area.social .social-links li a:hover.pinterest {
background-color: <?php echo $color ?>;
border-color: <?php echo $color ?>; }

.widget-area.social .social-links li a:hover.instagram {
background-color:<?php echo $color ?>;
border-color: <?php echo $color ?>;}

.widget-area.category .categories li a:hover {
color:  <?php echo $color ?>; }
.widget-area.latest-post .single-latest-post .media .media-body h5:hover {
color:  <?php echo $color ?>;}

.logo.boxed-btn{
background-color: <?php echo $color ?>;
}
.navbar-area .navbar-collapse .navbar-nav .nav-item.dropdown.dropdown .dropdown-menu li a:hover{
background-color: transparent;
color: <?php echo $color ?>;
}

.blog-details-content .single-blog-post .meta-time {
background-color: <?php echo $color ?>;
}