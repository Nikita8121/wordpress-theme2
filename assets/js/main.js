'use strict'
function navactive(){
	$('.nav-up-container>nav').addClass('navactive');
}
function removenavactive(){
	$('.nav-up-container>nav').removeClass('navactive');
}
 
 function pop_up_open(){
 	$('.pop-up').addClass('pop-up-active');
   $('html').addClass('overflow-hidden');
 }
 function pop_up_close(){
 	$('.pop-up').removeClass('pop-up-active');
 	$('html').removeClass('overflow-hidden');
 }