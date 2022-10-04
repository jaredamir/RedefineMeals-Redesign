@extends('layouts.app')

@section('content')

<style type="text/css">
	body{
		background-color: #F2EEE2;
	}

	/*Header*/
	div.mtt-header{
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    position: relative;
	    width: 100%;
	    height: 50%;
	    margin-top: 80px;
	    margin-bottom: 20px;
}

	div.mtt-header h1{
	    text-align: center;
	    font-weight: 100;
	    font-family: 'Roboto';
	    font-weight: 100;
	    font-size: 7vw;
}
	div.mtt-header h1::after{
	    content: "" ;
	    position: absolute;
	    left: 25%;
	    bottom: 8%;
	    width: 5vw;
	    height: .7vw;
	    background-color: darkslategrey;
}
	h1.read_story{
		position: relative;
		text-align: center;
		font-size: 2vw;
		text-align: center;
		color: grey;
		font-weight: 100;
		font-family: 'Roboto';
		margin-bottom: 40px;

	}


	/*Team Members*/
	div.team_members{
		display: flex;
		flex-wrap: nowrap;
		justify-content: space-between;
		align-items: center;
		width: 100%;
		height: fit-content;
	}
	/*Scroll*/
	h1.read_story::after{
		content: '<- scroll ->';
		font-weight: 100;
		font-family: 'Roboto';
		font-size: 1.5vw;
		position: absolute;
		bottom: -35px;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	div.member{
		height: 100%;
		width: fit-content;
		position: relative;
	}
	div.member img{
		height: 500px;
		width: auto;
		position: relative;
		transition: all .2s ease-in-out;
	}
	div.highlight_container{
		display: none;
		transition: opacity .2s ease-in-out;
	}

	div.member_highlight{
		position: absolute;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		background-color: darkslategrey;
		opacity: 50%;
	}
	div.member h1{ 
		font-weight: 300;
		font-family: "Roboto";
		color: white;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align: center;	
	}



	/* Captions */
	div.team_caption-container{
		position: relative;
		width: 100%;
		height: fit-content;
		margin-bottom: 50px;
	}

	div.team_caption-container > div.team_caption{
		display: none;
		position: relative;
		width: 100%;
		height: 100%;
		padding: 70px 150px;
		will-change: display;
	}
	div.team_caption h2{ /*Member Title*/
		font-weight: 300;
		font-family: "Roboto";
		color: darkslategray;
		text-align: center;
		margin: 30px 30px;
		position: relative;
	}
	div.team_caption h4{
		font-weight: 100;
		font-family: "Roboto";
		color: darkslategray;
	}



/*below desktop width */
@media only screen and (min-width: 1px){
	div.team_members{
		overflow-x: scroll;
	}
	div.team_caption-container > div.team_caption{
		padding: 70px 40px;
	}
	div.member img:hover{
		transform: none;
	}
	h1.read_story::after{
		display: block;
	}
}

@media only screen and (min-width: 1300px){
	div.team_members{
		overflow-x: visible;
	}
	div.member img:hover{
		transform: scale(1.1);
	}
	div.team_caption-container > div.team_caption{
		padding: 70px 150px;
	}
	h1.read_story::after{
		display: none;
	}

}

</style>
<script src="https://unpkg.com/vue@3"></script>




<div class="mtt-header" data-aos="fade-down">
	<h1>MEET THE TEAM</h1>
</div>
<h1 class="read_story" data-aos="fade-down">Click To Read Their Story</h1>
	<!--The Container for All the Team Members-->
	<div class="team_members" data-aos="zoom-out">
		<!--Each member's div sends the name as a parameter to the JS display function-->
		<div class="member" onclick="display('matt_riss')">
			<!-- in the div contains the image and a div with the highlight and the name-->
			<img src="{{url('/images/Matt_headshot.jpg')}}">
			<!--the highlighter container must have an id of the name, formated as first_last(lowercase)-->
			<div class="highlight_container" id="matt_riss">
				<div class="member_highlight"></div>
				<h1>Matt Riss</h1>
			</div>
		</div>
		<div class="member" onclick="display('jess_fallica')">
			<img src="{{url('/images/Jess_headshot.jpg')}}">
			<div class="highlight_container" id="jess_fallica">
				<div class="member_highlight"></div>
				<h1>Jess Fallica</h1>
			</div>
		</div>
		<div class="member" onclick="display('mark_ciaburri')">
			<img src="{{url('/images/Mark_headshot.jpg')}}">
			<div class="highlight_container" id="mark_ciaburri">
				<div class="member_highlight"></div>
				<h1>Mark Ciaburri</h1>
			</div>
		</div>
		<div class="member" onclick="display('frank_sharp')">
			<img src="{{url('/images/Frank_headshot.jpg')}}">
			<div class="highlight_container" id="frank_sharp">
				<div class="member_highlight"></div>
				<h1>Frank Sharp</h1>
			</div>
		</div>
	</div>


<!--Team Member Caption Container-->
<div class="team_caption-container">
	<!--Each caption has the id of the name of the member(formated the same as the "member div") plus "-caption"-->
	<div class="team_caption" id="matt_riss-caption">
		<h2>Matt Riss, Co-founder</h2>
		<h4>Matt has spent most of his life being active.  As a soccer student-athlete in college studying exercise science, he began to notice numerous flaws in the food industry and what was available to him and his teammates.  Matt began doing research on nutrition, which eventually lead to the idea of Redefine Meals.  While enrolled at Stony Brook University Matt developed a working relationship with the athletic department.  It was there that the concept of a meal prep delivery service was born.  As a young 19-year-old entrepreneur, Matt created and ran nearly every aspect of Redefine, from web design to customer service to line cook.  Through the years, Matt has been the force behind Redefine’s growth which he doesn’t see stopping anytime soon.  He continues to be an innovative thinker within the industry, pushing new boundaries to help make nutrition delicious, convenient and accessible.</h4>
	</div>

	<div class="team_caption" id="jess_fallica-caption">
		<h2>Jess Fallica, Vice President</h2>
		<h4>After leading partnerships in college sports and multi-media for +10 years, Jess decided to bring her knowledge of building relationships, brands and business to the world meal prep. Joining Redefine Meals in Spring 2022, Jess now oversees organizational scale, business growth, partnerships and branding.  Being an active working mom of two, a wife, wellness advocate and foodie, she knows first-hand that food is a necessity that’s often the first to be missed when schedules get busy.  That is why Jess was a regular customer before even joining the team at Redefine. Since nutrition is the first step to becoming the best version of ourselves, she is now on a mission to help others discover how to feel their greatest.</h4>
	</div>

	<div class="team_caption" id="frank_sharp-caption">
		<h2>Frank Sharp, Director Operations</h2>
		<h4>Frank was attending Stony Brook University when he was first introduced to Matt Riss in 2017.  After learning about Matt’s meal prep start-up and meeting his childhood best friend and business partner Mark Ciaburri, he quickly realized that this company aligned with many of his own values and interests; nutrition, athletic training, and entrepreneurship. Frank began working for Redefine Meals part-time after graduation, which quickly turned into full-time as the vision began to grow. Over the years Frank has held many positions at Redefine, from delivery driver, to packager, to cashier, to the company’s customer service manager. Fast forward, and now Frank manages over 35 employees, oversees many of the business’s operations, and has proudly earned a piece of ownership in the business. If you know Frank, you know he loves people!  He is the foundation of our strong community presence, where every team member and customer knows that Redefine has their back.</h4>
	</div>

	<div class="team_caption" id="mark_ciaburri-caption">
		<h2>Mark Ciaburri, Co-founder</h2>
		<h4>Mark discovered his passion for nutrition at young age, cooking since he was tall enough to reach the counter. He attributes his creativity and love for food to his family who owned a bakery in Brooklyn and taught him how to cook traditional Italian recipes from an early age.  At 19, while playing soccer and studying Nutrition and Dietetics at Buffalo State, Mark along with best friend Matt Riss founded Redefine Meals.  He quickly learned the ins and outs of building an idea into a business and working tirelessly to make it a huge success. During the early years, Mark worked every functioning role at the company, but now the kitchen remains his number one focus and passion.  That is why each and every meal on Redefine’s menu is a personal labor of love, and reflective of his belief in proper nutrition. Mark has dedicated his life to making healthy, delicious food using simple homemade ingredients that improves people’s lives from the inside out. </h4>
	</div>


<script type="text/javascript">
	class TeamMember {
		constructor(name_id){
			this.name = name_id
			this.highlight = document.getElementById(name_id)
			this.caption = document.getElementById(name_id + '-caption')
		};
		hideMember(){
			this.highlight.style.opacity = '0'
			this.highlight.style.display = 'none'
			this.caption.style.display = 'none'
		}
		showMember(){
			this.highlight.style.display = 'block'
			this.highlight.style.opacity = '1'
			this.caption.style.display = 'block'

		}
	}

	//each member is instantiated as a TeamMember class with a parameter of their name 
	const matt_riss = new TeamMember('matt_riss')
	const jess_fallica = new TeamMember('jess_fallica')
	const mark_ciaburri = new TeamMember('mark_ciaburri')
	const frank_sharp = new TeamMember('frank_sharp')

	//**! If a new member is added, all that is needed to do is add a new instance then add the variable (of the instance to the members_list below)

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

</script>




</div>

<!-- Version 2
<script type="text/javascript">
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

</script>

-->
<!-- Version 1
<script type="text/javascript">
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
	/*
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
</script>
-->



@endsection