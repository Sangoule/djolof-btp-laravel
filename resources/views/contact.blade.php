    @include('head')
        <link rel="stylesheet" href="{{ asset('assets/css/contacts2.min.css ')}}" />
    </head>
    <body>
        <header class="header primary-bg" data-page="contacts2">
            @include('header-navbar')
            <div class="header_extension" style="margin-top: -48px; margin-bottom: -150px;">
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
        <main>
            <section class="contact section">
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
                            action="#"
                            class="contact_form contact-form d-flex flex-wrap justify-content-between"
                            method="POST"
                            name="feedbackForm"
                            data-type="feedback"
                        >
                            <input
                                class="contact-form_field contact-form_field--half field required"
                                name="feedbackName"
                                id="feedbackName"
                                type="text"
                                placeholder="Nom"
                            />
                            <input
                                class="contact-form_field contact-form_field--half field required"
                                data-type="tel"
                                type="text"
                                name="feedbackTel"
                                id="feedbackTel"
                                placeholder="telephone"
                            />
                            <input
                                class="contact-form_field field required"
                                data-type="email"
                                type="text"
                                name="feedbackEmail"
                                id="feedbackEmail"
                                placeholder="Email "
                            />
                            <textarea
                                class="contact-form_field field required"
                                data-type="message"
                                name="feedbackMessage"
                                id="feedbackMessage"
                                placeholder="Message"
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
            <div class="contacts_map container-fluid p-0">
                <div id="map"></div>
            </div>
        </main>
        <!-- CONTACTS CONTENT (ALT) END  -->
                @include('footer')

