const form_details = document.querySelector('.room-details__form');

if(form_details !== null) {
    const title = '¡Thank you for your request!';
    const text = 'We have received it correctly. Someone from our Team will get back to you very soon. The Miranda Hotel';
    const icon = 'success';

    form_details.addEventListener('submit', (event) => {
        event.preventDefault();
        
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            showConfirmButton: false,
            timer: 2500
        }).then(() => {
            location.href = 'index.html';
        });
    });
}

const form_contact = document.querySelector('.form__contact');

if(form_contact !== null) {
    const title = 'Your message was sent successfully';
    const text = 'Thanks for your time';
    const icon = 'success';
    form_contact.addEventListener('submit', (event) => {
        event.preventDefault();
        
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            showConfirmButton: false,
            timer: 2500
        }).then(() => {
            location.href = 'index.html';
        });
    });
}