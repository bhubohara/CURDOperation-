var sideBarIsOpen= true;

	toggleBtn.addEventListener( 'click', (event) => {

		event.preventDefault();

		if(sideBarIsOpen){
	 dashboard_sidebar.style.width= '19%';
	 dashboard_sidebar.style.transition ='0.3s all';
	 	dashboard_contain_container.style.width='80%';
	 	dashboard_logo.style.fontSize = '50px';
	 	userImage.style.width = '40px';

	menuIcons = document.getElementsByClassName('menuText');
	for(var i=0; i< menuIcons.length; i++){
		menuIcons[i].style.display = 'none';
	}
	 
	 document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
	 sideBarIsOpen = false;

	}else{
		dashboard_sidebar.style.width= '25%';
	 	dashboard_contain_container.style.width='60%';
	 	dashboard_logo.style.fontSize = '60px';
	 	userImage.style.width = '60px';

	menuIcons = document.getElementsByClassName('menuText');
	for(var i=0; i< menuIcons.length; i++){
		menuIcons[i].style.display = 'inline-block';
	}
	 
	 document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'normal';

	 sideBarIsOpen = true;
	}

	});