@include('head')
        <link rel="stylesheet" href="{{ asset('assets/css/services.min.css') }}" />
    </head>
    <body>
        <header class="header primary-bg" data-page="services">
            @include('header-navbar')
            <div class="header_extension" style="margin-top: -48px; margin-bottom: -150px;">
                <div class="container">
                    <div class="section_header">
                        <span class="subtitle subtitle--extended">Construire des communautés</span>
                        <h1 class="title">Services</h1>
                        <ul class="breadcrumbs d-flex align-items-center">
                            <li class="breadcrumbs_item">
                                <a href="/">Accueil</a>
                            </li>
                            <li class="breadcrumbs_item breadcrumbs_item--current">
                                <span>Services</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <picture>
                    <source data-srcset="{{ asset('assets/img/img-plan.jpeg') }}" srcset="{{ asset('assets/img/img-plan.jpeg') }}" type="image/webp" data-role="deco" />
                    <img class="lazy plan" data-src="{{ asset('assets/img/img-plan.jpeg') }}" src="{{ asset('assets/img/img-plan.jpeg') }}" alt="media" data-role="deco" style="width: 904px;" />
                </picture>
            </div>
        </header>
        <!-- SERVICES CONTENT START -->
        <main>
            <section class="services section">
                <div class="container">
                    <div class="services_header section_header">
                        <span class="subtitle">Ce que nous faisons</span>
                        <h2 class="title" data-aos="fade-right" data-aos-duration="500">Services</h2>
                    </div>
                    <ul class="services_list row g-0">
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="1">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">01</span>
                                <h4 class="title">Etude et réalisation de projet</h4>
                                <p class="description">
                                    L'étude et la réalisation d'un projet impliquent plusieurs étapes clés, notamment la définition des objectifs et des besoins, la planification, la mise en œuvre et le suivi de l'avancement. Il est important de bien comprendre les exigences du projet et de les communiquer efficacement aux différentes parties prenantes pour garantir un résultat final réussi. La gestion de projet est un domaine clé pour la réussite de tout projet.
                                </p>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="2">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">02</span>
                                <h4 class="title">Construction et rénovation</h4>
                                <p class="description">
                                    La construction et la rénovation de bâtiments impliquent plusieurs étapes clés, notamment la planification, la conception, la construction et la finition. La conception, quant à elle, permet de créer les plans et les devis pour le bâtiment. La construction implique la mise en place des fondations, la pose des murs, des toits et des fenêtres, ainsi que l'installation des systèmes électriques, de plomberie et de climatisation. La finition comprend la pose des revêtements de sol, la peinture, l'installation de la cuisine et de la salle de bains.
                                </p>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="3">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">03</span>
                                <h4 class="title">Electricité - Plomberie - Assainissement</h4>
                                <p class="description">
                                    Sont des domaines clés pour la construction et la rénovation de bâtiments. L'électricité est responsable de fournir l'énergie électrique nécessaire aux bâtiments pour alimenter les appareils électroniques .
                                    La plomberie est responsable de la distribution de l'eau potable et de l'évacuation des eaux usées.
                                    L'assainissement est responsable de la collecte, du traitement et de la réutilisation ou de l'élimination des eaux usées.
                                    Il est essentiel de choisir des professionnels qualifiés pour garantir la qualité .
                                </p>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="4">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">04</span>
                                <h4 class="title">Vente de matériel de construction</h4>
                                <p class="description">
                                    La vente de matériel de construction implique la fourniture de produits et d'équipements nécessaires pour la construction et la rénovation de bâtiments. Ces produits peuvent inclure des matériaux de construction tels que des briques, du bois, de la pierre, des métaux, des plastiques, des plâtres, des peintures, des revêtements de sol, des tuiles, des carrelages, des équipements électriques et de plomberie, des outils manuels et électriques, des équipements de levage et de transport, etc.
                                </p>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="5">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">05</span>
                                <h4 class="title">Peinture</h4>
                                <p class="description">
                                    La peinture est un revêtement utilisé pour donner de la couleur et de l'esthétique à un surface, ainsi qu'une protection contre les intempéries, l'humidité et les rayures. Il existe différents types de peintures, notamment les peintures à l'huile, les peintures à l'eau, les peintures acryliques, les peintures époxy, les peintures à base de solvant, etc. Chacun de ces types de peintures a ses propres caractéristiques et ses avantages pour différents types d'utilisations.
                                </p>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="6">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">06</span>
                                <h4 class="title">Tous activités de gros oeuvres et second oeuvre</h4>
                                <p class="description">
                                    Les activités de gros œuvre comprennent les étapes de la construction du bâtiment telles que la fondation, les murs porteurs, les toits, les portes et les escaliers. Ces activités nécessitent des matériaux de construction.
                                    Les activités de second œuvre comprennent les étapes de finition telles que la pose des revêtements de sol, la peinture, l'électricité, la plomberie et l'assainissement. Ces activités nécessitent des matériaux de finition tels que les carrelages, les tuiles, les équipements électriques et de plomberie.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="numbers primary-bg section">
                <div class="container">
                    <div class="row g-3 g-lg-4 justify-content-between align-items-end">
                        <div class="numbers_header section_header col-lg-6 col-xl-5">
                            <span class="subtitle">What we do</span>
                            <h2 class="title">
                                Building The Future on a
                                <span class="highlight">Foundation of Excellence</span>
                            </h2>
                            <p class="text">
                                Risus commodo viverra maecenas accumsan lacus vel. Semper viverra nam libero justo laoreet sit amet cursus.
                                Commodo ullamcorper a lacus vestibulum sed arcu non odio euismod. Adipiscing elit duis tristique
                                sollicitudin nibh sit
                            </p>
                        </div>
                        <ul class="numbers_list d-flex flex-wrap justify-content-center col-lg-6 col-xl-6">
                            <li class="numbers_list-item d-flex flex-column align-items-start col-12 col-sm-6" data-order="1">
                                <h2 class="countNum number" data-suffix="%" data-value="99">0</h2>
                                <span class="label">Building Control <br />Approval Rate</span>
                            </li>
                            <li class="numbers_list-item d-flex flex-column align-items-start col-12 col-sm-6" data-order="2">
                                <h2 class="countNum number" data-suffix="+" data-value="320">0</h2>
                                <span class="label">Active Projects in <br />Construction Management </span>
                            </li>
                            <li class="numbers_list-item d-flex flex-column align-items-start col-12 col-sm-6" data-order="3">
                                <h2 class="countNum number" data-suffix="+" data-value="200">0</h2>
                                <span class="label">Completed Projects <br />Every Year</span>
                            </li>
                            <li class="numbers_list-item d-flex flex-column align-items-start col-12 col-sm-6" data-order="4">
                                <h2 class="countNum number" data-separator="." data-value="4253">0</h2>
                                <span class="label">Million euros Turnover <br />in 2020</span>
                            </li>
                        </ul>
                        <div class="numbers_video col-12" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
                            <video width="100%" autoplay muted>
                                <source src="{{ asset('assets/img/14.mp4') }}" data-srcset="{{ asset('assets/img/14.mp4') }}" srcset="{{ asset('assets/img/14.mp4') }}" alt="video" />
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <section class="advantages section-nopb">
                <div class="container d-flex flex-wrap flex-xl-nowrap align-items-end align-items-xl-center justify-content-center">
                    <div class="advantages_header section_header col-xl-auto">
                        <span class="subtitle" data-aos="fade-down">Le choix de votre temps est le nôtre</span>
                        <h2 class="title" data-aos="fade-right">
                            Résoudre les problèmes avec l'aide
                            <span class="highlight">d'experts</span>
                        </h2>
                        <p class="text" data-aos="fade-up" data-aos-delay="50">
                            <span class="highlight">DJOLOF-BTP</span>, entreprise générale du bâtiment, met son savoir-faire et son expertise pour vous accompagner tout au long de vos projets de construction.
                        </p>
                        <ul class="advantages_header-list">
                            <li class="advantages_header-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                                <svg
                                    class="advantages-icon"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 40 40"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip01)">
                                        <path
                                            d="M36.4062 6.5625L21.4062 0.3125C20.9375 0.15625 20.4688 0.078125 20 0.078125C19.4531 0.078125 18.9844 0.15625 18.5156 0.3125L3.51562 6.5625C2.10938 7.1875 1.25 8.51562 1.25 10C1.25 25.5469 10.1562 36.25 18.5156 39.7656C19.4531 40.1562 20.4688 40.1562 21.4062 39.7656C28.125 36.9531 38.75 27.3438 38.75 10C38.75 8.51562 37.8125 7.1875 36.4062 6.5625ZM20.4688 37.4219C20.1562 37.5781 19.7656 37.5781 19.4531 37.4219C11.875 34.375 3.75 23.75 3.75 10C3.75 9.53125 3.98438 9.0625 4.45312 8.90625L19.4531 2.65625C19.7656 2.5 20.1562 2.5 20.4688 2.65625L35.4688 8.90625C35.9375 9.0625 36.25 9.53125 36.1719 10C36.25 23.75 28.125 34.375 20.4688 37.4219ZM31.0938 12.0312C30.7031 11.7188 30.1562 11.7188 29.7656 12.0312L17.0312 24.6875L11.6406 19.2969C11.25 18.9062 10.625 18.9062 10.3125 19.2969L9.60938 19.9219C9.21875 20.3125 9.21875 20.8594 9.60938 21.25L16.3281 28.0469C16.7188 28.3594 17.2656 28.3594 17.6562 28.0469L31.7188 14.0625C32.1094 13.6719 32.1094 13.125 31.7188 12.7344L31.0938 12.0312Z"
                                            fill="#0DA574"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip01">
                                            <rect width="40" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span class="label"> Projets achevés avec succès  </span>
                            </li>
                            <li class="advantages_header-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                                <svg
                                    class="advantages-icon"
                                    width="41"
                                    height="40"
                                    viewBox="0 0 41 40"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip02)">
                                        <path
                                            d="M39.4688 28.8281L29.8594 19.2188L33.7656 15.3125L39.0781 10C40.5625 8.51562 40.5625 6.17188 39.0781 4.6875L35.5625 1.17188C34.8594 0.390625 33.9219 0 32.9062 0C31.9688 0 31.0312 0.390625 30.25 1.17188L24.9375 6.48438L21.0312 10.3906L11.4219 0.78125C10.9531 0.3125 10.3281 0 9.70312 0C9.07812 0 8.45312 0.3125 7.98438 0.78125L0.953125 7.73438C-0.0625 8.75 -0.0625 10.3125 0.953125 11.25L10.5625 20.8594L1.73438 29.6875L0.25 38.125C0.015625 39.2969 1.10938 40.2344 2.125 40L10.5625 38.5156L19.3906 29.6875L29 39.2969C29.3906 39.7656 30.0156 40 30.7188 40C31.3438 40 31.9688 39.7656 32.4375 39.2969L39.4688 32.2656C40.4844 31.3281 40.4844 29.7656 39.4688 28.8281ZM32.0469 2.89062C32.3594 2.57812 33.4531 2.57812 33.8438 2.89062L37.3594 6.40625C37.8281 6.95312 37.8281 7.73438 37.3594 8.20312L33.7656 11.7969L28.4531 6.48438L32.0469 2.89062ZM2.67188 9.53125L9.70312 2.57812L14.0781 6.875L11.0312 10C10.7969 10.2344 10.7969 10.625 11.0312 10.8594L11.8906 11.7188C12.125 11.9531 12.5156 11.9531 12.75 11.7188L15.875 8.67188L19.3125 12.1094L12.2812 19.1406L2.67188 9.53125ZM9.3125 36.25L2.90625 37.3438L4 30.9375L26.6562 8.28125L31.9688 13.5938L9.3125 36.25ZM30.7188 37.5781L21.1094 27.9688L28.1406 20.9375L31.5781 24.375L28.5312 27.5C28.2969 27.7344 28.2969 28.125 28.5312 28.3594L29.3906 29.2188C29.625 29.4531 30.0156 29.4531 30.25 29.2188L33.375 26.1719L37.75 30.5469L30.7188 37.5781Z"
                                            fill="#0DA574"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip02">
                                            <rect width="40" height="40" fill="white" transform="translate(0.25)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span class="label"> La simplicité dans la conception avec l'esprit pratique </span>
                            </li>
                            <li class="advantages_header-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <svg
                                    class="advantages-icon"
                                    width="41"
                                    height="40"
                                    viewBox="0 0 41 40"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip04)">
                                        <path
                                            d="M37.75 27.5V25C37.75 17.1094 32.4375 10.4688 25.25 8.35938V7.5C25.25 6.17188 24.0781 5 22.75 5H17.75C16.3438 5 15.25 6.17188 15.25 7.5V8.35938C7.98438 10.4688 2.75 17.1094 2.75 25V27.5C1.34375 27.5 0.25 28.6719 0.25 30V32.5C0.25 33.9062 1.34375 35 2.75 35H37.75C39.0781 35 40.25 33.9062 40.25 32.5V30C40.25 28.6719 39.0781 27.5 37.75 27.5ZM5.25 25C5.25 18.9062 9 13.6719 14.3125 11.4062L16.3438 19.5312C16.4219 19.8438 16.6562 20 17.0469 20C17.3594 20 17.6719 19.6875 17.75 19.2969V7.5H22.75V19.2969C22.75 19.6875 23.0625 20 23.375 20C23.7656 20 24 19.8438 24.0781 19.5312L26.1094 11.4062C31.4219 13.6719 35.25 18.9062 35.25 25V27.5H5.25V25ZM37.75 32.5H2.75V30H37.75V32.5Z"
                                            fill="#0DA574"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip04">
                                            <rect width="40" height="40" fill="white" transform="translate(0.25)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span class="label"> Niveau élevé d'approbation du contrôle de la construction </span>
                            </li>
                        </ul>
                    </div>
                    <div class="advantages_img col-xl-auto" data-aos="zoom-in" data-aos-duration="600">
                        <picture>
                            <source
                                data-srcset="{{ asset('assets/img/modele-maison-baobab3d.jpg') }}"
                                srcset="{{ asset('assets/img/modele-maison-baobab3d.jpg') }}"
                                type="image/webp"
                            />
                            <img
                                class="advantages_img-img"
                                height="667px"
                                data-src="{{ asset('assets/img/modele-maison-baobab3d.jpg') }}"
                                src="{{ asset('assets/img/modele-maison-baobab3d.jpg') }}"
                                alt="media"
                            />
                        </picture>
                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container-fluid p-0">
                    <ul class="gallery_list d-flex flex-wrap">
                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="{{ asset('assets/img/11.jpeg') }}"
                                data-caption="Architecture Moderne"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/11.jpeg') }}"
                                            srcset="{{ asset('assets/img/11.jpeg') }}"
                                            type="image/png"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{ asset('assets/img/11.jpeg') }}"
                                            src="{{ asset('assets/img/11.jpeg') }}"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Notre galerie</span>
                                    <h4 class="title">Architecture Moderne</h4>
                                    <span class="label">Devanture</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="{{ asset('assets/img/13.jpeg') }}"
                                data-caption="Modélisation"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/13.jpeg') }}"
                                            srcset="{{ asset('assets/img/13.jpeg') }}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{ asset('assets/img/13.jpeg') }}"
                                            src="{{ asset('assets/img/13.jpeg') }}"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Notre galerie</span>
                                    <h4 class="title">Rénovation de la construction de Fresh Concept</h4>
                                    <span class="label">Modélisation</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="{{ asset('assets/img/10.jpeg') }}"
                                data-caption="Parking"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/10.jpeg') }}"
                                            srcset="{{ asset('assets/img/10.jpeg') }}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{ asset('assets/img/10.jpeg') }}"
                                            src="{{ asset('assets/img/10.jpeg') }}"
                                            alt="Parking"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Notre galerie</span>
                                    <h4 class="title">Parking</h4>
                                    <span class="label">Modélisation</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="{{ asset('assets/img/2.jpeg') }}"
                                data-caption="Architecture Moderne"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/2.jpeg') }}"
                                            srcset="{{ asset('assets/img/2.jpeg') }}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{ asset('assets/img/2.jpeg') }}"
                                            src="{{ asset('assets/img/2.jpeg') }}"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Notre galerie</span>
                                    <h4 class="title">Architecture Moderne</h4>
                                    <span class="label">Architecture Moderne</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </section>
        </main>
        <!-- SERVICES CONTENT END -->
@include('footer')