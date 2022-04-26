let jsspan=document.querySelectorAll(".jsspan")
// let iicon=document.querySelectorAll(".fa-solid")
jsspan.forEach(function(ele){
ele.onclick=function(){
   jsspan.forEach(function(ele2){
    ele2.classList.remove("activee");
   })
   ele.classList.add("activee")
   return false;
}
});

let icon=document.getElementById("icon");
console.log(icon)
let pass=document.getElementById("pass");
console.log(pass)
let passatter=pass.getAttribute("type")
icon.onclick=function(){
   if(passatter==="password"){
       passatter="text";
       pass.setAttribute("type",passatter);
       icon.setAttribute("class","fa-solid fa-eye")
   }
   else{
    passatter="password";
    pass.setAttribute("type",passatter);
    icon.setAttribute("class","fa-solid fa-eye-slash")
   }
}
let icontwo=document.getElementById("icontwo");
let passtwo=document.getElementById("passtwo");
let passattertwo=passtwo.getAttribute("type")
icontwo.onclick=function(){
   if(passattertwo==="password"){
    passattertwo="text";
    passtwo.setAttribute("type",passattertwo);
    icontwo.setAttribute("class","fa-solid fa-eye")
   }
   else{
    passattertwo="password";
    passtwo.setAttribute("type",passattertwo);
    icontwo.setAttribute("class","fa-solid fa-eye-slash")
   }
}
// //////////////////////////////////////////////
// //////////////////////////////////////////////
// //////////////////////////////////////////////
/////////////////////////////////////////////////

const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
  });
  console.log(inputs);
  form.reset();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}













// 