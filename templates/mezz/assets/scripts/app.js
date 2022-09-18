function dropdown() {
	document.getElementById("user-space-dropdown").classList.toggle("show");
}
  
window.onclick = function(event) {
	if (!event.target.matches('.page-content-user-space-right-side-item-nav-hidden-button')) {
		var dropdowns = document.getElementsByClassName("page-content-user-space-right-side-item-dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var payment = this.nextElementSibling;
		if (payment.style.display === "block") {
			payment.style.display = "none";
		} 
		
		else {
			payment.style.display = "block";
		}
	});
}