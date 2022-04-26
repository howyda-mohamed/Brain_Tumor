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