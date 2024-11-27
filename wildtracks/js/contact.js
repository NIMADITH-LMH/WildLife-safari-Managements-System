function submitForm() {
  
  var first = document.getElementById("First_Name").value;
  var last = document.getElementById("Last_Name").value;
  var email = document.getElementById("Email").value;
  var telephone = document.getElementById("Mobile").value;
  var msg = document.getElementById("Message").value;

  if (first && last && email && telephone && msg) {
      alert("Form filled successfully!");
      
  } else {
      alert("Please fill in all fields.");
      return false;
  }
}