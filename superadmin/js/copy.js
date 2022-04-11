
function copyEmail(e) {
    const email = e.dataset.email;
  
     /* Copy the email inside the text field */
    navigator.clipboard.writeText(email);
    
    /* Notify success */
    alert("Copied");
  }