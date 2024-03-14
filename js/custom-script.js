const searchFormInput = document.querySelector('.searchform input');
searchFormInput.placeholder = '';
console.log(searchFormInput);

const button = document.querySelector('.home-page-filter-sec button');
button.textContent = 'Search';
console.log(button);

const containers = document.querySelectorAll(".selectable-image");
    containers.forEach((container) => {
			const images = container.querySelectorAll(".elementor-widget-container");
			
			images.forEach(function(img) {
					img.addEventListener("click", function() {
							// Remove active class from all images
							images.forEach(function(i) {
									i.classList.remove("active");
							});

							// Add active class to clicked image
							this.classList.add("active");
					});
			});
		})