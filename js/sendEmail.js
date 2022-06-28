function sendEmail () {

    const spinner = document.getElementById('submit-spinner')
    spinner.classList.toggle('spinner0')
    const modal = document.getElementById("myModal");

    Email.send({
        SecureToken : "f6087ed3-1ac2-4a1f-b0c2-b490914d163e",
        To : 'benvidshot@gmail.com',
        From : "benvidshot@gmail.com",
        Subject : "RLD - มีนัดหมายใหม่จากลูกค้า",
        Body : ""
    }).then( message => {
        console.log(message)
        modal.style.display = 'block';
        spinner.classList.toggle('spinner0')
    }
    );
}