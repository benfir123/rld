function sendEmail () {

    const spinner = document.getElementById('submit-spinner')
    spinner.classList.toggle('spinner0')
    const modal = document.getElementById("myModal");

    const carYear = document.getElementById('vehicle-year')
    const carMake = document.getElementById('vehicle-make')
    const carMileage = document.getElementById('vehicle-mileage')
    const appointmentDate = document.getElementById('appointment-date')
    const appointmentTimeFrame = document.getElementById('time-frame')
    const servicesListChecked = document.querySelectorAll('.type-checkbox')
    const services = [];
    const servicesNeeded = servicesListChecked.forEach(service => {
        if (service.value == '1') {
            services.push(service.name)
        }
    })
    const custName = document.getElementById('name-input')
    const custEmail = document.getElementById('email-input')
    const custPhone = document.getElementById('phone-input')
    const custMessage = document.getElementById('message-input')

    Email.send({
        SecureToken : "f6087ed3-1ac2-4a1f-b0c2-b490914d163e",
        To : ['benvidshot@gmail.com', 'tanadon.keawnakorn@gmail.com'],
        From : "benvidshot@gmail.com",
        Subject : "RLD - มีนัดหมายใหม่จากลูกค้า",
        Body : "รายละเอียดรถยนต์<br>" +
                "ปี: " + carYear.value +
                "<br>ยี่ห้อ: " + carMake.value +
                "<br>เลขไมล์: " + carMileage.value +
                "<br>วันที่สะดวก: " + appointmentDate.value +
                "<br>เวลาที่สะดวก: " + appointmentTimeFrame.value +
                "<br>บริการที่ต้องการ: " + services +
                "<br>ข้อมูลลูกค้า" +
                "<br>ชื่อ: " + custName.value +
                "<br>อีเมล: " + custEmail.value +
                "<br>เบอร์โทรศัพท์: " + custPhone.value +
                "<br>ข้อความ: " + custMessage.value
    }).then( message => {
        console.log(message)
        modal.style.display = 'block';
        spinner.classList.toggle('spinner0')
    }
    );
}