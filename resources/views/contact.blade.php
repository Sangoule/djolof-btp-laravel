    @include('head')
        <link rel="stylesheet" href="{{ asset('assets/css/contacts2.min.css ')}}" />
    </head>
    <body>
               {{-- @include('header') --}}
        <header class="header primary-bg" data-page="contacts2">
                    <div class="header_navbar">
                    <div class="container d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                    <a class="brand d-inline-flex align-items-center justify-content-center" href="/">
                        <img src="{{ asset('assets/img/logo-td.png') }}" width="250" height="250" alt="imglogo">
                    </a>
                    @include('navbar')
                    <button class="hamburger">
                        <span class="line line--short"></span>
                        <span class="line"></span>
                        <span class="line line--short"></span>
                        <span class="line"></span>
                    </button>
                </div>
            </div>

            <div class="header_extension">
                <div class="container">
                    <div class="section_header">
                        <span class="subtitle subtitle--extended">Build relationships</span>
                        <h1 class="title">Contacts</h1>
                        <ul class="breadcrumbs d-flex align-items-center">
                            <li class="breadcrumbs_item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs_item breadcrumbs_item--current">
                                <span>Contacts</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <picture>
                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" data-role="deco" />
                    <img class="lazy plan" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" data-role="deco" />
                </picture>
            </div>
        </header>
        <!-- CONTACTS CONTENT (ALT) START  -->
        <main>
            <section class="contact section">
                <div class="container d-flex flex-wrap justify-content-center justify-content-lg-between align-items-end">
                    <div class="wrapper wrapper--form col-12 col-lg-6">
                        <div class="contact_header section_header">
                            <span class="subtitle">Contact us</span>
                            <h2 class="title">
                                Get
                                <span class="highlight">In Touch</span>
                            </h2>
                            <p class="text">
                                Pellentesque sit amet porttitor eget dolor morbi non arcu. Vitae justo eget magna fermentum iaculis eu non
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
                                placeholder="Full name"
                            />
                            <input
                                class="contact-form_field contact-form_field--half field required"
                                data-type="tel"
                                type="text"
                                name="feedbackTel"
                                id="feedbackTel"
                                placeholder="Phone"
                            />
                            <input
                                class="contact-form_field field required"
                                data-type="email"
                                type="text"
                                name="feedbackEmail"
                                id="feedbackEmail"
                                placeholder="Email Address"
                            />
                            <textarea
                                class="contact-form_field field required"
                                data-type="message"
                                name="feedbackMessage"
                                id="feedbackMessage"
                                placeholder="Message"
                            ></textarea>
                            <button type="submit" class="contact-form_btn btn">Send message</button>
                        </form>
                    </div>
                    <div class="wrapper wrapper--bg col-12 col-lg-5">
                        <ul class="contact_info contact-info">
                            <li class="contact-info_group">
                                <span class="name">Address</span>
                                <span class="content">2047 Cyrus Viaduct East Jadynchester</span>
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

