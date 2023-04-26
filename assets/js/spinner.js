function showSpinnerFor7ms() {
    const spinner = document.querySelector('.spiner'); // Get the spinner element
    const body = document.querySelector('.container'); // Get the body element
    // Set spinner to be visible initially
    spinner.style.display = 'block';
    spinner.style.zIndex= '1000';
    body.style.filter = 'blur(5px)';
    body.style.zIndex = '0';
    
    setTimeout(() => {
        // Hide the spinner after 7ms
        spinner.style.display = 'none';
        body.style.filter = 'none';
    }, 1000); // 1ms = 1000 milliseconds
}

window.addEventListener('DOMContentLoaded', showSpinnerFor7ms); // Attach the function to 'load' event
