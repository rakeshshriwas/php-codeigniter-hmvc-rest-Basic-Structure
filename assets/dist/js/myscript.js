$(".btn-save").click(function(e){
	e.preventDefault();
	
	book_details = {};

	book_details.book_title        = $('#book_title').val();
	book_details.book_isbn         = $('#book_isbn').val();
	book_details.book_yop          = $('#book_yop').val();
	book_details.book_category_id  = $('#book_category_id').find(":selected").text();
	book_details.book_publisher_id = $('#book_publisher_id').find(':selected').text();
	book_details.book_author       = $('#book_author').find(':selected').each(function(){$(this).text();});	





console.log(book_details);

})