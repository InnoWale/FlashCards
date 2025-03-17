const Question1 = document.createElement("h1"); //CREATES THE ELEMENT
const Answer1 = document.createElement("h1")
// ADDING ATTRIBUTE TO THE ELEMENT
Question1.textContent = "What does the nurse represent in Romeo and Juliet?";
Question1.style.fontSize = "1.3em";
Question1.style.fontWeight = "bold";

Answer1.textContent = "Nuture and care";
Answer1.style.fontSize = "1.3em";
Answer1.style.fontWeight = "bold";

//APPEND THE ELEMENT TO DOM
document.getElementById("question").append(Question1);
document.getElementById("answer").append(Answer1)
