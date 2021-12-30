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

let likeiconlist=document.querySelectorAll(" .fa-heart");


for( let likeicon of likeiconlist )
{
   
    let button=likeicon.closest(".icon-btn");
 
    button.addEventListener('click',like);
}
function like(e){

 
  
    let iconf=this.querySelector(".fa-heart ");
    if(this.classList.contains("far")){
    this.classList.remove("far");
  this.classList.add("fas");
  this.classList.add("like");
}
else if(this.classList.contains("fas")){
    this.classList.remove("fas");
  this.classList.add("far");
  this.classList.remove("like");
}

}
//ایکون سبد خرید
let basketiconlist=document.querySelectorAll(".fa-shopping-cart");


for( let basketicon of basketiconlist )
{
   
    let buttonbasket=basketicon.closest(".icon-btn");
 
    buttonbasket.addEventListener('click',basket);
}
function basket(e){
  
    
   
  this.classList.add("basket-icon");

  
}
//ایکون بوک مارک

let bookmarkiconlist=document.querySelectorAll(".fa-bookmark");


for( let bookmarkicon of bookmarkiconlist )
{
   
    let button=bookmarkicon.closest(".fa-bookmark");
 
    button.addEventListener('click',bookmark);
}
function bookmark(e){

 
  
    let iconf=this.querySelector(".fa-bookmark");
    if(this.classList.contains("far")){
    this.classList.remove("far");
  this.classList.add("fas");
  this.classList.add("bookmark-icon");
}
else if(this.classList.contains("fas")){
    this.classList.remove("fas");
  this.classList.add("far");
  this.classList.remove("bookmark-icon");
}

}
