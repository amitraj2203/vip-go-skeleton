<?php 
/*
Template Name: Events V2
*/ 
?>

<?php get_header(); ?>

<style type="text/css">
html {
	scroll-behavior: smooth;
}

::selection {
	background:rgba(0,0,0,0);
}

*.unselectable {
   -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.q_logo {
	visibility:hidden;
}

.q_logo .normal {
	visibility:visible;
}

.button-style {
    color: #fff;
    background: #ed1c24;
    padding: 10px 20px;
    margin: 10px 1%;
    display: inline-block;
    transition: .8s all ease-in;
}
.button-style:hover {
    color: #fff;
    text-decoration: none;
    opacity: .8;
}

.banner-container {
	background-image: url(/wp-content/uploads/2019/09/StarNetwork_Hero8_1920x550-1.jpg);
	position: relative;
	height: 400px;
	width: 100vw;
	margin-top: 0px;
	background-color: rgb(0,0,0);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.banner {
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0.25;
    background-position: 50% 45%;
    background-repeat: no-repeat;
    background: #000;
}

.title-text {
	margin: 0px;
	padding: 0px;
	width: 100%;
	text-align: center;
	max-width: 1100px;
	margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.title-text h1{
	font-family:'Oswald'; 
	font-size:68px;
	line-height:68px;
	background-color:rgba(255,255,255,1); 
	-webkit-background-clip: text; 
	color: #fff;
}

.filterDiv {
  color: #ffffff;
  width:45%;
  text-align: left;
  margin: 0 auto;
  margin-bottom:20px; 
  padding:auto;
  transition:all 0.1s ease-in;
}

.show {
  display: table;
}

.card-deck {
  margin-top: 20px;
  overflow: hidden;
	display: flex;
	flex-wrap: wrap;
}
.card-body {
    align-self: center;
}
.date {
	width:150px; 
	background: #000;
	display: flex;
	justify-content: center;
	align-content: center;
}

.event {
	display:table-cell; 
 
	width:100%; 
}

.event-info {
	position:relative; 
	width:100%; 
	background-color:rgba(0,0,0,0.7);
	height: 100%;
}

.dd {
	color:white; 
	font-family:'Oswald'; 
	font-size:68px;
	line-height:68px; 
	font-weight:600;
	padding:0px;
	margin:0px;
}

.mm {
	color:white; 
	font-family:'Oswald'; 
	font-size:36px; 
	line-height:36px;
	font-weight:600;
	padding:0px;
	margin:0px;
}

.arrow {
	position:absolute; 
	right:-45px; 
 
	width:180px; 
	padding:60px;
	opacity:0.7; 
	visibility:visible;
}

.description {
	color: #fff;
	padding: 0 20px 15px;
}

.description p {
	color:white;
	height:65px; 
	max-height:65px; 
	display:-webkit-box; 
	-webkit-box-orient:vertical; 
	-webkit-line-clamp:3; 
	overflow:hidden; 
	text-overflow:ellipsis; 
	font-family:'Open Sans';
	font-style: normal;
	font-weight:300;
}

.headline {
	padding:20px; 
	left:145px;
}

.locImg {
	height:20px; 
	width:20px;
}

.location {
	padding-top:10px; 
	font-size: 1.2rem; 
	line-height:20px;
	font-family:'Open Sans';
	font-weight:400;
	color: #fff;
}

.event-title {
	width:100%;
	min-width:205px;
	font-family:'Open Sans';
	font-weight:600;
	color: #fff;
	font-size: 2rem;
	line-height: 2rem;
}

.signUpBtn {
	padding: 0 20px;
}

.btn1 {
	height:30px; 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
	padding: 5px 20px;
	display: inline-block;
}

.btn2 { 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
	padding: 5px 20px;
	display: inline-block;
}

.signUpBtn p {
	font-family:'Open Sans'; 
	color:white; 
	font-size:16px; 
	font-weight:600;
	margin: 0;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #fff;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
/* Content Blocks */
.content-blocks {
	display: flex;
	max-width: 1132px;
	margin: 40px auto 0;
	justify-content: space-between;
}
.content-blocks .content-block {
    width: 32%;
}
.content-blocks .image-container img {
    height: 27vh;
    object-fit: cover;
    width: 100%;
}
.content-blocks .content-title {
    font-weight: 600;
    font-size: 1.2rem;
    margin-top: 10px;
}
.content-block a {
	transition:all 0.1s ease-in;
}
.content-block a:hover {
    opacity: .8;
}
.content-description {
    display: inline-block;
    margin-bottom: 20px;
}
.content-link {
    color: #fff;
    background: #ed1c24;
    padding: 10px 20px;
    box-sizing: border-box;
    display: inline-block;
}
.content-link:hover {
    text-decoration: none;
    opacity: .8;
}

.description a {
    color: #fa2828;
    font-size: 1.2rem;
    font-weight: 600;
}

@media (max-width: 600px) {
	.banner-container {
		margin-top: 0;
	}
	.card-deck {
    flex-wrap: wrap;
	}
	.filterDiv {
		flex-direction: column-reverse;
		width: 100%;
	}
	.content-blocks {
    flex-wrap: wrap;
	}
	.content-blocks .content-block {
    width: 100%;
    margin-bottom: 10px;
	}
	.title-text h2 {
		font-size: 2rem !important;
	}
	.title-text h3 {
		font-size: 18px;
	}
	.content-blocks .image-container img {
    height: 33vh;
	}
	.content-blocks .content-title {
		padding: 0 20px;
	}
	.date {
		width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
	}
	.dd {
		font-size: 36px;
		line-height: 36px;
		margin-left: 4%;
	}
	.card-body {
    display: flex !important;
    justify-content: inherit;
    align-items: center;
		padding: 10px;
	}
	#myBtnContainer {
		display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
		position: static !important;
		transform: none !important;
		width: 100% !important;
	}
}

</style>

<div class="banner-container">
	<div class="banner"></div>
	<div class="title-text">
		 <?php the_field("hero_content");?>
	</div>
</div>

<?php if( have_rows('content_block')): ?>
<div class="content-blocks">
	<?php while ( have_rows('content_block') ): the_row(); ?>
		<div class="content-block">
				<div class="image-container">
					<a href="<?=get_sub_field('link')?>">
						<img src="<?=get_sub_field('image');?>" alt="<?=get_sub_field('title');?>">
					</a>
				</div>
				<div class="content-title">
					<?=get_sub_field('title');?>
				</div>
				<div class="content-description">
					<?=get_sub_field('description');?>
				</div>
				<?php if (get_sub_field('call_to_action_text')) :?>
				<a class="content-link" href="<?=get_sub_field('link')?>"><?=get_sub_field('call_to_action_text');?></a>
				<?php endif; ?>
		</div>
	<?php endwhile;?>
</div>
<?php endif; ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="myBtnContainer" class="btn-group" style="position:relative; width:80vw; max-width:600px; margin:0px; margin-top:60px; margin-bottom:60px; left:50%; transform:translate(-50%, 0%);">
	<button class="btn active" onclick="filterSelection('New York')">ALL</button>
	<button class="btn" onclick="filterSelection('Manhattan')">Manhattan</button>
	<button class="btn" onclick="filterSelection('Brooklyn')">Brooklyn</button> 
	<button class="btn" onclick="filterSelection('Queens')">Queens</button> 
	<button class="btn" onclick="filterSelection('Bronx')">Bronx</button> 
	<button class="btn" onclick="filterSelection('Long Island')">Long Island</button> 
</div>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<?php if( have_rows('event_info') ): ?>
	<div id="events-container" class="card-deck" style="color:white; margin:0 auto; margin-bottom:50px;">

	<?php while ( have_rows('event_info') ): the_row();
		
		$ind = get_row_index();
		$image = get_sub_field('event_img');
		$title = get_sub_field('event_title');
		$city = get_sub_field('city');
		$loc = get_sub_field('event_location');		
		$day = get_sub_field('day');		
		$month = get_sub_field('month');		
		$content = get_sub_field('description');		
		$link = get_sub_field('link');	
		$eventid = get_sub_field('eventid');
		$nomination = get_sub_field('nomination');
		
		?>
		<!-- <div class="filterDiv <?=$city?>" onclick="show(this,<?=$ind?>)" onmouseout="hide(this,<?=$ind?>)" onclick="location.href='<?php echo $link; ?>'" style="display:table; height:150px; width:45%; min-width:600px; margin:0 auto; margin-bottom:20px; padding:0 auto;"> -->

		<!-- <div id="event-card" class="filterDiv <?=$city?>" onclick="clickEvents(this,<?=$ind?>)"> -->
		<div class="event-card filterDiv <?=$city?>">

			<div id="event-date<?=$ind?>" class="date">
				<div class="card-body text-center event-card-body<?=$ind?>" style="display:inline-block; height:auto; width:100%; vertical-align:middle;">
					<p class="mm">
						<?php echo $month; ?>
					</p>
					<p class="dd">
						<?php echo $day; ?>
					</p>
				</div>
			</div>

			<div class="event" style="position:relative; background:url('<?=$image?>') no-repeat 50% 50%;">
				<div class="event-info">
					<div class="headline" unselectable="on">
						<p class="event-title"> <?=$title;?> </p>
						<p class="location"> 
							<img src="https://i.pinimg.com/originals/71/c8/06/71c806428f9d8c76f8dd491ee177382c.png" class="locImg"> 
							<?=$loc;?> 
						</p>
					</div>
					<div class="signUpBtn" id="signUp<?=$ind?>">
						<?php 
						if (strpos($link, 'eventbrite.com') !== false && empty($eventid)) {
							preg_match('/(\d+$)/',$link, $matches);
							if($matches[0]):
								$eventid = $matches[0];
							endif; 
						}
						
						if( $eventid ): ?>
							<button class="btn1" id="example-widget-trigger-<?=$eventid?>" type="button" data-value="1" onclick="checkOut('<?=$eventid?>')">
								<p>Attend</p>
							</button>
							<?php if ($nomination): ?>
							<button class="typeform-share button btn1" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<?php endif; ?>
							<button class="typeform-share button btn1" href="https://schnepsmedia.typeform.com/to/tb5jfh?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php else: ?>
							
							<?php if ($link): ?>
							<a class="btn1 button" href="<?=$link?>" target="_blank">
								<p>Attend</p>
							</a>
							<?php endif; ?>
							
							<?php if ($nomination): ?>
							<button class="typeform-share button btn1" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<?php endif; ?>
							<button class="typeform-share button btn1" href="https://schnepsmedia.typeform.com/to/tb5jfh?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php endif; ?>
					</div>
					<div class="description" id="event-description<?=$ind?>"> 
						<p><?php echo $content; ?></p>
						<?php if ($link): ?>
						<a href="<?php echo $link; ?>" target="_blank">More Details &gt;</a>
						<?php endif; ?>
					</div> 
				</div>
			</div>
		</div>
		
		<?php if( 0 && $link ): ?>
				</a>
		<?php endif; ?>

	<?php endwhile; ?>

	</div>

<?php endif; ?>

<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script>
	filterSelection("New York")
	function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("filterDiv");
		if (c == "New York") { c = "";}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
			if  (x[i].className.indexOf(c) > -1) {
				x[i].style.display = "flex";
			}
		}
	}

	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
	}



	function checkOut(i) {
		var exampleCallback = function() {
			console.log("Order complete!");
		};

		window.EBWidgets.createWidget({
			widgetType: "checkout",
			eventId: i,
			modal: true,
			modalTriggerElementId: "example-widget-trigger-" + i,
			onOrderComplete: exampleCallback
		});
	}

	(function() { 
		var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; 
		if(!gi.call(d,id)){ 
			js=ce.call(d,"script"); 
			js.id=id; 
			js.src=b+"embed.js"; 
			q=gt.call(d,"script")[0]; 
			q.parentNode.insertBefore(js,q) 
		} 
	})() 

</script>

<?php get_footer(); ?>
