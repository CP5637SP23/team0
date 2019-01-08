<div class="row">
				<footer>
					<div class="three">
						<h1>Site Pages</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="work.html">Work</a></li>
							<li class="last"><a href="hire.html">Hire Me</a></li>

						</ul>
					</div>
					<div class="three">
						<h1>Social Media</h1>
						<ul>
							<li><a href= '<?php the_field('facebook_link')?>'>Facebook</a></li>
							<li><a href='<?php the_field('twitter_url')?>'>Twitter</a></li>
							<li><a href='<?php the_field('linkedin_url')?>'>LinkedIn</a></li>
						
						</ul>

					</div>
					<div class="three">
						<h1>Contact</h1>
						<ul>
							<li><?php the_field('house_no_and_street')?></li>
							<li><?php the_field('suburb_and_city')?></li>
							<li><?php the_field('phone_no')?></li>
							<li class="last"><?php the_field('email')?></li>
							
		
						</ul>
					</div>
					<div class="three mission">
						<h1>Mission & Vision</h1>
						<ul>
							<li><?php the_field('mission')?></li>

						</ul>
					</div>
				</footer>

		</div>

		</div>
		<!-- /container -->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18260276-3', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
$(document).ready(function() {
//Quotes rotator
var divs = $('.cbp-qtcontent');

function fade() {
var current = $('.current');
var currentIndex = divs.index(current),
nextIndex = currentIndex + 1;

if (nextIndex >= divs.length) {
nextIndex = 0;
}

var next = divs.eq(nextIndex);

next.stop().fadeIn(1500, function() {
$(this).addClass('current');
});

current.stop().fadeOut(1500, function() {
$(this).removeClass('current');
_startProgress()
setTimeout(fade, 8000);
});
}

function _startProgress(){
$(".cbp-qtprogress").removeAttr('style');
$(".cbp-qtprogress").animate({
width:"100%",
} , 8000);
}

_startProgress()
setTimeout(fade, 8000);
});
</script>
	</body>


<script src="jquery.js"></script>
		<script src="js/typed.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script>
    $(function(){
        $("#typed").typed({
            strings: ["Hi, my name is Chirss", "Hi, my name is Chris!"],
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>

	</body>
</html>
