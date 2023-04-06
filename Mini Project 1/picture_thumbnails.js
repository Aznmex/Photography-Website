$(document).ready(function() {
  $("#thumbnails img").each(function() {
    var imageToBlowUp = $(this).attr("src");
	$(this).hover(
	  function() {
		$("#large_image").children().first().attr("src", imageToBlowUp);  		
	  },
	  function() {}
	);
  })
});