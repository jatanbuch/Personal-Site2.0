$(document).ready(function() {
	$('#am_position').click(function() {
		if($('#reference1').is(':hidden')) {
			$('#reference1').slideDown('slow');
		}else{
			$('#reference1').hide('slow');
		}
	});
	$('#csr_position').click(function() {
		if($('#reference2').is(':hidden')) {
			$('#reference2').slideDown('slow');
		}else{
			$('#reference2').hide('slow');
		}
	});
	$('#developer_position').click(function(){
		if($('#reference3').is(':hidden')){
			$('#reference3').slideDown('slow');
		}else{
			$('#reference3').hide('slow');
		}
	});
	$('.accomplishments1').click(function() {
		if($('#accomplishments1').is(':hidden')) {
			$('#accomplishments1').slideDown('slow');
		}else{
			$('#accomplishments1').hide(1000);
		}
	});
	$('.accomplishments2').click(function() {
		if($('#accomplishments2').is(':hidden')) {
			$('#accomplishments2').slideDown('slow');
		}else{
			$('#accomplishments2').hide(1000);
		}
	});
	$('#menu').click(function() {
		if($('nav#nav').is(":hidden")) {
			$('nav#nav').slideDown(900);
			$('#menu').hide(800);
			$('section, footer').fadeTo(50, 0.3);
			$('section, footer').slideUp(1000);
		}
	});
	$('div.twitter_clone').click(function() {
		if($('div.twitter_caption').is(":hidden")){
			$('div.twitter_caption').slideDown(800);
		}else{
			$('div.twitter_caption').fadeOut('slow');
		}
	});
	$('div.personal_site').click(function() {
		if($('div.personalsite_caption').is(":hidden")){
			$('div.personalsite_caption').slideDown(800);
		}else{
			$('div.personalsite_caption').fadeOut('slow');
		}
	});
	$('div.apple_clone').click(function() {
		if($('div.appleclone_caption').is(":hidden")){
			$('div.appleclone_caption').slideDown(800);
		}else{
			$('div.appleclone_caption').fadeOut('slow');
		}
	});
});