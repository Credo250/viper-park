const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".button input"),
 
form.onsubmit = (e)=>{
    e.preventDefault();

}
continueBtn.onclick = ()=>{
   //let start ajax
   let xhr = new XMLHttpRequest();
   xhr.open("POST", "php/signup.php");
   xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data == "success"){

            }else{
              errorText.textContent= data;
             errorText.style.display = "block";
             
            }
        }
     }
   }
   // send form from ajax to php
   let formData = new FormData(form);
   xhr.send(FormData);
}