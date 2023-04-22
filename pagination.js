const catalogImage = document.querySelector(".catalogImage").children;
const previousPage = document.querySelector(".previousPage");
const nextPage = document.querySelector(".nextPage");

let maxImages = 10;
let currentPage = 1;

		previousPage.addEventListener('click',
		function(){
			currentPage--;
			control();
			showImages();
		  });
		nextPage.addEventListener('click',
		function(){
			currentPage++;
			control();
		    showImages();  
		});
		
		function showImages() {
			for(let i=0;i<40; i++){
				catalogImage[i].classList.remove();
				catalogImage[i].classList.add("hideImages");
		
			   if(i>=(currentPage*10)-10 && i<currentPage*10){
			  catalogImage[i].classList.remove("hideImages");
			  catalogImage[i].classList.add();
			   }
			   currentPage.innerHTML=currentPage;
			}		
		}

		function control(){
			if(currentPage==1){
				previousPage.classList.add('deactivate');
			}
			else{
			  previousPage.classList.remove('deactivate');	
			}
			if(currentPage==4){
				nextPage.classList.add('deactivate');
			}
			else{
			  nextPage.classList.remove('deactivate');	
			}
	   }
window.onload=function(){
	control();
	showImages();
}