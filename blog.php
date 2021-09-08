<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOBER 13, 2016</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE 
                        <br>
                        <small>SEPTEMBER, 2014</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE 
                        <br>
                        <small>JULY 18, 2012</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Millions of people around the world depend on a morning cup of coffee to get their day started.

Coffee is not only a great source of caffeine that provides a convenient boost of energy but also has many beneficial antioxidants and nutrients.

A recent trend is to add coconut oil to coffee to reap the health benefits of this popular fat, too.

However, you may wonder whether this practice is healthy.

This article tells you whether you should drink coffee with coconut oil.<br><br><br>Here are some ways in which adding coconut oil to your coffee may improve health:
<br><br>
<ul>
<li>May speed up your metabolism. Studies show that MCTs in coconut oil and caffeine in coffee may speed up your metabolism, which can increase the number of calories you burn in a day.</li>
<li>May improve energy levels. Coffee contains caffeine, which can help you feel less tired. Coconut oil packs MCTs, which are transported straight to your liver and can act as a quick source of energy as well.</li>
<li>May help keep your bowels regular. Coconut oil MCTs and coffee compounds like caffeine and chlorogenic acids may help stimulate your bowels and keep your digestive system healthy.</li>
<li>May help raise HDL (good) cholesterol. Several studies have found that coconut oil can raise levels of HDL cholesterol, which is protective against heart disease.</li></ul></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Irish coffee is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with cream. The coffee is drunk through the cream.<br><br><br>A glass of Irish coffee may help stroke victims because the two-fold effect of alcohol and caffeine might jolt the brain into a recovery.

<br><br>The news comes as another piece of medical praise for alcohol. Red wine has been shown to lessen heart disease.<br><br>

Scientists at the university of Texas, in Houston, discovered the benefits of Irish coffee after testing dozens of drugs to treat strokes. One of the scientists tried out a mixture of caffeine and alcohol on his laboratory rats. Together, caffeine and alcohol reduced the areas of brain damage by 80%.
<br><br>
The dose was roughly the equivalent to one short of hard alcohol and three or four cups of coffee.<br><br>

Researcher James Grotta and his colleagues are not entirely sure why Irish coffee works but Dr Grotta said: "Both substances have a strong effect on neurotransmitters. It may be that the combination tweaks the balance to a point that is somehow beneficial."<br><br>

David Mendelow, of the department of neurosurgery at Newcastle university suggested: "The alcohol would dilate the blood vessels and ease the flow of blood, while the coffee would elevate the blood pressure.<br><br>

"Using Irish coffee to speed recovery from strokes would certainly go down well with many patients."<br><br>

According to a report in the scientific journal Discover, drinking dampens the response of the brain to a stroke and caffeine jazzes it up.<br><br>

A stroke usually happens when either a tiny piece of atheroma tissue breaks off an artery wall or a blood clot gets lodged in a vessel in the brain, stopping blood flow.<br><br>

No blood flow means no or little oxygen to that part of the brain and the cells start dying without it. Strokes are difficult to treat because many neurons in the brain die of oxygen starvation before doctors can re-establish the blood flow.

The knock-on effect is that damage is made worse because injured cells set off a cascade of biochemical chain reactions that damage healthy neighbouring cells.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte.
<br><br>INGREDIENTS
<ul>
<li>1 packet Starbucks® VIA® Instant Italian Roast (or 1 Starbucks® Espresso Roast by Nespresso® capsule)</li>
<li>¾ cup whole milk</li>
<li>2 Tbsp Starbucks® Caramel Syrup</li>
<li>Pinch of salt</li>
<li>1 ½ cups ice</li>
<li>Whipped cream</li>
<li>Caramel sauce (Optional)</li></ul>
<br>
How to Make Caramel Frozen Blended Coffee<br><br>
<ol>
<li>Blend your Starbucks® VIA® Instant Italian Roast coffee in a blender along with your milk, syrup, salt and ice. Mix on high until smooth.
A pinch of salt helps with the consistency of the drink, and we recommend using whole milk for a better texture.</li>
<li>Once blended, pour the mixture into your glass and top your drink off with a swirl of whipped cream and an additional drizzle of caramel sauce for the full café experience.</li>
<li>Enjoy your refreshing Caramel Frozen Blended Coffee.</li></ol>
</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
