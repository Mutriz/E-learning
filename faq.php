<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<br><br>
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <div id="background">
	
        <div id="page">
           
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
							

                    </div>
                    <div id="body">

<br>

                        <b style="color:yellow" size="100%">Frequently Asked Questions</b>
                        <div class="hero-unit-table">
										<div id="accordion">
	<h1 style="color:purple"> <b>Who devolped this website?</b></h1>
	<div><li style = "color:pink;"> Sir. VINCENT KIPTOO. A year 3 student in software engineering. for more info call this number 0716694970</li> </div>
	<h1 style="color:purple"> <b>Is this E-leraning website free</b></h1>
	<div><li style = "color:pink;"> Yes, this programme is absolutely free.</li> </div>
	<h3 style="color:purple"> <b>Will you send me books, CDs, DVDs, or PDF files?</b></h3>
	<div><li style="color:cyan;"> All these studying materials onec they have been approved then everyone can access it </li> </div>
	<h3 style="color:purple"> <b>How to Register?</b></li> </h3>
	<div><li style = "color:lime;">click on the register button.The whole process is easy</li></div>
	<h3 style = "color:purple;"> <b>Forgot password?</b></h3>
	<div><li style = "color:green;"> A: Login details are personal. You may go to the e-Learning page (elearning.evalpartners.org) and use the "Request new password" at the top of the page.
1) Once you have entered your username or email address, filled the captcha code and requested for the new password to be sent to your e-mail, you will then receive an email with a link.<br>
2) You will need to click on this link that you receive in your email inbox and you will be logged in automatically.<br>
3) Kindly note that this is a one-time login and after you are logged in you must change your password immediately. This link expires after three days.<br>
4) After you have changed your password, you will be able to login again using your new passwor<br></li></div>
	
	<h3 style = "color:purple;"><b>Will e-Learning work in my smart phone, tablet and other handheld devices?</b></h3>
	<div><li style = "color:green;"> As of now, handheld devices such as iPhone and iPad do not support the e-Learning programme, android device do work</li></div>
	
	<h3 style="color:purple"> <b>How to obtain the materials?</b></h3>
	<div><li style = "color:green;"> This is an e-Learning programme; therefore, all the study are accessible online</li></div>
	<h3 style="color:purple"> <b>Who is this e-Learning Programme designed for?</b></h3>
	<div><li style = "color:green;">  The courses are designed to teach several subjects intended to improve competency in conducting evaluations</li></div>
	
	<h3 style="color:purple"><b>Can I translate or adapt the course materials for my own purposes?</b></h3>
	<div><li style = "color:green;">Yes, but you must acknowledge the source of the material.</li></div>
	
	<h3 style="color:purple" ><b>What if I need technical support?</b></h3>
	<div><li style = "color:green;"> If you should require technical support, we would be happy to help you.
You can reach us via email, telephone or via the contact form on our website.</li></div>
	
	<h3 style="color:purple" ><b>What Kind of Technology Will I Need?</b></h3>
	<div><li style = "color:green;"> Technology requirements vary according to the program,
	but schools generally require students to meet basic hardware and software requirements which typically include a computer with the following features:

Recent Windows, Mac or Linux operating system,
High-speed internet access,
Minimum RAM requirements,
Office software, such as word processing, spreadsheet and slide presentation programs,
Web camera,
Headset with microphone and
CD/DVD drive</li></div>
	<h3 style="color:purple" ><b>Who Can Benefit?</b></h3>
	<div><li style = "color:blue;"> Who Can Benefit?
Online programs can meet the needs of many types of students, depending on their educational and professional needs.
 Some examples of students who might benefit from e-learning programs include the following:

On-campus students looking for scheduling flexibility,
Off-campus students who do not live near a college or university,
Adult students with family and/or work obligations and
Working professionals seeking to boost or change their careers
</li></div>
	
	<h3 style="color:purple"><b>What Types of Programs Are Available?</b></h3>
	<div><li style = "color:green;"> A broad range of associate's, bachelor's and master's degree programs are available online, 
	offered by both public and private schools,
	colleges and universities as well as online-only educational institutions. 
	Doctorate degrees and post-graduate certificate programs sometimes have an e-learning option, 
	as well as many vocational diploma and certificate programs. 
	Some schools also offer non-credit adult education classes online.</li></div>
                            
                        </div>
                    </div>
                    <div id="footer">
                        <?php include'includes/footer.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	
	
	<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>000-