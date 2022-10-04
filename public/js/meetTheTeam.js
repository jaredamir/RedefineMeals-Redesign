//Version 3

//the TeamMember class takes in the html id as a parameter and constructs a member that has the highlight element and caption as attributes
class TeamMember {
		constructor(name_id){
			this.name = name_id
			this.highlight = document.getElementById(name_id)
			this.caption = document.getElementById(name_id + '-caption')
		};
		hideMember(){ //the class has a hide and show method that target the attirubutes and sets their displays as none or block
			this.highlight.style.display = 'none'
			this.caption.style.display = 'none'
		}
		showMember(){
			this.highlight.style.display = 'block'
			this.caption.style.display = 'block'

		}
	}

	//each member is instantiated as a TeamMember class with a parameter of their name (the same as the id in the html element)
	const matt_riss = new TeamMember('matt_riss')
	const jess_fallica = new TeamMember('jess_fallica')
	const mark_ciaburri = new TeamMember('mark_ciaburri')
	const frank_sharp = new TeamMember('frank_sharp')

	//each member is added to the members_list, this list is looped through in the display function
	const members_list = [matt_riss,jess_fallica,mark_ciaburri,frank_sharp]
	
	//the function takes in the clicked member's name as a parameter. It loops through the TeamMember list and if the name matches the name in the list, it does the showMember class method, else it does the hideMember method
	function display(member_name){
		for(let i = 0; i < members_list.length; i++){
			if (members_list[i].name==member_name){
				members_list[i].showMember()
				members_list[i].caption.scrollIntoView()
			}else{
				members_list[i].hideMember()
			}
		}
	}

/*
	Version 2 
	class TeamMember {
		constructor(name_id, caption_id){
			this.highlight = document.getElementById(name_id)
			this.caption = document.getElementById(caption_id)
		};

		hideMember(){
			this.highlight.style.display = 'none'
			this.caption.style.display = 'none'
			
		}

		showMember(){
			this.highlight.style.display = 'block'
			this.caption.style.display = 'block'
		}
	}

	const matt_riss = new TeamMember('matt_riss', 'matt_riss-caption')
	const jess_fallica = new TeamMember('jess_fallica', 'jess_fallica-caption')
	const mark_ciaburri = new TeamMember('mark_ciaburri', 'mark_ciaburri-caption')
	const frank_sharp = new TeamMember('frank_sharp', 'frank_sharp-caption')


	//the function takes in their name as a parameter and changes the variable style into "block" only if the parameter matches their name 
	function display(member){
		if(member=="matt_riss"){
			matt_riss.showMember()
		}else{
			matt_riss.hideMember()
		}

		if(member=="jess_fallica"){
			jess_fallica.showMember()
		}else{
			jess_fallica.hideMember()
		}

		if(member=="mark_ciaburri"){
			mark_ciaburri.showMember()
		}else{
			mark_ciaburri.hideMember()
		}

		if(member=="frank_sharp"){
			frank_sharp.showMember()
		}else{
			frank_sharp.hideMember()
		}
	}




Version 1

	//All the Team Members and their captions turned into variables
	var	matt_riss = document.getElementById("matt_riss")
	var	matt_riss_caption = document.getElementById("matt_riss-caption")

	var	jess_fallica = document.getElementById("jess_fallica")
	var	jess_fallica_caption = document.getElementById("jess_fallica-caption")

	var	frank_sharp = document.getElementById("frank_sharp")
	var	frank_sharp_caption = document.getElementById("frank_sharp-caption")

	var	mark_ciaburri = document.getElementById("mark_ciaburri")
	var	mark_ciaburri_caption = document.getElementById("mark_ciaburri-caption")

	//the function takes in their name as a parameter and changes the variable style into "block" only if the parameter matches their name 
	function display(member){
		if(member=="matt_riss"){
			matt_riss.style.display = "block"
			matt_riss_caption.style.display = "block"
		}else{
			matt_riss.style.display = "none"
			matt_riss_caption.style.display = "none"
		}

		if(member=="jess_fallica"){
			jess_fallica.style.display = "block"
			jess_fallica_caption.style.display = "block"
		}else{
			jess_fallica.style.display = "none"
			jess_fallica_caption.style.display = "none"
		}

		if(member=="mark_ciaburri"){
			mark_ciaburri.style.display = "block"
			mark_ciaburri_caption.style.display = "block"
		}else{
			mark_ciaburri.style.display = "none"
			mark_ciaburri_caption.style.display = "none"
		}

		if(member=="frank_sharp"){
			frank_sharp.style.display = "block"
			frank_sharp_caption.style.display = "block"
		}else{
			frank_sharp.style.display = "none"
			frank_sharp_caption.style.display = "none"
		}
	}
	
	function mattRiss(){
		var display = "matt_riss"
		return display_function
	}

	function jessFallica(){
		console.log("jess clicked")
	}

	function frankSharp(){
		console.log("frank clicked")
	}

	function markCiaburri(){
		console.log("mark clicked")
	}
	*/