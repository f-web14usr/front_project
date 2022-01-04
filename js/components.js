let emaillist=document.querySelectorAll("[type='email']");

for(let email of emaillist)
{
    email.addEventListener('input',checkemail);
    var mailerror="";
   
   
}
function checkemail(e){
  
   let emaillist=document.querySelectorAll("[type='email']");

for(let email of emaillist)
{
    email.addEventListener('input',checkemail);
    var mailerror="";
   
   
}
function checkemail(e){
  
    if(this.validity.valueMissing)
    {
		this.classList.remove("outline-text:focus");
this.classList.add("error_input");
    mailerror="این فیلد حتما باید پرشود";
     this.setCustomValidity(mailerror);
     this.reportValidity();
    }
    else if(this.validity.patternMismatch==true)
    {
		this.classList.remove("outline-text:focus");
this.classList.add("error_input");
     mailerror=" الگوی ورودی نا معتبر است";
     this.setCustomValidity(mailerror);
     this.reportValidity();
 
    }
    else if(this.validity.patternMismatch==false){
        this.setCustomValidity('');
        this.reportValidity();
     }

  else if(this.validity.typeMismatch==true)
    {
		this.classList.remove("outline-text:focus");
this.classList.add("error_input");
        mailerror="  ورودی  باید یک ایمیل باشد";
        this.setCustomValidity(mailerror);
        this.reportValidity();

    }
   

 else{
    this.setCustomValidity('');
    this.reportValidity();
 }

}

}
/*
let anchorLists = document.querySelectorAll(".card-body");
for( let anchor of anchorLists){
    
    let card = anchor.closest(".card ");

    
    card.addEventListener('click', cardFill);
}
function cardFill(e){
   
   let anchor = this.querySelector(" a");
    let address = anchor.href;
   
    window.location = address; 
}
*/
//آیکون لایک
let likeiconlist=document.querySelectorAll(".fa-heart");


for( let likeicon of likeiconlist )
{
   
    let button=likeicon.closest(".icon-btn");
 
    button.addEventListener('click',like);
}
function like(e){
  e.preventDefault();
  let url=this.href;
  var icon=this.querySelector(".fa-heart");

 fetch(url)
 
.then(
function(response){
return response.text();
}
)
.then(
function(data){
  if(data=='like'){
    icon.classList.add("fas");
  icon.classList.remove("far");
  icon.classList.add("like");
  }
  else if(data=='dislike')
{
  icon.classList.add("far");
  icon.classList.remove("fas");
  
  icon.classList.remove("like");
}
}

)


  
   
}


//ایکون سبد خرید
let basketiconlist=document.querySelectorAll(".card-btn>.fa-shopping-cart");


for( let basketicon of basketiconlist )
{
  console.log(basketicon)
    let buttonbasket=basketicon.closest(".card-btn");
 
    buttonbasket.addEventListener('click',basket);
}
function basket(e){
 
  e.preventDefault();
  let url=this.href;
  let icon=this;
  console.log(icon);
 fetch(url)
 
.then(
function(response){
return response.text();
}

)
.then(
  function(data_basket){
    if(data_basket=='basket'){
     
      icon.classList.add(".card-click"); 
      icon.classList.remove(".card-btn"); 

     
    }
    else if(data_basket=='disbasket')
  {
    icon.classList.remove(".card-click"); 
      icon.classList.add(".card-btn"); 
   
  }
  }
  
  )
  
   


  
}
//ایکون بوک مارک

let bookmarkiconlist=document.querySelectorAll(".icon-btn>.fa-bookmark");


for( let bookmarkicon of bookmarkiconlist )
{
   
    let button=bookmarkicon.closest(".icon-btn");
 
    button.addEventListener('click',bookmark);
}
function bookmark(e){
 
  e.preventDefault();
  let url=this.href;
  let icon=this.querySelector(".fa-bookmark");
  console.log(icon);
 fetch(url)
 
.then(
function(response){
return response.text();
}
)
.then(
  function(data_bookmark){
    if(data_bookmark=='bookmark'){
      icon.classList.remove("far");
      icon.classList.add("fas");
      icon.classList.add("bookmark-icon");
    }
    else if(data_bookmark=='unbookmark')
  {
    icon.classList.remove("bookmark-icon");

    icon.classList.remove("fas");
    icon.classList.add("far");
  }
  }
  
  )
  
  
  


}
