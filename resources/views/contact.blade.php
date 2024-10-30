@extends('layouts.app')
@section('title','Contact')
@section('content')
    <!-- SECTION CONTACT -->
    <section class="contact">

        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">New Details</p>
        </div>

        <div class="roomsPage__select ">
            <p class="roomsPage__select__container font--archivo">Home | Blog</p>
        </div>

        <div class="contact__info">
            <div>
                <div class="contact__info__card">
                    <img src="{{ asset('assets/img/adressContact.svg') }}" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Hotel Address</p>
                        <p class="contact__info__card__titles__subtitle font--roboto">19/A, Cirikon City hall Tower New York, NYC</p>
                    </div>
                </div>
                <img class="contact__info__0" src="{{ asset('assets/img/01Contact.svg') }}" alt="">
            </div>

            <div class="contact__info__2">
                <div class="contact__info__card">
                    <img src="{{ asset('assets/img/phoneContact.svg') }}" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Phone Number</p>
                        <p class="contact__info__card__titles__subtitle font--roboto">662 321 800</p>
                    </div>
                </div>
                <img class="contact__info__0" src="{{ asset('assets/img/02Contact.svg') }}" alt="">
            </div>

            <div class="contact__info__3">
                <div class="contact__info__card">
                    <img src="{{ asset('assets/img/emailContact.svg') }}" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Email</p>
                        <p class="contact__info__card__titles__subtitle font--roboto">luciamacho00@gmail.com</p>
                    </div>
                </div>
                <img class="contact__info__0" src="{{ asset('assets/img/03Contact.svg') }}" alt="">
            </div>
        </div>

        <div class="contact__map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3037.1328997545156!2d-3.7146959999999996!3d40.428056000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1718877692905!5m2!1ses!2ses"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="information__map map">
            </iframe>
        </div>

        <form class="contact__form" action="{{ route('contact.store') }}" method="POST">
    @csrf 
    <div class="contact__form__group">
        <div>
            <div class="contact__form__container">
                <img class="contact__form__container__img" src="{{ asset('assets/img/personContact.svg') }}" alt="person" />
                <input class="contact__form__container__input font--roboto" type="text" name="client__name" placeholder="Your Full Name" required>
            </div>

            <div class="contact__form__container">
                <img class="contact__form__container__img" src="{{ asset('assets/img/phone2Contact.svg') }}" alt="phone" />
                <input class="contact__form__container__input" type="text" name="client_phone" placeholder="Add phone number" required>
            </div>
        </div>

        <div>
            <div class="contact__form__container">
                <img class="contact__form__container__img" src="{{ asset('assets/img/mail2Contact.svg') }}" alt="email" />
                <input class="contact__form__container__input" type="email" name="client_email" placeholder="Enter email address" required>
            </div>

            <div class="contact__form__container">
                <img class="contact__form__container__img" src="{{ asset('assets/img/bookContact.svg') }}" alt="subject" />
                <input class="contact__form__container__input" type="text" name="subject" placeholder="Enter subject" required>
            </div>
        </div>
    </div>

    <div class="contact__form__container">
        <img class="contact__form__container__img" src="{{ asset('assets/img/pencilContact.svg') }}" alt="edit" />
        <textarea class="contact__form__container__input contact__form__container__input--textarea" name="comments" placeholder="Enter message" required></textarea>
    </div>

    <div class="contact__form__btn">
        <button type="submit" class="button--color button--color--width">SEND</button>
    </div>
</form>

    </section>
    <!-- END SECTION CONTACT -->
@endsection

<script>
    @if(session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000, 
            close: true,   
            gravity: "top", 
            position: "right", 
            backgroundColor: "#4CAF50", 
        }).showToast();
    @endif

    @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "#f44336", 
        }).showToast();
    @endif
</script>