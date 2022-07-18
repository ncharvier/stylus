$(document).ready(function(){
	ajaxifyLinks();
})
function ajaxifyLinks(){
	$('.page-numbers').click(function(e){
		e.preventDefault();
		const currentPage = $('.current.page-numbers').html();
		var page;
		if($(this).hasClass('prev')){
			page = currentPage - 1;
		}
		else if($(this).hasClass('next')){
			page = Number(currentPage) + 1;
		}
		else{
			page = $(this).html();
		}
		showPage(page);
		// Mettre à jour l'URL sans recharger la page
		const nextState = {};
		const nextTitle = 'Page - ' + page;
		const nextURL = $(this).attr('href');
		window.history.replaceState(nextState, nextTitle, nextURL);
	})
}

function showPage(page){
	console.log(page)
	$.ajax({
		url: esgi.ajaxURL,
		type: 'POST',
		data: {
			'action': 'load_posts',
			'page' : page
		}
	}).done(function(reponse){
		$('#post-list-wrapper').html(reponse);
		ajaxifyLinks();

	})
}

