    @include('head')
        <link rel="stylesheet" href="{{ asset('assets/css/contacts2.min.css ')}}" />
    </head>
    <body>
        <header class="header primary-bg" data-page="contacts2">
            @include('header-navbar')
            <div class="header_extension">
                <div class="container">
                    <div class="section_header">
                        <span class="subtitle subtitle--extended">Établir des relations</span>
                        <h1 class="title">Contacts</h1>
                        <ul class="breadcrumbs d-flex align-items-center">
                            <li class="breadcrumbs_item">
                                <a href="/">Accueil</a>
                            </li>
                            <li class="breadcrumbs_item breadcrumbs_item--current">
                                <span>Contacts</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <picture>
                    <source data-srcset="{{ asset('assets/img/imgplancontact.avif') }}" srcset="{{ asset('assets/img/imgplancontact.avif') }}" type="image/webp" data-role="deco" />
                    <img class="lazy plan" data-src="{{ asset('assets/img/imgplancontact.avif') }}" src="{{ asset('assets/img/imgplancontact.avif') }}" alt="media" data-role="deco" style="width: 827px;" />
                </picture>
            </div>
        </header>
        <!-- CONTACTS CONTENT (ALT) START  -->
        <main >
            <section class="contact section" style="margin-bottom: -80px; margin-top: -40px;">
                <div class="container d-flex flex-wrap justify-content-center justify-content-lg-between align-items-end">
                    <div class="wrapper wrapper--form col-12 col-lg-6">
                        <div class="contact_header section_header">
                            <span class="subtitle"></span>
                            <h2 class="title">
                                N'hésitez pas à nous <span class="highlight">Contacter </span>
                            </h2>
                            <p class="text">
                                Vous avez un projet de construction, d’acquisition d’une parcelle, un projet immobilier ; n’hésitez pas à nous contacter. Notre équipe de professionnel reste à votre disposition. Tel: +221 77.000.00.00 / +33.00.00.00.00
                            </p>
                        </div>
                        
                        <form
                            action="{{ route('contactez-nous') }}"
                            class="contact_form contact-form d-flex flex-wrap justify-content-between"
                            method="post"
                            name="feedbackForm"
                            data-type="feedback"
                        >
                        @csrf
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                            <input
                                class="contact-form_field contact-form_field--half field required"
                                name="name"
                                id="feedbackName"
                                type="text"
                                placeholder="Nom"
                                value="{{ old('name') }}"
                            />
                            <input
                                class="contact-form_field field required"
                                data-type="email"
                                type="email"
                                name="email"
                                id="feedbackEmail"
                                placeholder="Email "
                                value="{{ old('email') }}"
                            />
                            <input
                                class="contact-form_field  field required"
                                data-type="text"
                                type="text"
                                name="objet"
                                id="feedbackTel"
                                placeholder="Objet"
                                value="{{ old('objet') }}"
                            />
                            <textarea
                                class="contact-form_field field required"
                                data-type="message"
                                name="message"
                                id="feedbackMessage"
                                placeholder="Message"
                                value="{{ old('message') }}"
                            ></textarea>
                            <button type="submit" class="contact-form_btn btn">Envoyer message</button>
                        </form>


                    </div>
                    <div class="wrapper wrapper--bg col-12 col-lg-5">
                        <ul class="contact_info contact-info">
                            <li class="contact-info_group">
                                <span class="name">Address</span>
                                <span class="content"> HAY LAAYOUNE ANGLE RUE AIT YAFLMANE FIDA N:341 2EME ETAGE CASABLANCA </span>
                            </li>
                            <li class="contact-info_group">
                                <span class="name">Email</span>
                                <span class="content d-inline-flex flex-column">
                                    <a class="link" href="mailto:example.com">info@construct.com</a>
                                    <a class="link" href="mailto:example.com">support@construct.com</a>
                                </span>
                            </li>
                            <li class="contact-info_group">
                                <span class="name">Phone</span>
                                <span class="content d-inline-flex flex-column">
                                    <a class="link" href="tel:+13136453395">1 - 313 - 645 - 3395</a>
                                    <a class="link" href="tel:+14699702609">1 - 469 - 970 - 2609</a>
                                </span>
                            </li>
                        </ul>
                        <ul class="socials d-flex align-items-center justify-content-start">
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="contacts_map container-fluid p-0" style="margin-bottom: 154px; height: 350px;">
                <iframe
                style="width: 100%; height: 500px; filter: invert(100%);"
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1661.944753483859!2d-7.56911075!3d33.582218000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd20b642ec99%3A0xbb6a3fb48edb9791!2sQuartier%20Laayoune%2C%20Casablanca%2C%20Maroc!5e0!3m2!1sfr!2ssn!4v1674931980107!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
        <!-- CONTACTS CONTENT (ALT) END  -->
@include('footer')

