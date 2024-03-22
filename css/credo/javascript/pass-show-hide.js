const pswrdField = document.querySelector(".form input[type='password']")
togglebtn =  document.querySelector(".form .field i");

togglebtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        togglebtn.classlist.add("active");
    }else{
        pswrdField.type = "password";
        togglebtn.classlist.remove("active");
    }

} 