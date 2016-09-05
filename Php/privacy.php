<?php require_once"connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Private Policies</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/privacy.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
</head>
<style>
@media only screen and (max-width: 768px) {
    .img1 {
        display: none;
    }
}

@media only screen and (min-width: 768px) {
    .img2 {
        display: none;
    }
}
</style>
<style>
    @media only screen and (max-width: 768px) {
    .space {
        display: none;
    }
    #navbar {
        display: none;
    }
    #footer a {
        height: 500px;
        color: white;
    }
}

@media only screen and (min-width: 768px) {
    #navmob {
        display: none;
    }
    #footer a {
        color: white;
        height: 250px;
    }
}

#navmob li {
    display: inline;
    float: left;
    margin-left: 20px;
}

#navmob a {
    color: #FF746B;
}

#navmob a:hover {
    color: white;
}
</style>
<body>
    <section id="navbar">
        <nav class="navbar navbar-default" style="background-color: #3D3D3D; opacity: 1; text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="width: 130px;height: 25px; font-family: 'Open Sans', sans-serif;color: #fd5f54; margin-top: 8px; margin-left: 4px;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-menu-glowne-en-container">
                            <ul id="menu-menu-glowne-en" class="menu">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="index.php"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map.php" target="_blank"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="navmob">
        <nav class="navbar navbar-inverse" style="background-color: #343833; text-align: center; width: 100%;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-family: 'Open Sans', sans-serif;color: #FF746B;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="colleges.php">COLLEGES</a></li>
                        <li><a href="maps.php">FOOD JOINT</a></li>
                        <li><a href="team.php">TEAM</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="container-fluid">
        <div class="row display-area">
            <div class="img1">
            <div class="col-sm-4 display-ce" style="margin-top: 70px;">
                <img src="favicon.png" height="400px" width="400px;" align="middle">
            </div>
        </div>
        <div class="img2">
            <div class="col-sm-4 display-ce" style="margin-top: 70px;">
                <img src="favicon.png" height="320px" width="320px;" align="middle">
            </div>
        </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12" style="height: 550px; overflow: scroll; text-align: justify;">
                        <br>
                        <h4 style="color: #ED4F44"><strong>Privacy Policy</strong></h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            This privacy policy has been compiled to better serve those who are concerned with how their 'Personally identifiable information' (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.
                        </p>
                        <h4 style="color: #ED4F44">What personal information do we collect from the people that visit our blog, website or app?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number or other details to help you with your experience.
                        </p>
                        <h4 style="color: #ED4F44">When do we collect information?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">We collect information from you when you register on our site, subscribe to a newsletter, fill out a form contact us or enter information on our site.
                        </p>
                        <h4 style="color: #ED4F44">How do we use your information?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:
                            <ul style="font-family: 'Roboto', sans-serif;color: white;">
                                <li>To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.</li>
                                <li>To improve our website in order to better serve you.</li>
                                <li>To allow us to better service you in responding to your customer service requests.</li>
                                <li>To send periodic emails regarding your order or other products and services.</li>
                            </ul>
                        </p>
                        <h4 style="color: #ED4F44">How do we protect visitor information?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible. We use regular Malware Scanning. We do not use an SSL certificate because right now it is just to know whether the website is getting traffic or not.
                        </p>
                        <h4 style="color: #ED4F44">Do we use 'cookies'?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the site's or service provider's systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.
                        </p>
                        <h4 style="color: #ED4F44">We use cookies to:</h4>
                        <ul style="font-family: 'Roboto', sans-serif;color: white;">
                            <li>Understand and save user's preferences for future visits.</li>
                            <li>Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third party services that track this information on our behalf.</li>
                        </ul>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser's Help menu to learn the correct way to modify your cookies. If you disable cookies off, some features will be disabled It won't affect the users experience that make your site experience more efficient and some of our services will not function properly. However, you can still place orders .
                        </p>
                        <h4 style="color: #ED4F44">Third Party Disclosure</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
                        </p>
                        <h4 style="color: #ED4F44">Third party links</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.
                        </p>
                        <h4 style="color: #ED4F44">Google</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en We use Google AdSense Advertising on our website. Google, as a third party vendor, uses cookies to serve ads on our site. Google's use of the DART cookie enables it to serve ads to our users based on their visit to our site and other sites on the Internet. Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.
                        </p>
                        <h4 style="color: #ED4F44">We have implemented the following:</h4>
                        <ul style="font-family: 'Roboto', sans-serif;color: white;">
                            <li>Google Display Network Impression Reporting</li>
                            <li> Demographics and Interests Reporting</li>
                        </ul>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            We along with third-party vendors, such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together know the traffic of our website Opting out: Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the Network Advertising initiative opt out page or permanently using the Google Analytics Opt Out Browser add on.
                        </p>
                        <h4 style="color: #ED4F44">How does our site handle do not track signals?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            We don't honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place. We don't honor them because: it is just a small start-up.
                        </p>
                        <h4 style="color: #ED4F44">Does our site allow third party behavioral tracking?</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            It's also important to note that we do not allow third party behavioral tracking.
                        </p>
                        <h4 style="color: #ED4F44">COPPA (Children Online Privacy Protection Act)</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            When it comes to the collection of personal information from children under 13, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, the nation's consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online. We do not specifically market to children under 13.
                        </p>
                        <h4 style="color: #ED4F44">Fair Information Practices</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.
                        </p>
                        <h4 style="color: #ED4F44">In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            We will notify the users via email within 7 business days.We will notify the users via in site notification within 7 business days. We also agree to the individual redress principle, which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or a government agency to investigate and/or prosecute non-compliance by data processors.
                        </p>
                        <h4 style="color: #ED4F44">CAN SPAM Act</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.
                        </p>
                        <h4 style="color: #ED4F44">We collect your email address in order to:</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            • Send information, respond to inquiries, and/or other requests or questions.
                        </p>
                        <h4 style="color: #ED4F44">To be in accordance with CANSPAM we agree to the following:</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            <ul style="font-family: 'Roboto', sans-serif;color: white;">
                                <li>NOT use false, or misleading subjects or email addresses</li>
                                <li>Identify the message as an advertisement in some reasonable way</li>
                                <li>Include the physical address of our business or site headquarters</li>
                                <li>Monitor third party email marketing services for compliance, if one is used.</li>
                                <li>Honor opt-out/unsubscribe requests quickly</li>
                            </ul>
                        </p>
                        <h4 style="color: #ED4F44">If at any time you would like to unsubscribe from receiving future emails, you can email us at</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            collegexplorer@gmail.com and we will promptly remove you from ALL correspondence.
                        </p>
                        <h4 style="color: #ED4F44">Contacting Us</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            If there are any questions regarding this privacy policy you may contact us using the information below.
                            <br> collegexplorer.co.in
                            <br> collegexplorer@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 0px; margin: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center quote">
                    <div class="space">
                    </div>
                    <q style="font-family: 'Allan', cursive;">If you don’t build your dream, someone else will hire you to help them build theirs</q><span> - Dhirubhai Ambani </span>
                </div>
            </div>
        </div>
    </div>
<!-- footer     -->
    <footer id="footer" style="background-color:#2E3444; margin-top: 30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <a href="index.php"><img src="assets/images/favicon.png" alt="responsive-image" style="height:169px; width=169px; align:center; padding-top:20px;"></a>
                        <ul style="padding-left: 0px; padding-top: 10px; color: white;">&copy; CollegExplorer 2015</ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footertitle" style="color:#FF6E49;">LEARN MORE</h3>
                    <div class="learnmorelinks">
                        <ul><a href="aboutus.php" style="text-decoration: none;">ABOUT US</a></ul>
                        <ul><a href="privacy.php" style="text-decoration: none;">PRIVACY POLICY</a></ul>
                        <ul><a href="terms.php" style="text-decoration: none;">TERMS & CONDITIONS</a></ul>
                        <ul><a href="disclaimer.php" style="text-decoration: none;">DISCLAIMER</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#FF6E49;">Subscribe</h3>
                    <form id="footerSignupForm">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="">
                        </div>
                        <button type="submit" style="background-color: #EEE5E9; border-color:#EEE5E9;">Get all important updates</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="connectCol">
                        <h3 class="footerTitle" style="color:#FF6E49;">Connect</h3>
                        <ul id="footerSocialBtns">
                            <a id="headerTwBtn" class="headerSocialBtn" href="https://www.twitter.com/collegexplorer" target="_blank"><img src="assets/images/twitter.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerFbBtn" class="headerSocialBtn" href="https://www.facebook.com/collegeexplorer" target="_blank"><img src="assets/images/facebook.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerliBtn" class="headerSocialBtn" href="#"><img src="assets/images/linkedin.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headergpBtn" class="headerSocialBtn" href="https://plus.google.com/+CollegexplorerIncollegexplorer" target="_blank"><img src="assets/images/googleplus.png" style="height:44px; width:44px;padding-top:10px;"></a>
                        </ul>
                        <div id="footerAddress" style=" padding-top:10px;">
                            <br>
                            <span id="addressTitle" style="color: white;">CollegExplorer</span>
                        </div>
                        <div id="footerEmail"><a href="collegexplorer@gmail.com" style="text-decoration: none;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
            <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </body>
        </html>
        <?php 
error_reporting(1);
  if(isset($_POST['email']))
    {
        $email=  mysqli_real_escape_string($conn,htmlentities($_POST['email']));
        if(!empty($email))
          {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {    
                {
                    $query = "INSERT INTO subscribe(email) VALUES ('{$email}')"; 
                     $result = mysqli_query($conn,$query);
                }
          }
        }
    }     
  ?>
