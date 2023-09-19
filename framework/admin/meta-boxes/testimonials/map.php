<?php

//Testimonials

$qodeTestimonials = new BridgeQodeMetaBox("testimonials", esc_html__('Qode Testimonials', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("testimonials",$qodeTestimonials);

	$qode_testimonial_author = new BridgeQodeMetaField("text","qode_testimonial-author","",esc_html__('Author', 'bridge'),esc_html__('Enter the author name', 'bridge'));
	$qodeTestimonials->addChild("qode_testimonial-author",$qode_testimonial_author);

	$qode_testimonial_text = new BridgeQodeMetaField("textarea","qode_testimonial-text","",esc_html__('Text', 'bridge'), esc_html__('Enter the testimonial text', 'bridge'));
	$qodeTestimonials->addChild("qode_testimonial-text",$qode_testimonial_text);

	$qode_testimonial_website = new BridgeQodeMetaField("text","qode_testimonial_website","",esc_html__('Website', 'bridge'),esc_html__('Enter full URL of the author\'s website', 'bridge'));
	$qodeTestimonials->addChild("qode_testimonial_website",$qode_testimonial_website);

	$qode_testimonial_rating = new BridgeQodeMetaField("select","qode_testimonial_rating","",esc_html__('Rating', 'bridge'),esc_html__('Choose the rating for this testimonial', 'bridge') ,array(
		"" => "",
	   	"1" => esc_html__('1 out of 5', 'bridge'),
	   	"2" => esc_html__('2 out of 5', 'bridge'),
	   	"3" => esc_html__('3 out of 5', 'bridge'),
	   	"4" => esc_html__('4 out of 5', 'bridge'),
	   	"5" => esc_html__('5 out of 5', 'bridge')
	 ));
	$qodeTestimonials->addChild("qode_testimonial_rating",$qode_testimonial_rating);