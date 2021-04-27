// const form = document.getElementById('form1');
// const loginusername = document.getElementById('loginusername');
// const loginpassword = document.getElementById('loginpassword');

// form.addEventListener('login', e => {

//     checkInputs();

//     function checkInputs() {
//         // trim to remove the whitespaces
//         const loginusernameValue = loginusername.value.trim();
//         const loginpasswordValue = loginpassword.value.trim();


//         if(loginusernameValue === '') {
//             setErrorFor(loginusername, 'Username cannot be blank');
//             e.preventDefault();
//         } else {
//             setSuccessFor(loginusername);
//         }

//         if(loginpasswordValue === '') {
//             setErrorFor(loginpassword, 'Password cannot be blank');
//             e.preventDefault();
//         } else {
//             setSuccessFor(loginpassword);
//         }
//         function setErrorFor(input, message) {
//             const formControl = input.parentElement;
//             const small = formControl.querySelector('small');
//             formControl.className = 'form-control error';
//             small.innerText = message;
//         }
        
//         function setSuccessFor(input) {
//             const formControl = input.parentElement;
//             formControl.className = 'form-control success';
//         }
//     });
