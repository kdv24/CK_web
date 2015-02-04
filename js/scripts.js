$(function() {
	$("h1").click(function() {
		$(".me").fadeToggle();
	});

	$("h2").dblclick(function() {
		alert("Nice work! You found my clicker!");
	});	

	$(".author").click(function() {
		prompt("What did you hope to see?");		
	});

	$("img").click(function() {
		alert("Yep, it's a picture.");
	});

	$("h3").click(function() {
		$("img").slideToggle();
	});

	$("button#blue").click(function() {
		$("ul.unstyled").prepend("<li> X </li>");
		$("li").css("cursor", "pointer");		
		$("ul.unstyled").append("<li> New item </li>");


		$(".unstyled").children("li").first().click(function() {
			$(".unstyled").remove();					
			});
	});	
});

