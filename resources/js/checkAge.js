console.log("checkAge.js : подключился.");

import axios from 'axios';

const divInfo = document.querySelector("#info");
const ageInput = document.querySelector("#age");
const checkButton = document.querySelector("#checkButton");

checkButton.addEventListener("click", submitAge);

function submitAge()
{
  let ageEntered = ageInput.value;
 
  document.querySelector("#info").innerHTML = "Ваш возраст : " + "<strong>" + ageEntered + "</strong>";
  document.querySelector("#info").style.display="block";

  document.querySelector("#danger").style.display="none";
  document.querySelector("#success").style.display="none";
  
  axios.post('/api/checkAgeStatus', { age: ageEntered }).then(response => {

    console.log(response.data);
    if(response.data == "можно")
    {
      document.querySelector("#success").innerHTML = "Вам уже можно пить.";
      document.querySelector("#success").style.display="block";
    }
    else
    {      
      document.querySelector("#danger").innerHTML = "Вам ещё рано пить.";
      document.querySelector("#danger").style.display="block";
    }
 
  });
  
}

