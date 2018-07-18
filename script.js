function info(username){
	if(event.buttons === 1){
		showInfo("Information!",`This seat was ordered by ${username}`);
	}
}

function showInfo(title,info){
	let wrapper = document.createElement('div');
	wrapper.setAttribute("class","center");
	wrapper.id = "InfoMenu";
	document.body.append(wrapper);

	let titleDiv = document.createElement('div');
	titleDiv.setAttribute("class","info-title");
	titleDiv.textContent = title;
	wrapper.appendChild(titleDiv);

	let infoDiv = document.createElement('div');
	infoDiv.setAttribute("class","info-text");
	infoDiv.textContent = info;
	wrapper.appendChild(infoDiv);

	setTimeout(()=>{
		wrapper.outerHTML = "";
	},3000);
}