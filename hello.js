// Function to calculate age based on the date of birth
function calculateAge(dob) {
    const birthDate = new Date(dob);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const month = today.getMonth() - birthDate.getMonth();

   
    return age;
}

function handleFormSubmission(event) {
    event.preventDefault(); 

    const dob = document.getElementById('date-of-birth').value;
    const ageWarning = document.getElementById('ageWarning');
    const dtb = document.getElementById('date-of-birth');
    const inputs = document.querySelectorAll('input[type="text"], input[type="date"], input[type="radio"]');
    inputs.forEach(input => {
        input.style.border = '';
    });
    let formIsValid = true;
    inputs.forEach(input => {
        if (input.type !== 'radio' && input.value.trim() === '') {
            input.style.border = '2px solid red'; // Add red border if empty
            formIsValid = false;
        }
    });


    if (!dob) {
        ageWarning.classList.add('hidden');
        
        return;
    }

    const age = calculateAge(dob);

    if (age < 12) {
        ageWarning.classList.remove('hidden'); 
        ageWarning.classList.add('hidden'); 
        alert("Form submitted successfully");
    }
}

function resetForm() {
    document.getElementById('ageWarning').classList.add('hidden');
}

document.getElementById('registration-form').addEventListener('submit', handleFormSubmission);

document.getElementById('res').addEventListener('click', resetForm);
