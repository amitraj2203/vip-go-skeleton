<?php
/*
Template Name: Schnps Legal
*/
/*
https://form.typeform.com/forms/JC1pIiu1

"Now which services are you ready to start with at Schneps Media?",
[{"id":"9ZLU6XW2uAgU","ref":"43ae8ea3-003d-465b-af85-8ed8d6d9af4f","label":"LLC/PLLC/LLP"},
{"id":"bgjEolVUjisM","ref":"0482bbd5-b695-42d3-83b9-4cf887de4736","label":"Name Change"},
{"id":"oKQWdaHIVO5o","ref":"4f60f9f1-92ea-4f90-a30b-0b893fd5c05a","label":"Liquor License"},
{"id":"cozaviuQwwmA","ref":"19eaa9f5-9a3a-4e2e-b919-513d9486e12c","label":"Probate Citation"},
{"id":"AFbCDtkHm2US","ref":"927a6f72-4ea8-4c5f-93bc-73625d336bef","label":"Supplemental Summons or Notice of Sale"},
{"id":"AaSTZW6VTg1O","ref":"9db5c2ba-72cf-4a69-b2b3-0244f5cc08d7","label":"Divorce Order"},
{"id":"iA7R3hpZiieL","ref":"82fb51cc-da4e-4f57-8e80-0955490c9108","label":"All Other Notices"}]},
*/
?>

<?php get_header(); ?>
<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
	<script>
	var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
	</script>
<?php } ?>
	<?php //get_template_part( 'title' ); ?>
