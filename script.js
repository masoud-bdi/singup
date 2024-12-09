function handleSubmit(event) {
    event.preventDefault();
  
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const gender = document.getElementById('gender').value;
    const city = document.getElementById('city').value;
  
    const resultDiv = document.getElementById('result');
    resultDiv.textContent = `Thank you, ${name}! Your information has been submitted.`;
    
    console.log({
      Name: name,
      Gmail: email,
      Age: age,
      Gender: gender,
      City: city
    });
  }
  