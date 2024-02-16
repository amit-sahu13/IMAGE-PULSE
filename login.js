document.addEventListener("DOMContentLoaded", function () {
    const signInButton = document.getElementById("signInButton");
    const signUpButton = document.getElementById("signUpButton");
    const signInForm = document.querySelector(".form-section.sign-in");
    const signUpForm = document.querySelector(".form-section.sign-up");


  
    signInButton.addEventListener("click", function (e) {
      e.preventDefault(); 
      signInForm.style.display = "block";
      signUpForm.style.display = "none";
    });
  
    signUpButton.addEventListener("click", function (e) {
      e.preventDefault(); 
      signUpForm.style.display = "block";
      signInForm.style.display = "none";
    });
  
  });

  function closeForm() {
    var modal = document.getElementById("formscontainer");
    modal.style.display = "none";
    document.body.style.overflow = "scroll"; 
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById("footer").style.filter = "blur(0px)";
  }
  
  function showLogin(){
    document.getElementById("formscontainer").style.display="block";
  }
  
  function showLogout(){
    window.location.href='index.php';
  }
  
  
  
  