<?php
$revslider = get_post_meta($id, "qode_revolution-slider", true);
if (!empty($revslider)){ ?>
	<div class="q_slider">
		<div class="q_slider_inner">
			<?php echo do_shortcode($revslider); ?>
		</div>
	</div>
<?php
}
?>

	<div class="container"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>

		<!-- ////////////////////////////// -->
		<!-- legal hero image section -->
		<!-- ////////////////////////////// -->
		<div class="events-banner-container" style="background-image: url('https://schnpsmediadev.wpengine.com/wp-content/uploads/2021/12/schneps_media_legal_notices_1440x600.jpg');">
			<div class="events-banner"></div>
			<div class="events-banner-title-text">

		 		<h2 id="legal-header-text" title="Schneps Legal">Schneps Legal Notices</h2>

				<ul id="legals-section-links" class="events-banner-buttons">
					<li><a class="events-banner-button legal" href="#NoticeTypes">Types of Notices</a></li>
					<li><a class="events-banner-button legal" href="#FAQs">FAQ's</a></li>
					<li><a class="events-banner-button legal" href="#Newspapers">Newspapers</a></li>
				</ul>

				<h3 class="legal-header-h3" style="color:#fff;">Get In Touch</h3>
				<p style="color:#fff;">We'd love to hear from you. Here's how you can reach us.</p>
				<h3 style="color:#fff;">Legal Inquiries</h3>
				<p style="color:#fff;font-weight:600;font-size: 16px;">Tel: <i>718-260-8307</i></p>
				<p style="color:#fff;font-weight:600;font-size: 16px;">Email:
					<a
						class="event-contact-email"
						href="mailto:legal@schnepsmedia.com"
					>
						legal@schnepsmedia.com
					</a>
				<p>

			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- legal section -->
		<!-- ////////////////////////////// -->
		<section class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h3 class="legal-header-h3">LEGAL NOTICES AND PUBLIC NOTICES</h3>

						<p class="legal-text-description">Schneps Media is your source for publishing a Legal Notice and/or Public Notice in New York County, <br/>Bronx County, Kings County and Queens County. Our newspapers reach Brooklyn, Queens, Manhattan, the Bronx, <br/>Nassau, Suffolk, Westchester and Staten Island.</p>

					</div>
				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- legal section -->
		<!-- ////////////////////////////// -->
		<section class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h3 class="legal-header-h3">UNCLAIMED FUNDS</h3>

						<p class="legal-text-description">We are also eligible to publish Unclaimed Funds <br/>for all areas of New York County, Bronx County, Kings County, <br/>Queens County and Richmond.</p>

					</div>
				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- legal section -->
		<!-- ////////////////////////////// -->
		<section class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">

						<p class="legal-text-description">Our Newspapers are Qualified on the New York State Comptroller’s List of Publishers of Unclaimed Funds for all areas of New York County, Bronx County, Kings County, Queens County and Richmond County</p>

					</div>
				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- contact section -->
		<!-- ////////////////////////////// -->
		<!-- <section class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">

					<div class="vc_col-sm-12 wpb_column vc_column_container">

						<div class="vc_row">
							<h3 class="legal-header-h3">Get In Touch</h3>
							<p>We'd love to hear from you. Here's how you can reach us.</p>
							<h3>General Inquiries</h3>
							<p>Tel: <i>718-260-8307</i></p>
							<p>Email:
								<a
									class="event-contact-email"
									href="mailto:legal@schnepsmedia.com"
								>
									legal@schnepsmedia.com
								</a>
							<p>

						</div>

					</div>

				</div>
			</div>
		</section> -->

	

		<!-- ////////////////////////////// -->
		<!-- legal section -->
		<!-- ////////////////////////////// -->
		<section id="NoticeTypes" class="container legal-header-container dark-bg">
			<div class="container_inner clearfix">
			<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h3 class="legal-header-h3">Types of legal and public notices that <br/>we can help you publish:</h3>
						<p style="font-style:italic;color:white;">By clicking on the type of notice you are interested in you can begin the process of placing<br/> your notice in our newspapers. Please make your selection below and fill out the form when prompted.</p>
					</div>
				</div>
				<div class="vc_row legal-items-row">
					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item" 
						data-tf-popup="JC1pIiu1"
						data-tf-open="click"
						data-tf-hidden="answers-service=43ae8ea3-003d-465b-af85-8ed8d6d9af4f"
					>
						<p><i class="fa fa-5x fa-money"></i></p>
						<p class="legal-item-name">LLC <br/><span class="legal-item-description">(Limited Liability Company)</span></p>
					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=43ae8ea3-003d-465b-af85-8ed8d6d9af4f"
					>
						<p><i class="fa fa-5x fa-handshake-o"></i></p>
						<p class="legal-item-name">LLP <br/><span class="legal-item-description">(Limited Liability Partnership)</span></p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=43ae8ea3-003d-465b-af85-8ed8d6d9af4f"
					>
						<p><i class="fa fa-5x fa-building-o"></i></p>
						<p class="legal-item-name">PLLC <br/>
							<span class="legal-item-description">(Professional Limited Liability Company)</span>
						</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=43ae8ea3-003d-465b-af85-8ed8d6d9af4f"
					>
						<p><i class="fa fa-5x fa-user-plus"></i></p>
						<p class="legal-item-name">LP <br/><span class="legal-item-description">(Limited Partnership)</span></p>

					</div>

				</div>
			</div>
		</section>



		<section class="container legal-header-container dark-bg">
			<div class="container_inner clearfix">
				<div class="vc_row legal-items-row">

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item" 
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=0482bbd5-b695-42d3-83b9-4cf887de4736"
					>
						<p><i class="fa fa-5x fa-pencil"></i></p>
						<p class="legal-item-name">Name Change</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=4f60f9f1-92ea-4f90-a30b-0b893fd5c05a"
					>
						<p><i class="fa fa-5x fa-beer"></i></p>
						<p class="legal-item-name">Liquor License<br />State Liquor Authority Notices</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-coffee"></i></p>
						<p class="legal-item-name">Sidewalk Café License</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=9db5c2ba-72cf-4a69-b2b3-0244f5cc08d7"
					>
						<p><i class="fa fa-5x fa-user-o"></i></p>
						<p class="legal-item-name">Summons</p>

					</div>

				</div>
			</div>
		</section>



		<section class="container legal-header-container  dark-bg">
			<div class="container_inner clearfix">
				<div class="vc_row legal-items-row">

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=927a6f72-4ea8-4c5f-93bc-73625d336bef"
					>
						<p><i class="fa fa-5x fa-folder-open-o"></i></p>
						<p class="legal-item-name">Supplemental Summons<br />Notice of Foreclosure</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=927a6f72-4ea8-4c5f-93bc-73625d336bef"
					>
						<p><i class="fa fa-5x fa-usd"></i></p>
						<p class="legal-item-name">Notice of Sale</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-bank"></i></p>
						<p class="legal-item-name">Unclaimed Funds</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-home"></i></p>
						<p class="legal-item-name">Unclaimed Property</p>

					</div>
				</div>
			</div>
		</section>



		<section class="container legal-header-container dark-bg">
			<div class="container_inner clearfix">
				<div class="vc_row legal-items-row">

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-gavel"></i></p>
						<p class="legal-item-name">Storage Auction</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=19eaa9f5-9a3a-4e2e-b919-513d9486e12c"
					>
						<p><i class="fa fa-5x fa-balance-scale"></i></p>
						<p class="legal-item-name">Probate Citation<br />Surrogates Court Notice</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-users"></i></p>
						<p class="legal-item-name">Family Court Summons or Announcement</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service=82fb51cc-da4e-4f57-8e80-0955490c9108"
					>
						<p><i class="fa fa-5x fa-envelope"></i></p>
						<p class="legal-item-name">Official Notice of Public Hearing <br/><span class="legal-item-description">(Board Of Standards & Appeals)</span></p>

					</div>

				</div>
			</div>
		</section>



		<section class="container legal-header-container dark-bg">
			<div class="container_inner clearfix">
				<div class="vc_row legal-items-row">

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service="
					>
						<p><i class="fa fa-5x fa-briefcase"></i></p>
						<p class="legal-item-name">Public Notice of Hearing</p>

					</div>

					<div 
						class="vc_col-sm-3 wpb_column vc_column_container legal-item"
						data-tf-popup="JC1pIiu1"
						data-tf-hidden="answers-service="
					>
						<p><i class="fa fa-5x fa-tablet"></i></p>
						<p class="legal-item-name">ANY New York, Kings, Queens, Bronx or Richmond County Legal or Public Notice</p>

					</div>

				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- FAQ -->
		<!-- ////////////////////////////// -->
		<section id="FAQs" class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h3 class="legal-header-h3">FAQ</h3>
					</div>
				</div>
				
				<div class="vc_row">
					<div class="vc_col-sm-2"></div>
					<div class="vc_col-sm-8 wpb_column vc_column_container faq_container">

						<div class="accordion">New Business LLC, PLLC, LLP FAQ <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>Did you just form a new LLC, PLLC or LLP?</p>
							<p>If you formed a new business in New York State that is an LLC, PLLC or an LLP you need to publish your new business announcement in 2 local newspapers. We can help you complete the publication requirement process to bring your new business in compliance with the New York State requirements for new Limited Liability Companies, Professional Limited Liability Companies and Limited Liability Partnerships.</p>
							<p>Once you have filed your new business with the New York State, you have a publication requirement to comply with. We know that the language and the process to satisfy the publication requirement can sound foreign and confusing. We are here to help and make the process easy for you. Let our professional staff walk you through the publication process to help you finalize your new business filing.</p>

							<p>Please contact Schneps Media Legals team with any questions you may have:</p>
							<p>Tel: <a href="tel:718-260-8307">(718) 260-8307</a></p>
							<p>Email: <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							<p>We look forward to helping you complete your LLC publication requirements.</p>
							
							<!-- <div class="accordion inner">Who needs to publish?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>LLC, PLLC or LLP</p>
							</div> -->
							<div class="accordion inner">What is a foreign LLC vs a domestic LLC?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Domestic and foreign in this context refers to the State where the LLC is created. A company which is registered as an LLC in New York State and which does business in New York State is operating as a domestic LLC. If the company was started in a different state, but has now filed with New York to open a New York branch and conduct business, it is operating as a foreign LLC. Both foreign and domestic LLCs (Legal Liability Companies) have the same publication requirement in New York State.</p>
							</div>
							<div class="accordion inner">How to publish a New LLC, PLLC and LLP?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once you have formed your new LLC, PLLC or LLP in Brooklyn, Queens, Bronx, Manhattan or in Suffolk County you need to contact two (2) newspapers  with a copy of your online filing receipt or yuor articles of organization. You will need to contact the newspapers within one hundred and twenty (120) days of forming or registering the business with the New York Secretary of State. Schneps Media can help you fulfill publication requirements for Kings County, Queens County, New York County, Bronx County and Suffolk County.</p>
							</div>
							<div class="accordion inner">What type of newspapers are acceptable for publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to publish in a daily and weekly newspaper. The newspapers must be circulated in the same county  as the principal place of business of the LLC. Your notice will appear in each of the two (2) newspapers once a week for the six (6) consecutive weeks of publication. Schneps Media has newspapers that can satisfy both daily and weekly newspaper publication requirements for your newly formed LLC, PLLC or LLP.</p>
							</div>
							<div class="accordion inner">What is the content of the notice that you need to publish?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The wording of the notice includes information from your filing receipt: the business name, the filing date and the address for process. Schneps Media takes the above information and we plug it into a New York State approved template for all domestic and foreign LLC, PLLC or LLP notices that we publish. We will need your online Filing Receipt or your Articles of Organization that you received from the New York Secretary of State. We will put the notice together for you, based on information from those documents. You do not need to write your own notice text.</p>
							</div>
							<div class="accordion inner">How much does the publication cost?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The fee for publication varies depending on which county you formed your business in. Schneps Media is committed to offering a competitive and affordable pricing to help you complete your publication process. Please contact us for an exact quote.</p>
							</div>
							<div class="accordion inner">What happens after the LLC, PLLC or LLP is published?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>We will provide you with affidavits of publication for both the daily and weekly publication. You will then send the two (2) affidavits to the New York Division of Corporations with a Certificate of Publication along with a $50 filing fee.</p>
							</div>
							<div class="accordion inner">What if I am past my 120 days publication deadline?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>If you are past the 120 days filing deadline, you should still complete the publication process. Schneps Media offers both weekly and daily newspapers, we can help you complete the publication quickly, so your business will be in compliance with the New York State LLC publication requirements.</p>
							</div>
							<div class="accordion inner">Is there a penalty for not complying with the publication process?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The State of New York has two (2) penalties for business entities that fail to comply with the publication requirements:</p>
								<ul>
									<li>Your business cannot use the Court system to sue until you fulfill the publication requirement.</li>
									<li>Your business will not be in good standing, and if you are sued your corporate veil may be pierced.</li>
								</ul>
							</div>
						</div>

						<div class="accordion">Name Change FAQ <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>At Schneps Media weekly community newspapers we understand the urgency and stress associated with going through a Name Change process. We are here to help. We will always get your Name Change order printed in our next available print issue, and ensure the fastest turn around possible so you can get everything finalized with the Courts and move on with your life.</p>

							<div class="accordion inner">What do I need to do to process my Order of Name Change?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>To process your Order of Name Change please contact Schneps Media Legal Notice Team via submission form above, by emailing us at <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a> or call <a href="tel:718-260-8307">(718) 260-8307</a>. Please have a copy of your Order of the Name Change on hand so we can guide you through the publication process.</p>
							</div>
							<div class="accordion inner">Why do I need to publish my Order of Name Change?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The New York Court requires you to publish your Name Change in a weekly newspaper(s). to notify the general public that a Name Change has taken place. The Judge who approves your Name Change will assign you to 1 or 2 weekly community newspapers for you to publish in. You will then need to bring a notarized affidavit of publication back to the Court to finalize the process.</p>
							</div>
							<div class="accordion inner">How soon do I need to publish my Name Change?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to publish your Order of Name Change within 60 days from the date the judge approved it.</p>
							</div>
							<div class="accordion inner">How do I obtain a notarized affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once your Name Change has been printed in the newspaper(s) that was designated by the judge, we will mail you a notarized affidavit of publication, as well as a copy of the newspaper article. You will need to return both of those back to the Court to finalize your Name Change.</p>
							</div>
							<div class="accordion inner">How quickly do I receive my affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The affidavits are mailed out the week following the publication of your order of the name change in the paper. It will take a few business days from then for you to receive it in the mail. Typically you will receive the affidavit within one (1) to two (2) weeks after the notice prints in the paper.</p>
							</div>
							<div class="accordion inner">What if I am past the 60 day deadline for publication of my Name Change?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>It is always best to contact the Court to confirm that they will still accept your paperwork and complete the name change process if you are past sixty (60) days publication requirement.</p>
								<p>Generally the court will still accept the publication. They may require you to complete additional paperwork explaining why you are late with the publishing.</p>
							</div>
							<div class="accordion inner">Is there a fee for the publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Yes. There is a small fee to cover the cost of the printing process. Schneps Media is committed to offering competitive and affordable fees for Name Change publication.</p>
								<p>Contact us for a quote at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
						</div>

						<div class="accordion">Liquor License FAQ <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>At Schneps Media community newspapers we understand the volume of paperwork and processes that are associated with opening a new bar, restaurant or store. We are here to help you break down the process and help you complete it in a few simple steps. We will always get your liquor license notice printed</p>
							<ul>
								<li>in our next available print issue</li>
								<li>provide you with an affidavit of publication</li>
								<li>ensure the fastest turnaround possible so you can get everything finalized with the State Liquor Authority (SLA) and focus on running your business.</li>
							</ul>
							
							<p>You can also contact us directly at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							<p>Or via this <a class="legal-form-link" data-tf-popup="JC1pIiu1">online form</a></p>

							<div class="accordion inner">How to obtain a liquor license in NY state?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to submit an application to the State Liquor Authority Division of New York (SLA). Before filing, you must provide notice to your municipality and/or community board of your intent to pursue a license, and wait 30 days thereafter to file your application. Note that fingerprint cards are a requirement in your application. Once your application has been submitted to the State Liquor Authority you must publish the liquor license notice in community newspapers in accordance with the NY SLA requirement and submit affidavits of publication back to the NY SLA to finalize your application.</p>
							</div>

							<div class="accordion inner">Why do I need to publish a Liquor License notice?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The State Liquor Authority requires you to publish the notice to inform the local community that the business you are opening will be selling or serving alcohol.</p>
							</div>

							<div class="accordion inner">How do I know which newspaper to publish my Liquor License in?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to publish your notice once a week for 2 consecutive weeks in a newspaper(s) that is circulated in the same county as your business.</p>
								<p>If your business is within the 5 boroughs of New York City (Counties of Kings, Queens, Bronx, New York or Richmond) you need to publish in a daily AND a weekly newspaper that is circulated in the county where your business is located.</p>
								<p>If your business is outside of 5 boroughs of New York City (Brooklyn, Queens, Bronx, Manhattan or Staten Island) you only need to publish in a daily OR a weekly publication that is circulated in the county where your business is located.</p>
								<p>Schneps Media has daily and weekly newspapers that cover: Brooklyn, Queens, Bronx, Manhattan and Staten Island, as well as Westchester, Suffolk and Nassau Counties</p>
							</div>

							<div class="accordion inner">How soon do I need to publish Liquor License?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The State Liquor Authority (SLA) states that your first publication must be made within 10 days of filing the liquor license application. You will also need to submit your affidavits of publication to the SLA within 15 days of receiving them from the newspaper.</p>
							</div>

							<div class="accordion inner">How do I obtain a notarized affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once your liquor license has been printed in the newspaper(s), we will mail you a notarized affidavit of publication, as well as a copy of the newspaper article. You will then need to submit the affidavit(s) to the State Liquor Authority (SLA) to complete the process.</p>
							</div>

							<div class="accordion inner">How quickly do I receive my affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The affidavits are mailed out the week following the publication of your liquor license in the paper. It will take a few business days from then for you to receive it in the mail. On average you will receive the affidavit within one (1) to two (2) weeks after the notice prints in the paper.</p>
							</div>

							<div class="accordion inner">What is the text of the notice that I need to publish for my Liquor License?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The State Liquor Authority (SLA) provides you with a Notice of Publication form that has a template that you need to complete. You copy the text of the notice, fill in the blanks as instructed by the SLA and send that over to the newspaper for publication. The blanks will require you to fill in a Liquor License Number is one is available, the type of alcohol you are looking to see at the venue: beer, wine, cider and/or liquor, the type of the business (restaurant, store, beer garden, etc), the name of the business and the address of the business location.</p>
							</div>

							<div class="accordion inner">Is there a fee for the publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Yes. There is a small fee to cover the cost of the printing process and the affidavit of publication. Schneps Media is committed to offering competitive and affordable fees for liquor license publication. Please contact us for a quote directly at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
						</div>

						<div class="accordion">Divorce Summons and Notice FAQ <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>At Schneps Media, we are here to help make this process as smooth as possible. We are here to answer any questions you may have about divorce publication in any of our weekly or daily newspapers.</p>

							<p>You can also contact us directly at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							<p>Or via this <a class="legal-form-link" data-tf-popup="JC1pIiu1">online form</a></p>

							<div class="accordion inner">Why do I need to publish a Divorce Summons in a newspaper?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>If you are filing for divorce and you cannot locate your spouse the Judge will order you to do a publication in a daily or a weekly newspaper that is circulated in the area of the last known address of your spouse to try and locate them. This order of publication is done to show the Court that you have made every effort possible to locate your spouse before the divorce is granted.</p>
							</div>

							<div class="accordion inner">How do I know which newspaper I need to publish my Divorce Summons in?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The judge may designate the daily or weekly newspaper you need to do the publication in, based on the last known address of your spouse. The judge will then choose this newspaper from a list of Court approved publications that they have available.</p>
								<p>However sometimes the judge will not specify the newspaper. If that happens then we can help you find the right publication. Schneps Media has daily and weekly newspapers that cover: Brooklyn, Queens, Bronx, Manhattan, as well as Westchester, Suffolk and Nassau Counties.</p>
								<p>You usually have the option of picking your own newspaper in which to publish. If you pick one of our publications and request it, you may save the judge a step in the process of having to pick a newspaper for you.</p>
							</div>
							<div class="accordion inner">How long do I need to run the Divorce Summons?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The length for which the Divorce Summons is required to run in the paper is determined by the Court of the state in which you have filed for divorce. The Court will tell you how many times they require you to publish the notice of the Divorce Summons.</p>
							</div>
							<div class="accordion inner">What do I need to submit to the Court to show that I published?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to submit proof of publication back to the Court to show that you have published the notice. The proof of publication consists of a notarized affidavit certifying that publication was done and a newspaper clipping with the text of the notice.</p>
							</div>
							<div class="accordion inner">How do I obtain a notarized affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once your divorce summons has been printed in the newspaper(s), we will mail you a notarized affidavit of publication, as well as a copy of the newspaper article. You will then need to submit the affidavit(s) to the Court to finalize the divorce proceeding.</p>
							</div>
							<div class="accordion inner">How quickly do I receive my affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The affidavits are mailed out the week following the publication of your divorce summons in the paper. It will take a few business days from then for you to receive it in the mail. On average you will receive the affidavit within one (1) to two (2) weeks after the notice prints in the paper.</p>
							</div>
							<div class="accordion inner">What is the text of the notice that I need to publish for my Divorce Summons?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The court will give you the Divorce Summons Notice which will have the text that you need to print in the paper. The Divorce Summons paperwork is what you will need to submit to the newspaper to start the publication process. If you are unsure which is the paperwork you need to supply us please do not hesitate to reach out and we will help you figure it out.</p>
								<p>Contact us at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
							<div class="accordion inner">Is there a fee for the publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Yes. There is a fee to cover the cost of the printing process and the affidavit of publication. The fee will depend on the length of the divorce summons notice and the number of weeks it needs to appear in the newspaper. Schneps Media is committed to offering competitive and affordable fees for divorce summons publication.</p>

								<p>Contact us for a quote at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
						</div>

						<div class="accordion">Notice of Sale FAQ  <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>At Schneps Media we are here to help you satisfy any publication requirement you may have. We have daily and weekly newspapers in Brooklyn, Queens, Bronx, Manhattan, Staten Island, Westchester, Nassau and Suffolk.</p>
							<p>You can also contact us directly at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							<p>Or via this <a class="legal-form-link" data-tf-popup="JC1pIiu1">online form</a></p>
							
							<div class="accordion inner">Why do I need to publish a Notice of Sale in a newspaper?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The New York State Law requires that a Notice of Sale must be published in a newspaper of record to notify the public that an auction of a property is about to be held. Publishing the Notice of Sale in the newspaper is the final step that is required before you can hold a foreclosure auction for the property.</p>
							</div>
							<div class="accordion inner">How do I know which newspaper I need to publish the Notice of Sale in?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>In most cases the judge will designate the daily or weekly newspaper you need to do the publication in based on the address of the property that is being foreclosed on. The judge will choose this newspaper from a list of Court approved publications that they have available. If the property is a lot or a building the newspapers for the Notice of Sale will be designated by the judge presiding over the foreclosure proceeding.</p>
								<p>If the Notice of Sale is for a co-op apartment, then you can choose the newspaper from the papers of record available in your county. Schneps Media has daily and weekly newspapers of record that cover: Brooklyn, Queens, Bronx, Manhattan and Staten Island as well as Westchester, Suffolk and Nassau Counties.</p>
							</div>
							<div class="accordion inner">How long do I need to run the Notice of Sale for?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The Notice of Sale for a lot or a building needs to run for 4 consecutive weeks. It will appear once a week in a weekly or a daily paper, that was designated by the judge presiding over the foreclosure proceeding.</p>
								<p>The Notice of Sale for a co-op needs to run for only 3 consecutive weeks. It will appear once a week in a weekly or a daily paper, that you can choose from the available papers of record in your county.</p>
							</div>
							<div class="accordion inner">What do I need to submit to the Court to show that I published the Notice of Sale?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to bring proof of publication back to the Courthouse to show that you have published the notice. The proof of publication consists of a notarized affidavit certifying that publication was done and a newspaper clipping with the text of the notice.</p>
							</div>
							<div class="accordion inner">How do I obtain a notarized affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once your Notice of Sale has been printed in the newspaper, we will mail you a notarized affidavit of publication, as well as a copy of the newspaper article. You will then need to submit the affidavit to the Court.</p>
							</div>
							<div class="accordion inner">How quickly do I receive my affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The affidavits are mailed out the week following the publication of your Notice of Sale in the paper. It will take a few business days from then for you to receive it in the mail. On average you will receive the affidavit within one (1) to two (2) weeks after the notice prints in the paper.</p>
							</div>
							<div class="accordion inner">What is the text of the notice that I need to publish for my Notice of Sale?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The Court will provide you with the text for the Notice of Sale which will need to be put in the paper. If you are unsure which is the paperwork you need to supply us please do not hesitate to reach out and we will help you figure it out.</p>
								<p>Contact us at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
							<div class="accordion inner">Is there a fee for the publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Yes. There is a fee to cover the cost of the printing process and the affidavit of publication. The fee will depend on the length of the Notice of Sale. Schneps Media is committed to offering competitive and affordable fees for Notice of Sale publication.</p>
								<p>Contact us for a quote at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
						</div>

						<div class="accordion">Supplemental Summons FAQ <span class="fa fa-chevron-down faq-toggle-icon"></span></div>
						<div class="panel">
							<p>At Schneps Media we are here to help you satisfy any publication requirement you may have. We have daily and weekly newspapers in Brooklyn, Queens, Bronx, Manhattan, Staten Island, Westchester, Nassau and Suffolk.</p>
							
							<p>You can also contact us directly at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							<p>Or via this <a class="legal-form-link" data-tf-popup="JC1pIiu1">online form</a></p>
							
							<div class="accordion inner">Why do I need to publish a Supplemental Summons in a newspaper?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>A Supplemental Summons notice publication is sometimes required during a legal action of foreclosure. If some parties who are associated with the ownership of the property that is being foreclosed upon by the bank cannot be located, the judge presiding over the case will require the bank to publish a notice in the newspaper circulated in the area where the property is located to try and locate the missing parties.</p>
							</div>
							<div class="accordion inner">How do I know which newspaper I need to publish the Supplemental Summons in?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>In most cases the judge will designate the daily or weekly newspaper you need to do the publication in based on the address of the property that is being foreclosed on. The judge will choose this newspaper from a list of Court approved publications that they have available.</p>
							</div>
							<div class="accordion inner">How long do I need to run the Supplemental Summons for?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The Supplemental Summons notice needs to run for 4 consecutive weeks. It will appear once a week in a weekly or a daily paper, that was designated by the judge presiding over the foreclosure proceeding.</p>
							</div>
							<div class="accordion inner">What do I need to submit to the Court to show that I published the Supplemental Summons?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>You need to bring proof of publication back to the Courthouse to show that you have published the notice. The proof of publication consists of a notarized affidavit certifying that publication was done and a newspaper clipping with the text of the notice.</p>
							</div>
							<div class="accordion inner">How do I obtain a notarized affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Once your Supplemental Summons has been printed in the newspaper(s), we will mail you a notarized affidavit of publication, as well as a copy of the newspaper article. You will then need to submit the affidavit(s) to the Court.</p>
							</div>
							<div class="accordion inner">How quickly do I receive my affidavit of publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The affidavits are mailed out the week following the publication of your Supplemental Summons in the paper. It will take a few business days from then for you to receive it in the mail. On average you will receive the affidavit within one (1) to two (2) weeks after the notice prints in the paper.</p>
							</div>
							<div class="accordion inner">What is the text of the notice that I need to publish for my Supplemental Summons?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>The Court will provide you with the text for the Supplemental Summons which will need to be put in the paper. If you are unsure which is the paperwork you need to supply us please do not hesitate to reach out and we will help you figure it out.</p>
								<p>Contact us at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
							<div class="accordion inner">Is there a fee for the publication?<span class="fa fa-chevron-down faq-toggle-icon"></span></div>
							<div class="panel">
								<p>Yes. There is a fee to cover the cost of the printing process and the affidavit of publication. The fee will depend on the length of the Supplemental Summons notice. Schneps Media is committed to offering competitive and affordable fees for Supplemental Summons publication.</p>
								<p>Contact us for a quote at <a href="tel:718-260-8307">(718) 260-8307</a> or email <a href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a></p>
							</div>
						</div>

						<p>If you have any other Legal Notice requirements, we are here to help. <br/>Please reach out to us at  at <a style="color: #ed1c24;" href="tel:718-260-8307">(718) 260-8307</a> or email <a style="color: #ed1c24;" href="mailto:legal@schnepsmedia.com">legal@schnepsmedia.com</a>.</p>

					</div>

					<div class="vc_col-sm-2"></div>
				</div>
			</div>
		</section>



		<!-- ////////////////////////////// -->
		<!-- daily newspapers section -->
		<!-- ////////////////////////////// -->
		<section id="Newspapers" class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h3 class="legal-header-h3">List of Our Newspapers:</h3>
					</div>
				</div>
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Daily New York Citywide Newspapers:</h4>
					</div>
				</div>
				<div class="vc_row">
					<div class="vc_col-sm-4 wpb_column vc_column_container"></div>

					<div class="vc_col-sm-4 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="https://www.amny.com/" target="_blank">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/amny_metro_600x338.jpg" />
							<p class="newspaper-name">amNY Metro<br/>Reaching Brooklyn, Queens, Bronx Manhattan, <br/>Staten Island, Nassau, Suffolk <br/>and Westchester</p>
						</a>
					</div>

					<div class="vc_col-sm-4 wpb_column vc_column_container"></div>
				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- weekly newspapers section -->
		<!-- ////////////////////////////// -->
		<section class="container legal-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4" style="font-size: 22px;padding-bottom: 15px;">Weekly Neighborhood Newspapers:</h4>
					</div>
				</div>
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Queens</h4>
					</div>
				</div>
				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../timesledger/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/bayside_times_600x338.jpg" />
							<p class="newspaper-name">Bayside Times <br/>incorporating <br/>Little Neck Ledger and <br/>Whitestone Times</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../the-queens-courier/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/the_queens_courier_600x338.jpg" />
							<p class="newspaper-name">Queens Courier</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../timesledger/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/flushing_times_600x338.jpg" />
							<p class="newspaper-name">Flushing Times <br/>incorporating <br/>Fresh Meadows Times</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../ridgewood-times/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/ridgewood_times_600x338.jpg" />
							<p class="newspaper-name">Ridgewood Times</p>
						</a>
					</div>

				</div>
				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../the-queens-courier/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/courier_sun_600x338.jpg" />
							<p class="newspaper-name">Courier Sun</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../ridgewood-times/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/times_newsweekly_600x338.jpg" />
							<p class="newspaper-name">Times Newsweekly</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../timesledger/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/times_ledger_600x338.jpg" />
							<p class="newspaper-name">TimesLedger <br/>incorporating <br/>Astoria Times, <br/>Jackson Heights Times, <br/>Forest Hills Ledger, <br/>Laurelton Times, <br/>Queens Village Times, <br/>Ridgewood Ledger, <br/>Howard Beach Times, <br/>Richmond Hill Times, and <br/>Jamaica Times</p>
						</a>
					</div>
					
				</div>
				

				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Brooklyn</h4>
					</div>
				</div>

				<div class="vc_row legal-items-row">
					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/bay_news_600x338.jpg" />
							<p class="newspaper-name">Bay News <br/>incorporating <br/>Kings Courier and <br/>Flatbush Life</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/bayridge_courier_600x338.jpg" />
							<p class="newspaper-name">Bay Ridge Courier</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/brooklyn_graphic_600x338.jpg" />
							<p class="newspaper-name">Brooklyn Graphic</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/brooklyn_paper_600x338.jpg" />
							<p class="newspaper-name">Brooklyn Paper</p>
						</a>
					</div>
					
				</div>

				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper"></div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/mill_basin_600x338.jpg" />
							<p class="newspaper-name">Mill Basin <br/>Marine Park Courier <br/>incorporating <br/>Canarsie Digest</p>
						</a>
					</div>
					
					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../courier-life-brooklyn-paper/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/park_slope_courier_600x338.jpg" />
							<p class="newspaper-name">Park Slope Courier <br/>incorporating <br/>Brooklyn Heights Courier, <br/>Williamsburg Courier and <br/>Carroll Gardens <br/>Cobble Hill Courier <br/>Brooklyn Paper</p>
						</a>
					</div>

				</div>

				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Bronx</h4>
					</div>
				</div>

				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper" style="margin: 0 auto;float: none;">
						<a class="newspaper-name-link" href="../bronx-times-reporter/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/bronx_times_600x338.jpg" />
							<p class="newspaper-name">Bronx Times Reporter and <br/>Bronx Times</p>
						</a>
					</div>

				</div>

				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Manhattan</h4>
					</div>
				</div>

				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper"></div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../manhattan-newspapers/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/chelsea_now_600x338.jpg" />
							<p class="newspaper-name">Chelsea Now</p>
						</a>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper">
						<a class="newspaper-name-link" href="../manhattan-newspapers/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/the_villager_600x338.jpg" />
							<p class="newspaper-name">The Villager</p>
						</a>
					</div>

				</div>

				

				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Long Island</h4>
					</div>
				</div>

				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper" style="margin: 0 auto;float: none;">
						<a class="newspaper-name-link" href="../danspapers/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/dans_papers_600x338.jpg" />
							<p class="newspaper-name">Dan’s Papers</p>
						</a>
					</div>

				</div>

				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h4 class="legal-header-h4">Brooklyn, Queens, Bronx, Manhattan and Staten Island</h4>
					</div>
				</div>

				<div class="vc_row legal-items-row">

					<div class="vc_col-sm-3 wpb_column vc_column_container legal-item newspaper" style="margin: 0 auto;float: none;">
						<a class="newspaper-name-link" href="../caribbean-life/">
							<img class="newspaper-img" src="https://www.schnepsmedia.com/wp-content/uploads/2023/09/caribbean_life_600x338.jpg" />
							<p class="newspaper-name">Caribbean Life</p>
						</a>
					</div>

				</div>

			</div>
		</section>






	</div><!-- End Container -->

</div>
<?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
	</div></div>
<?php } ?>
<?php do_action('qodef_page_after_container') ?>
<script>
jQuery(document).ready(function($) {
  	console.log('page is fully loaded');
	
	///////////////////////////////////////////////
	// accordion click event listener
	///////////////////////////////////////////////
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			let chevron = this.children[0];
			chevron.classList.toggle("fa-chevron-down");
			chevron.classList.toggle("fa-chevron-up");

			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}

	///////////////////////////////////////////////
	// scroll to section on link click
	///////////////////////////////////////////////
	document.querySelectorAll('#legals-section-links a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			const yOffset = -120;
			var selector = this.getAttribute("href");
			selector = selector.replace("#", "");

			var element = document.getElementById(selector);
			const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
			window.scrollTo({top: y, behavior: 'smooth'});
		});
	});


});
</script>
<script src="//embed.typeform.com/next/embed.js"></script>
<?php get_footer(); ?>
