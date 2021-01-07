jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
	// News loadmore

	// $('.misha_loadmore').click(function (e) {
	// 	var button = $(this),
	// 		data = {
	// 			'action': 'loadmore',
	// 			'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
	// 			'page': misha_loadmore_params.current_page
	// 		};

	// 	$.ajax({ // you can also use $.post here
	// 		url: misha_loadmore_params.ajaxurl, // AJAX handler
	// 		data: data,
	// 		type: 'POST',
	// 		beforeSend: function (xhr) {
	// 			button.text('LOADING...'); // change the button text, you can also add a preloader image
	// 		},
	// 		success: function (data) {
	// 			if (data) {
	// 				button.text('LOAD MORE'); //.prev().before(data); // insert new posts
	// 				$('.news-list .loadmore-post').before(data);
	// 				misha_loadmore_params.current_page++;
	// 				runAfterLoader();
	// 				if (misha_loadmore_params.current_page == misha_loadmore_params.max_page)
	// 					button.remove(); // if last page, remove the button

	// 				// you can also fire the "post-load" event here if you use a plugin that requires it
	// 				// $( document.body ).trigger( 'post-load' );
	// 			} else {
	// 				button.remove(); // if no data, remove the button as well
	// 			}
	// 		}
	// 	});
	// 	e.stopImmediatePropagation();
	// 	return false;
	// });



	// $('.misha_loadmore_blog').click(function (e) {
	// 	var button = $(this),
	// 		data = {
	// 			'action': 'loadmore_blog',
	// 			'query': misha_loadmore_params_blog.posts, // that's how we get params from wp_localize_script() function
	// 			'page': misha_loadmore_params_blog.current_page
	// 		};

	// 	$.ajax({ // you can also use $.post here
	// 		url: misha_loadmore_params_blog.ajaxurl, // AJAX handler
	// 		data: data,
	// 		type: 'POST',
	// 		beforeSend: function (xhr) {
	// 			button.text('LOADING...'); // change the button text, you can also add a preloader image
	// 		},
	// 		success: function (data) {
	// 			if (data) {
	// 				button.text('LOAD MORE'); //.prev().before(data); // insert new posts
	// 				$('.news-list .loadmore-post').before(data);
	// 				misha_loadmore_params_blog.current_page++;
					
	// 				if (misha_loadmore_params_blog.current_page == misha_loadmore_params_blog.max_page)
	// 					button.remove(); // if last page, remove the button

	// 				// you can also fire the "post-load" event here if you use a plugin that requires it
	// 				// $( document.body ).trigger( 'post-load' );
	// 			} else {
	// 				button.remove(); // if no data, remove the button as well
	// 			}
	// 		}
	// 	});
	// 	e.stopImmediatePropagation();
	// 	return false;
	// });





});
