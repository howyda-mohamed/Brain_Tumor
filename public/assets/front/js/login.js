let jsspan=document.querySelectorAll(".jsspan")
// let iicon=document.querySelectorAll(".fa-solid")
jsspan.forEach(function(ele){
ele.onclick=function(){
   jsspan.forEach(function(ele2){
    ele2.classList.remove("active");
   })
   ele.classList.add("active")
   return false;
}
})
let icon=document.getElementById("icon");
let pass=document.getElementById("pass");
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












// 