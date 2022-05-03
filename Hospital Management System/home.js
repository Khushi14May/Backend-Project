function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  
 function p()
 {

  var y= document.getElementsByClassName("patient");
  for(i=0;i<y.length;i++)
  {
    y[i].style.display='block';
  }
  var d=document.getElementsByClassName('docter')
  for(i=0;i<d.length;i++)
  {
   d[i].style.display='none'; 
 }
  var x=document.getElementsByClassName('mainframe');
  for(i=0;i<x.length;i++)
  {
   x[i].style.display='none'; 
 }
}
function d()
 {
  var y= document.getElementsByClassName("patient");
  for(i=0;i<y.length;i++)
  {
    y[i].style.display='none';
  }
  var x=document.getElementsByClassName("docter");

  for(i=0;i<x.length;i++)
  {
    x[i].style.display='block';
  }
  var d=document.getElementsByClassName('mainframe')
  for(i=0;i<d.length;i++)
  {
   d[i].style.display='none'; 
 }
}
function db()
 {
 
  var y= document.getElementsByClassName("mainframe");
  for(i=0;i<y.length;i++){
    y[i].style.display='block';
  }
  var x=document.getElementsByClassName('patient');
  for(i=0;i<x.length;i++)
  {
    x[i].style.display='none';
  }
  var d=document.getElementsByClassName('docter')
  for(i=0;i<d.length;i++)
  {
    d[i].style.display='none';
  }
 
 
}

 let menu = document.querySelector('#menu-btn');
 let navbar = document.querySelector('.navbar');
 
 menu.onclick = () =>{
     menu.classList.toggle('fa-times');
     navbar.classList.toggle('active');
 }
 
 window.onscroll = () =>{
     menu.classList.remove('fa-times');
     navbar.classList.remove('active');
 }
 