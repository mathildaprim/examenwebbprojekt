var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
		["Har jag som hyresgäst till en lägenhet, något ansvar angående brandskyddet?","Nej, jag har inget ansvar alls, det står min hyresvärd för","Ja, det är enbart jag som bär ansvaret","Både hyresvärd och hyresgäst har ett ansvar", "C"],
		["Det brinner i ditt hem medan du ligger och sover och brandvarnaren är trasig. Vad kan inträffa?","Det är ingen fara, branden hörs alltid väldigt mycket","Om jag andas in giftig rök så vaknar jag","Röken från branden kan göra mig medvetslös så att jag inte vaknar", "C"],
		["Vad krävs för att det ska börja brinna?","Syre, kväve, bränsle","Bränsle, värme, syre","Värme, kväve, bränsle", "B"],
		["Vilken form av släckutrustning rekommenderas du att ha i hemmet?","En 9-kilos skumsläckare","En 6-kilos pulversläckare","En 12-kilos skumsläckare", "C"],
		["Hur släcker du lämpligast en brand i kastrull?","Med ett grytlock","Med en pulversläckare","Med en kanna", "A"],

//frågorna 


];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){ //Slutresultatet
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h3> Du fick "+correct+" av "+questions.length+" frågor rätt!</h3>";
		_("test_status").innerHTML = "Gratisutbildningen är genomförd!";
		test.innerHTML += "<button class='btn btn-default' id='knappbeta1' onClick='window.location.reload()'>Gör om testet</button></a>"; //knapp för att refrescha sidan och börja om
		test.innerHTML += "<form action='register.php' onClick=''><button class='btn btn-default' id='knappbeta2'>Beställ en utbildning!</button></form>"; //knapp för att komma till beställningsforumet
		pos = 0;
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Fråga "+(pos+1)+" av "+questions.length; //Förklarar vilken fråga du är på
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<p>"+question+"</p>"; //Svars-alternativen
	test.innerHTML += "<input type='radio' name='choices'value='A'> "+chA+"<br>"; 
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>"; 
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>"; 
	test.innerHTML += "<button class='btn btn-default' id='nextbutton' onclick='checkAnswer()'>Nästa</button>";
				
}
function checkAnswer(){ 
	//Kollar om svaret är rätt eller fel
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][4]){
		correct++;
	} 
	pos++;
	renderQuestion();

}

window.addEventListener("load", renderQuestion, false);