function sayHello(){
	alert('Hello! from external stylesheet');
}
// Simple Vanilla JS
document.getElementById("button2").addEventListener("click", sayHello);

// Jquery
$(#button1).on("click", sayHello);
