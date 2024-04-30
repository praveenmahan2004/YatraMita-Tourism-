<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Yatra Mitra</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<style>
        /* Style for the chatbot logo */
        #chatbot-logo {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
        }

        /* Style for the chatbot popup */
        .chatbot-popup {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 1000;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            display: none;
        }
    </style>
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Yatra Mitra</h1>
	</div>
</div>
<!-- ikkada ayyi undachu 0000000000 -->



    <script>
        function sendMessage() {
            var userInput = document.getElementById("user-input").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    document.getElementById("chat-output").innerHTML += "<p>User: " + userInput + "</p>";
                    document.getElementById("chat-output").innerHTML += "<p>Chatbot: " + response.answer + "</p>";
                    document.getElementById("user-input").value = "";
                }
            };
            xhttp.open("POST", "http://127.0.0.1:5000", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            var data = JSON.stringify({"message": userInput});
            xhttp.send(data);
        }
    </script>

<!--- rupes ---->
<div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO USD. 50 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT USD. 50 OFF</h3>
				<h4><a href="offers.html">US APP OFFER</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div>
<!--- /rupes ---->




<!---holiday---->
<div class="container">
	<div class="holiday">
	



	
	<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->


    <!-- Chatbot logo -->
    <div id="chatbot-logo">
        <img src="images\chatbot-logo.png" alt="Chatbot Logo" width="50" height="50">
    </div>

    <!-- Chatbot popup -->
    <div id="chatbot-popup" class="chatbot-popup">
        <p>Hi there!</p>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
        <div id="chatbot-response"></div>
    </div>

    <script>
        function sendMessage() {
            var userInput = document.getElementById("user-input").value;
            document.getElementById("chatbot-response").innerHTML += "<p>User: " + userInput + "</p>";
            document.getElementById("user-input").value = "";
            // Add your chatbot logic here to process user input and generate a response
            var response = generateResponse(userInput);
            document.getElementById("chatbot-response").innerHTML += "<p>Chatbot: " + response + "</p>";
        }

        function generateResponse(userInput) {
    // Sample responses based on user input
    var responses = {
        "hi": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
		"hey": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
		"how are you": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
    "is anyone there?": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
    "hello": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
    "good day": "Namaskaram !! I'm Narada Muni - The Celestial Sage. Here to assist you with your Travel.",
    "bye": "Hope you enjoy your Trip. Namo Narayana",
    "see you later": "Hope you enjoy your Trip. Namo Narayana",
    "goodbye": "Hope you enjoy your Trip. Namo Narayana",
    "thanks": "Happy to help!",
    "thank you": "Happy to help!",
    "that's helpful": "Happy to help!",
    "thank's a lot!": "Happy to help!",
    "thanq": "Happy to help!",
    "do you take credit cards?": "We accept VISA, Mastercard and Paypal",
    "do you accept mastercard?": "We accept VISA, Mastercard and Paypal",
    "can i pay with paypal?": "We accept VISA, Mastercard and Paypal",
    "are you cash only?": "We accept most major credit cards, and Paypal",
    "where should i go in winter?": "Some popular winter destinations in India are Goa, Kerala, Rajasthan, Auli, Shimla, Manali, and Pondicherry.",
    "winter destinations": "Some popular winter destinations in India are Goa, Kerala, Rajasthan, Auli, Shimla, Manali, and Pondicherry.",
    "where should i go in spring?": "In spring, you can consider visiting Darjeeling, Ooty, Coonoor, Srinagar, and Tawang for a memorable experience.",
    "spring destinations": "In spring, you can consider visiting Darjeeling, Ooty, Coonoor, Srinagar, and Tawang for a memorable experience.",
    "where should i go in summer?": "During summer, destinations like Leh-Ladakh, Munnar, Valley of Flowers, Coorg, and Andaman and Nicobar Islands offer a cool retreat.",
    "summer destinations": "During summer, destinations like Leh-Ladakh, Munnar, Valley of Flowers, Coorg, and Andaman and Nicobar Islands offer a cool retreat.",
    "where should i go in autumn?": "Autumn is a great time to visit Ranthambore National Park, Varanasi, Kutch, Pachmarhi, and Hampi for unique experiences.",
    "autumn destinations": "Autumn is a great time to visit Ranthambore National Park, Varanasi, Kutch, Pachmarhi, and Hampi for unique experiences.",
    "how can i travel on a budget?": "To travel on a budget, consider booking accommodations through budget-friendly platforms, using public transportation, eating at local eateries, and opting for free or low-cost activities such as hiking and visiting parks.",
    "budget-friendly travel tips": "To travel on a budget, consider booking accommodations through budget-friendly platforms, using public transportation, eating at local eateries, and opting for free or low-cost activities such as hiking and visiting parks.",
    "affordable travel destinations": "To travel on a budget, consider booking accommodations through budget-friendly platforms, using public transportation, eating at local eateries, and opting for free or low-cost activities such as hiking and visiting parks.",
    "i'm looking for adventure travel options": "For adventure seekers, destinations like Rishikesh for river rafting, Bir Billing for paragliding, Spiti Valley for trekking, and Goa for scuba diving offer thrilling experiences.",
    "best destinations for adventure seekers": "For adventure seekers, destinations like Rishikesh for river rafting, Bir Billing for paragliding, Spiti Valley for trekking, and Goa for scuba diving offer thrilling experiences.",
    "adventure travel experiences": "For adventure seekers, destinations like Rishikesh for river rafting, Bir Billing for paragliding, Spiti Valley for trekking, and Goa for scuba diving offer thrilling experiences.",
    "where can i go for a family vacation?": "For a memorable family vacation, consider destinations like Ooty, Mahabaleshwar, Munnar, and Jim Corbett National Park, which offer activities suitable for all age groups.",
    "family-friendly travel destinations": "For a memorable family vacation, consider destinations like Ooty, Mahabaleshwar, Munnar, and Jim Corbett National Park, which offer activities suitable for all age groups.",
    "travel options for families": "For a memorable family vacation, consider destinations like Ooty, Mahabaleshwar, Munnar, and Jim Corbett National Park, which offer activities suitable for all age groups.",
    "where can i experience indian culture?": "To immerse yourself in Indian culture, visit cities like Jaipur, Varanasi, Udaipur, and Kochi, where you can explore historical monuments, attend cultural festivals, and indulge in local cuisine.",
    "cultural immersion destinations": "To immerse yourself in Indian culture, visit cities like Jaipur, Varanasi, Udaipur, and Kochi, where you can explore historical monuments, attend cultural festivals, and indulge in local cuisine.",
    "cultural festivals and events": "To immerse yourself in Indian culture, visit cities like Jaipur, Varanasi, Udaipur, and Kochi, where you can explore historical monuments, attend cultural festivals, and indulge in local cuisine.",
    "bye": "Goodbye!"
    };

    // Get response based on user input
    var response = responses[userInput.toLowerCase()];

    // Return the response if found, otherwise return the default response
    return response || "I didn't understand. Can you repeat?";
}

        // Show chatbot popup on logo click
        document.getElementById("chatbot-logo").addEventListener("click", function() {
            document.getElementById("chatbot-popup").style.display = "block";
        });
    </script>


</body>
</html>