<?php 
/*
Template Name: Webinar
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
.title-banner {
    justify-content: center;
    align-items: center;
    display: flex;
    padding: 20px 20px 30px;
}
.title-banner h2 {
    font-size: 34px;
    font-weight: 700;
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
.event-date {
    font-size: 20px;
    color: #fff;
}
.banner-container {
	background-image: url(/wp-content/uploads/2020/05/ZoomMeeting-1.jpg);
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
  width:48%;
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
    max-width: 1400px;
    padding: 0 20px;
    box-sizing: border-box;
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
    display: none;
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
}

#btn1 {
	height:30px; 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
	padding: 5px 20px;
    display: inline-block;
}

#btn2 { 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
	padding: 5px 20px;
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

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<div class="title-banner"><h2>Upcoming Webinars</h2></div>

<?php if( have_rows('event_info') ): ?>
	<div id="events-container" class="card-deck" style="color:white; margin:0 auto; margin-bottom:50px;">

	<?php while ( have_rows('event_info') ): the_row();
		
		$ind = get_row_index();
		$image = get_sub_field('event_img');
		$title = get_sub_field('event_title');
		$date = get_sub_field('date');			
		$content = get_sub_field('description');		
		$link = get_sub_field('link');	
		$nomination = get_sub_field('nomination');
		
		?>
		<div class="event-card filterDiv">

			<div id="event-date<?=$ind?>" class="date">
				<div class="card-body text-center event-card-body<?=$ind?>" style="display:inline-block; height:auto; width:100%; vertical-align:middle;">
					<p class="mm">
						<?=$date?>
					</p>
				</div>
			</div>

			<div class="event" style="position:relative; background:url('<?=$image?>') no-repeat 50% 50%;">
				<div class="event-info">
					<div class="headline" unselectable="on">
						<p class="event-title"> <?=$title;?> </p>
						<p class="event-date"><?=$date?></p>
                        
					</div>
					<div class="signUpBtn" id="signUp<?=$ind?>">
						<?php 
						
							if( $link ): ?>
							<a id="btn1" href="<?=$link?>" target="_blank">
								<p>RSVP</p>
							</a>
							<?php if ($nomination): ?>
							<button class="typeform-share button" id="btn1" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<?php endif; ?>
							<button class="typeform-share button" id="btn1" href="https://schnepsmedia.typeform.com/to/tb5jfh?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php else: ?>
							<?php if ($nomination): ?>
							<button class="typeform-share button" id="btn2" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<?php endif; ?>
							<button class="typeform-share button" id="btn2" href="https://schnepsmedia.typeform.com/to/tb5jfh?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php endif; ?>
					</div>
					<div class="description" id="event-description<?=$ind?>"> 
						<p><?php echo $content; ?></p>
						<a href="<?php echo $link; ?>" target="_blank">More Details ></a>
					</div> 
				</div>
			</div>
		</div>
		
		<?php if( $link ): ?>
				</a>
		<?php endif; ?>

	<?php endwhile; ?>

	</div>

<?php endif; ?>
<script>

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
