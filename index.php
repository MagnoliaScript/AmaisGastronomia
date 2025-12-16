<?php include('tpl/include/header.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<body>
    <main>
        <!-- Banner / Carrossel -->
        <section id="banner" class="position-relative">
            <div class="swiper bannerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-image-container">
                            <img src="./tpl/img/banner.jpg"
                                class="img-fluid w-100"
                                alt="Evento Corporativo"
                                loading="lazy">
                            <div class="banner-overlay"></div>
                        </div>
                        <div class="banner-content">
                            <div class="container">
                                <h1 class="banner-title">Catering de Excelência</h1>
                                <p class="banner-subtitle">
                                    Soluções completas para seus eventos corporativos com qualidade e sofisticação
                                </p>
                                <div class="banner-cta">
                                    <a href="#contact" class="btn btn-primary btn-lg px-5 py-3 me-3">
                                        Solicite um Orçamento
                                    </a>
                                    <a href="#services" class="btn btn-outline-light btn-lg px-5 py-3">
                                        Nossos Serviços
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="banner-image-container">
                            <img src="./tpl/img/banner-2.jpg"
                                class="img-fluid w-100"
                                alt="Coffee Break"
                                loading="lazy">
                            <div class="banner-overlay"></div>
                        </div>
                        <div class="banner-content">
                            <div class="container">
                                <h1 class="banner-title">Experiências Gastronômicas</h1>
                                <p class="banner-subtitle">
                                    Cardápios personalizados para impressionar seus convidados e clientes
                                </p>
                                <div class="banner-cta">
                                    <a href="#menu" class="btn btn-primary btn-lg px-5 py-3">
                                        Conheça Nosso Menu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- Sobre -->
        <section id="about-us" class="py-5 py-lg-7 bg-light">
            <div class="container fade-in">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="about-image-container position-relative">
                            <img src="./tpl/img/imagem-sobre-nos.jpg"
                                class="img-fluid rounded-3 shadow-lg"
                                alt="Equipe A+"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-5">
                            <span class="text-uppercase text-primary fw-bold">Sobre Nós</span>
                            <h2 class="display-5 fw-bold mb-4">A+ Gastronomia e Eventos</h2>
                            <p class="lead text-secondary mb-4">Especializados em serviços de alimentação para empresas com excelência e criatividade.</p>

                            <div class="mb-4">
                                <p>Na A+ Gastronomia, transformamos eventos corporativos em experiências memoráveis através da gastronomia. Nossa equipe de chefs especializados e profissionais de eventos trabalha para oferecer soluções completas e personalizadas.</p>

                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Coffee breaks criativos e sofisticados</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Buffets completos para almoços corporativos</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Finger food e coquetel para eventos especiais</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Kits lanches práticos e deliciosos</li>
                                </ul>
                            </div>

                            <div class="row g-3 stats-row">
                                <div class="col-6 col-md-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm text-center h-100">
                                        <h3 class="text-primary mb-0 counter" data-target="3700">0</h3>
                                        <p class="mb-0">Eventos realizados</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm text-center h-100">
                                        <h3 class="text-primary mb-0 counter" data-target="500">0</h3>
                                        <p class="mb-0">Clientes satisfeitos</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm text-center h-100">
                                        <h3 class="text-primary mb-0 counter" data-target="50">0</h3>
                                        <p class="mb-0">Colaboradores</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm text-center h-100">
                                        <h3 class="text-primary mb-0 counter" data-target="100">0</h3>
                                        <p class="mb-0">Opções no cardápio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Serviços / Menu -->
        <section id="services" class="py-5 py-lg-7">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Nossos Serviços</span>
                    <h2 class="display-5 fw-bold mb-3">Soluções Completas para Seu Evento</h2>
                    <p class="lead text-white mx-auto" style="max-width: 700px;">Oferecemos serviços de alimentação para todos os tipos de eventos corporativos, desde pequenas reuniões até grandes convenções.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card h-100 border-0 shadow-sm overflow-hidden">
                            <div class="service-card-image">
                                <img src="./tpl/img/coffee-break.jpg"
                                    class="card-img-top"
                                    alt="Coffee Break"
                                    loading="lazy">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded p-3 me-3">
                                        <i class="fas fa-coffee fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Coffee Break Premium</h5>
                                </div>
                                <p class="card-text">Serviço completo de coffee break com opções de cafés especiais, chás, sucos naturais e uma variedade de salgados e doces finos.</p>
                                <ul class="list-unstyled mb-3">
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Opções gourmet</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Produtos artesanais</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Apresentação impecável</li>
                                </ul>
                                <a href="#contact" class="btn btn-outline-primary w-100 mt-auto">Solicitar Orçamento</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card h-100 border-0 shadow-sm overflow-hidden">
                            <div class="service-card-image">
                                <img src="./tpl/img/almoco-corporativo.jpg"
                                    class="card-img-top"
                                    alt="Almoço Corporativo"
                                    loading="lazy">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded p-3 me-3">
                                        <i class="fas fa-utensils fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Almoço Corporativo</h5>
                                </div>
                                <p class="card-text">Buffet completo para almoços corporativos com cardápios variados, incluindo opções para dietas especiais e restrições alimentares.</p>
                                <ul class="list-unstyled mb-3">
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Cardápios personalizados</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Opções saudáveis</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Serviço eficiente</li>
                                </ul>
                                <a href="#contact" class="btn btn-outline-primary w-100 mt-auto">Solicitar Orçamento</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card h-100 border-0 shadow-sm overflow-hidden">
                            <div class="service-card-image">
                                <img src="./tpl/img/finger-food.jpg"
                                    class="card-img-top"
                                    alt="Coquetel"
                                    loading="lazy">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded p-3 me-3">
                                        <i class="fas fa-cocktail fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Coquetel & Finger Food</h5>
                                </div>
                                <p class="card-text">Serviço sofisticado para eventos de networking, lançamentos e confraternizações com opções criativas e apresentação elegante.</p>
                                <ul class="list-unstyled mb-3">
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Canapés criativos</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Bebidas especiais</li>
                                    <li class="mb-1"><i class="fas fa-check text-primary me-2"></i> Equipe treinada</li>
                                </ul>
                                <a href="#contact" class="btn btn-outline-primary w-100 mt-auto">Solicitar Orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#contact" class="btn btn-primary btn-lg px-5 py-3">
                        Veja Mais
                    </a>
                </div>
            </div>
        </section>


        <!-- Processo de Trabalho -->
        <section id="work-process" class="py-5 py-lg-7 bg-light">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Como Trabalhamos</span>
                    <h2 class="display-5 fw-bold mb-3">Nosso Processo</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 700px;">Um fluxo de trabalho eficiente que garante a excelência em cada etapa do seu evento.</p>
                </div>

                <div class="row g-4 process-steps">
                    <div class="col-md-6 col-lg-3">
                        <div class="process-step text-center p-4 h-100">
                            <div class="process-icon bg-primary text-white rounded-circle mx-auto mb-4">
                                <span class="process-number">1</span>
                                <i class="fas fa-calendar-check fs-4"></i>
                            </div>
                            <h5 class="mb-3">Briefing</h5>
                            <p>Entendemos suas necessidades, objetivos e expectativas para o evento.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="process-step text-center p-4 h-100">
                            <div class="process-icon bg-primary text-white rounded-circle mx-auto mb-4">
                                <span class="process-number">2</span>
                                <i class="fas fa-clipboard-list fs-4"></i>
                            </div>
                            <h5 class="mb-3">Proposta</h5>
                            <p>Desenvolvemos um cardápio personalizado e enviamos uma proposta detalhada.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="process-step text-center p-4 h-100">
                            <div class="process-icon bg-primary text-white rounded-circle mx-auto mb-4">
                                <span class="process-number">3</span>
                                <i class="fas fa-utensils fs-4"></i>
                            </div>
                            <h5 class="mb-3">Execução</h5>
                            <p>Nossa equipe especializada prepara e entrega tudo com excelência e pontualidade.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="process-step text-center p-4 h-100">
                            <div class="process-icon bg-primary text-white rounded-circle mx-auto mb-4">
                                <span class="process-number">4</span>
                                <i class="fas fa-star fs-4"></i>
                            </div>
                            <h5 class="mb-3">Feedback</h5>
                            <p>Avaliamos o evento e coletamos seu feedback para melhorias contínuas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Galeria -->
        <section id="gallery" class="py-5 py-lg-7">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Nossos Trabalhos</span>
                    <h2 class="display-5 fw-bold mb-3">Galeria de Eventos</h2>
                    <p class="lead text-white mx-auto" style="max-width: 700px;">Alguns momentos especiais que criamos para nossos clientes.</p>
                </div>

                <div class="row g-3 gallery-grid">
                    <div class="col-md-4 col-6 gallery-item">
                        <a href="./tpl/img/evento-1.webp" class="gallery-link" data-fslightbox="gallery">
                            <img src="./tpl/img/evento-1.webp"
                                class="img-fluid rounded-3"
                                alt="Coffee Break"
                                loading="lazy">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-6 gallery-item">
                        <a href="./tpl/img/evento-2.webp" class="gallery-link" data-fslightbox="gallery">
                            <img src="./tpl/img/evento-2.webp"
                                class="img-fluid rounded-3"
                                alt="Almoço Corporativo"
                                loading="lazy">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-6 gallery-item">
                        <a href="./tpl/img/evento-3.webp" class="gallery-link" data-fslightbox="gallery">
                            <img src="./tpl/img/evento-3.webp"
                                class="img-fluid rounded-3"
                                alt="Evento de Networking"
                                loading="lazy">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary btn-lg px-5 py-3">
                        Ver Mais Eventos
                    </a>
                </div>
            </div>
        </section>

        <!-- Vantagens -->
        <section id="advantages" class="py-5 py-lg-7 position-relative bg-light">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Por que nos escolher</span>
                    <h2 class="display-5 fw-bold mb-3">Vantagens Exclusivas</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 700px;">Diferenciais que fazem da A+ Gastronomia a melhor escolha para seu evento corporativo</p>
                </div>

                <div class="row g-4 advantages-grid">
                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-card h-100 p-4 bg-white rounded-3 shadow-sm">
                            <div class="advantage-icon bg-primary text-white rounded-3 p-3 mb-4 mx-auto">
                                <i class="fas fa-building fs-4"></i>

                            </div>
                            <h4 class="text-center mb-3">Estrutura Própria</h4>
                            <p class="text-center text-muted mb-0">Nossa indústria de alimentos própria garante qualidade, padronização e total segurança alimentar em todos os eventos.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-card h-100 p-4 bg-white rounded-3 shadow-sm">
                            <div class="advantage-icon bg-primary text-white rounded-3 p-3 mb-4 mx-auto">
                                <i class="fas fa-clock fs-4"></i>
                            </div>
                            <h4 class="text-center mb-3">Pontualidade Garantida</h4>
                            <p class="text-center text-muted mb-0">Logística própria e equipe treinada para cumprir com rigor todos os horários combinados.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-card h-100 p-4 bg-white rounded-3 shadow-sm">
                            <div class="advantage-icon bg-primary text-white rounded-3 p-3 mb-4 mx-auto">
                                <i class="fas fa-egg fs-4"></i>
                            </div>
                            <h4 class="text-center mb-3">Ingredientes Premium</h4>
                            <p class="text-center text-muted mb-0">Selecionamos os melhores fornecedores e ingredientes para oferecer uma experiência gastronômica única.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-card h-100 p-4 bg-white rounded-3 shadow-sm">
                            <div class="advantage-icon bg-primary text-white rounded-3 p-3 mb-4 mx-auto">
                                <i class="fas fa-users fs-4"></i>

                            </div>
                            <h4 class="text-center mb-3">Equipe Especializada</h4>
                            <p class="text-center text-muted mb-0">Profissionais treinados e uniformizados para atender com excelência e discrição seu evento.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-highlight h-100 p-4 bg-primary text-white rounded-3 shadow position-relative overflow-hidden">
                            <div class="position-relative z-index-1 text-center d-flex flex-column justify-content-center h-100">
                                <h3 class="mb-3">Excelência em Cada Detalhe</h3>
                                <p class="mb-4">Mais de 15 anos transformando eventos corporativos em experiências memoráveis através da gastronomia.</p>
                                <a href="#contact" class="btn btn-light btn-lg mx-auto">Solicite um Orçamento</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="advantage-card h-100 p-4 bg-white rounded-3 shadow-sm">
                            <div class="advantage-icon bg-primary text-white rounded-3 p-3 mb-4 mx-auto">
                                <i class="fas fa-leaf fs-4"></i>

                            </div>
                            <h4 class="text-center mb-3">Sustentabilidade</h4>
                            <p class="text-center text-muted mb-0">Preocupação ambiental com embalagens ecológicas e redução de desperdício de alimentos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Avaliações / Ratings -->
        <section id="ratings" class="py-5 bg-white">
            <div class="container text-center fade-in">
                <span class="text-uppercase text-primary fw-bold">O que nossos clientes dizem</span>
                <h2 class="display-5 fw-bold mb-3">Nossas Avaliações</h2>
                <p class="lead mb-5">Confira a opinião de quem já contratou nossos serviços</p>

                <div class="swiper ratingsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card border-0 shadow-sm p-4 h-100">
                                <div class="mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle" width="80" alt="Cliente">
                                </div>
                                <div class="text-orange mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Ótimo atendimento, cumpriram com o horário combinado, tudo perfeito!"</p>
                                <h6 class="mb-1">Luiz Martins</h6>
                                <small class="text-muted">Gerente de Eventos - ABC Corp</small>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card border-0 shadow-sm p-4 h-100">
                                <div class="mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle" width="80" alt="Cliente">
                                </div>
                                <div class="text-orange mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Ótimo atendimento, cumpriram com o horário combinado, tudo perfeito!"</p>
                                <h6 class="mb-1">Luiz Martins</h6>
                                <small class="text-muted">Gerente de Eventos - ABC Corp</small>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card border-0 shadow-sm p-4 h-100">
                                <div class="mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle" width="80" alt="Cliente">
                                </div>
                                <div class="text-orange mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Ótimo atendimento, cumpriram com o horário combinado, tudo perfeito!"</p>
                                <h6 class="mb-1">Luiz Martins</h6>
                                <small class="text-muted">Gerente de Eventos - ABC Corp</small>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card border-0 shadow-sm p-4 h-100">
                                <div class="mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle" width="80" alt="Cliente">
                                </div>
                                <div class="text-orange mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Ótimo atendimento, cumpriram com o horário combinado, tudo perfeito!"</p>
                                <h6 class="mb-1">Luiz Martins</h6>
                                <small class="text-muted">Gerente de Eventos - ABC Corp</small>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card border-0 shadow-sm p-4 h-100">
                                <div class="mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle" width="80" alt="Cliente">
                                </div>
                                <div class="text-orange mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Ótimo atendimento, cumpriram com o horário combinado, tudo perfeito!"</p>
                                <h6 class="mb-1">Luiz Martins</h6>
                                <small class="text-muted">Gerente de Eventos - ABC Corp</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!-- Parceiros -->
        <section id="partners" class="py-5 py-lg-7">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Parcerias</span>
                    <h2 class="display-5 fw-bold mb-3">Nossos Parceiros</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 700px;">Trabalhamos com as melhores empresas para oferecer excelência em nossos serviços.</p>
                </div>

                <div class="position-relative">
                    <div class="swiper partnersSwiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <div class="partner-logo-container p-4">
                                    <img src="https://amaisgastronomiaeeventos.com.br/wp-content/uploads/2023/05/download.png"
                                        class="img-fluid partner-logo grayscale"
                                        alt="Parceiro 1"
                                        loading="lazy">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partner-logo-container p-4">
                                    <img src="https://amaisgastronomiaeeventos.com.br/wp-content/uploads/2023/05/download-2.png"
                                        class="img-fluid partner-logo grayscale"
                                        alt="Parceiro 2"
                                        loading="lazy">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partner-logo-container p-4">
                                    <img src="https://amaisgastronomiaeeventos.com.br/wp-content/uploads/2023/05/logo-fundasp-01-768x440.png"
                                        class="img-fluid partner-logo grayscale"
                                        alt="Parceiro 3"
                                        loading="lazy">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partner-logo-container p-4">
                                    <img src="https://amaisgastronomiaeeventos.com.br/wp-content/uploads/2023/05/sy75yw-asset-8_104q01o000000000000000.png"
                                        class="img-fluid partner-logo grayscale"
                                        alt="Parceiro 4"
                                        loading="lazy">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partner-logo-container p-4">
                                    <img src="https://amaisgastronomiaeeventos.com.br/wp-content/uploads/2023/05/logo-tokiomarine.svg"
                                        class="img-fluid partner-logo grayscale"
                                        alt="Parceiro 5"
                                        loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>


        <!-- Fac -->
        <section id="faq" class="py-5 py-lg-7">
            <div class="container fade-in">
                <div class="text-center mb-5">
                    <span class="text-uppercase text-primary fw-bold">Dúvidas Comuns</span>
                    <h2 class="display-5 fw-bold mb-3">Perguntas Frequentes</h2>
                    <p class="lead text-white mx-auto" style="max-width: 700px;">Encontre respostas para as principais questões sobre nossos serviços de catering e eventos corporativos.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion custom-accordion" id="faqAccordion">

                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="me-3"><i class="fas fa-question-circle text-primary"></i></span>
                                        Como faço para solicitar um orçamento?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 py-4 pt-0">
                                        <p>Para solicitar um orçamento personalizado, você pode:</p>
                                        <ul class="mb-0">
                                            <li>Preencher nosso <a href="#contact" class="text-primary">formulário online</a></li>
                                            <li>Enviar mensagem pelo WhatsApp: <a href="https://wa.me/5511986149925" class="text-primary">(11) 98614-9925</a></li>
                                            <li>Ligar para nosso telefone: (11) 98614-9925</li>
                                            <li>Enviar e-mail para: contato@amaisgastronomia.com.br</li>
                                        </ul>
                                        <p class="mb-0 mt-2">Nossa equipe comercial responde em até 24 horas úteis com uma proposta detalhada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-3"><i class="fas fa-map-marker-alt text-primary"></i></span>
                                        Vocês atendem eventos em outras cidades?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 py-4 pt-0">
                                        <p>Sim, atendemos eventos em todo o território nacional. Nossos serviços incluem:</p>
                                        <ul>
                                            <li>Frota própria de veículos refrigerados</li>
                                            <li>Equipe móvel treinada para viagens</li>
                                            <li>Logística integrada para transporte seguro de alimentos</li>
                                            <li>Planejamento detalhado para eventos fora de São Paulo</li>
                                        </ul>
                                        <p class="mb-0">Para eventos em outras cidades, recomendamos contato com pelo menos 15 dias de antecedência para organizarmos todos os detalhes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-3"><i class="fas fa-utensils text-primary"></i></span>
                                        Como funciona o serviço de catering corporativo?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 py-4 pt-0">
                                        <p>Nosso serviço completo de catering corporativo inclui:</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="text-primary mt-3">Planejamento</h6>
                                                <ul>
                                                    <li>Análise das necessidades do evento</li>
                                                    <li>Desenvolvimento de cardápio personalizado</li>
                                                    <li>Cronograma detalhado de execução</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-primary mt-3">Execução</h6>
                                                <ul>
                                                    <li>Preparação em cozinha industrial própria</li>
                                                    <li>Transporte em veículos refrigerados</li>
                                                    <li>Montagem e serviço no local</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-0">Tudo com equipe treinada, uniformizada e seguindo rigorosos protocolos de segurança alimentar.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-3"><i class="fas fa-clock text-primary"></i></span>
                                        Qual o prazo mínimo para contratar um serviço?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 py-4 pt-0">
                                        <p>O prazo varia conforme o tipo e complexidade do evento:</p>
                                        <ul>
                                            <li><strong>Coffee break simples:</strong> 24 horas de antecedência</li>
                                            <li><strong>Almoço corporativo:</strong> 3 dias úteis</li>
                                            <li><strong>Eventos grandes (100+ pessoas):</strong> 1 semana</li>
                                            <li><strong>Cardápios personalizados:</strong> 10 dias</li>
                                        </ul>
                                        <p class="mb-0">Para eventos fora da capital ou com necessidades especiais, recomendamos contato com pelo menos 2 semanas de antecedência.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-3"><i class="fas fa-leaf text-primary"></i></span>
                                        Vocês oferecem opções para dietas especiais?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 py-4 pt-0">
                                        <p>Sim, temos ampla experiência em atender diversas necessidades alimentares:</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="text-primary mt-3">Restrições</h6>
                                                <ul>
                                                    <li>Vegetarianos e veganos</li>
                                                    <li>Sem glúten</li>
                                                    <li>Sem lactose</li>
                                                    <li>Baixo teor de sódio</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-primary mt-3">Preparos Especiais</h6>
                                                <ul>
                                                    <li>Comida halal</li>
                                                    <li>Kosher</li>
                                                    <li>Alimentos orgânicos</li>
                                                    <li>Opções low carb</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-0">Informe suas necessidades durante o orçamento para prepararmos o cardápio ideal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <div class="d-inline-block bg-light p-4 rounded-3">
                                <h4 class="mb-3 text-primary">Não encontrou sua dúvida?</h4>
                                <a href="#contact" class="btn btn-primary px-4">
                                    <i class="fas fa-envelope me-2"></i> Entre em Contato
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contato -->
        <section id="contact" class="py-5 py-lg-7">
            <div class="container fade-in">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="pe-lg-4">
                            <span class="text-uppercase text-primary fw-bold">Contato</span>
                            <h2 class="display-5 fw-bold mb-4">Vamos Conversar Sobre Seu Evento</h2>
                            <p class="lead mb-4">Preencha o formulário ou entre em contato diretamente por um de nossos canais.</p>

                            <div class="contact-info">
                                <div class="d-flex mb-4">
                                    <div class="bg-primary text-white rounded p-3 flex-shrink-0 me-4">
                                        <i class="fas fa-phone-alt fs-4"></i>

                                    </div>
                                    <div>
                                        <h5 class="mb-1">Telefone</h5>
                                        <p class="mb-0"><a href="tel:+5511986149925" class="text-dark">(11) 98614-9925</a></p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="bg-primary text-white rounded p-3 flex-shrink-0 me-4">
                                        <i class="fas fa-envelope fs-4"></i>

                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:contato@amaisgastronomia.com.br" class="text-dark">contato@amaisgastronomia.com.br</a></p>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="bg-primary text-white rounded p-3 flex-shrink-0 me-4">
                                        <i class="fab fa-whatsapp fs-4"></i>

                                    </div>
                                    <div>
                                        <h5 class="mb-1">WhatsApp</h5>
                                        <p class="mb-0"><a href="https://wa.me/5511986149925" class="text-dark">Envie uma mensagem</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                            <div class="card-body p-5">
                                <h3 class="mb-4">Solicite um Orçamento</h3>
                                <form id="contactForm" class="needs-validation" novalidate>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" id="name" required>
                                            <div class="invalid-feedback">
                                                Por favor, insira seu nome.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="company" class="form-label">Empresa (Opcional)</label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="email" required>
                                            <div class="invalid-feedback">
                                                Por favor, insira um e-mail válido.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Telefone</label>
                                            <input type="tel" class="form-control" id="phone" required>
                                            <div class="invalid-feedback">
                                                Por favor, insira seu telefone.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="eventType" class="form-label">Tipo de Evento</label>
                                            <select class="form-select" id="eventType" required>
                                                <option value="" selected disabled>Selecione...</option>
                                                <option value="coffee">Coffee Break</option>
                                                <option value="lunch">Almoço Corporativo</option>
                                                <option value="cocktail">Coquetel/Finger Food</option>
                                                <option value="other">Outro</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Por favor, selecione um tipo de evento.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="date" class="form-label">Data do Evento (Opcional)</label>
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                        <div class="col-12">
                                            <label for="message" class="form-label">Mensagem</label>
                                            <textarea class="form-control" id="message" rows="4" required></textarea>
                                            <div class="invalid-feedback">
                                                Por favor, insira sua mensagem.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                                <label class="form-check-label" for="agreeTerms">
                                                    Concordo com a política de privacidade
                                                </label>
                                                <div class="invalid-feedback">
                                                    Você deve concordar antes de enviar.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-lg w-100 py-3" type="submit">
                                                Enviar Solicitação
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>

<?php include('tpl/include/footer.php'); ?>