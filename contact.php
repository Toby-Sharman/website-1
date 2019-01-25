<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interlogical Contacct page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link type="text/css" href="css.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <img class="logo" src="logo.png" alt="Logo">
      <nav>
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i>  Home</a></li>
          <li class="sub-menu"><a><i class="fa fa-info-circle"></i> About</a>
            <ul>
              <li><a href="team.html"><i class="fa fa-users"></i> Team</a></li>
              <li><a href="#"><i class="fas fa-chess-board"></i> Product</a></li>
              <li><a href="#"><i class="far fa-newspaper"></i> News</a></li>
            </ul>
          </li>
          <li><a class="presentpage"><i class="fa fa-phone"></i> Contact</a></li>
          <li class="sub-menu"><a><img class="ye" src="ye.png" alt="YE Logo">   Young Enterprise</a>
            <ul>
              <li><a href="https://www.young-enterprise.org.uk/"><img class="ye" src="ye.png" alt="YE Logo">   Young Enterprise</a></li>
              <li><a href="#"><i class="fas fa-shopping-basket"></i> YE Marketplace</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-download"></i> App Download</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true" onclick="toggleClass(this)"></i>
      </div>
    </header>
      <div class="container">
	<div class="row">
			<h1 style="text-align: center">contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
  <form action="contactForm.php" method="post">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" required />
					<label>Name</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email" name="mail" required />
					<label>Email</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="subject" required />
					<label>Subject</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="message" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
        <button type="submit" name="submit" class="btn-lrg submit-btn">Send Message</button>
			</div>
    </form>
	</div>
</div>

    <section id="social_icon_footer">
      <div class="container">
        <div class="text-center center-block">
          <a href="#"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
          <a href="#"><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
          <a href="https://urlgeni.us/instagram/Interlogical"><i id="social-ig" class="fab fa-instagram fa-3x social"></i></a>
          <a href="#"><i id="social-yt" class="fab fa-youtube fa-3x social"></i></a>
          <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
      $(document).ready(
        function() {
          $('.menu-toggle').click(function() {
            $('nav').toggleClass('active')
          })

          $('ul li').click(function() {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        }
      )
    </script>
    <script type="text/javascript">
    function toggleClass(el) {
      if (el.className == "fa fa-bars") {
        el.className = "fas fa-times";
      } else {
        el.className = "fa fa-bars";
      }
    }

    </script>

  </body>
  </html>
