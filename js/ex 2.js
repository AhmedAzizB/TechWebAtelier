var x=document.querySelector("h1");
var x1=document.getElementById("color")
x1.addEventListener("change",()=>{
    x.style.color=document.getElementById("color").value;
})
var x2=document.getElementById("Size");
x2.addEventListener("change",()=>{
    x.style.fontSize=x2.value+"px";
    
})
var x3=document.getElementById("font1");
x3.addEventListener("change",()=>{
    x.style.fontFamily=x3.options[x3.selectedIndex].text;
})