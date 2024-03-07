@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Contactez-nous
                </h1>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li>Contactez-nous</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style6 pb-120 md-pb-80">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106264.61155453755!2d-7.557820556640623!3d33.66314400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda632ee63dcf59f%3A0xcc6d96b5de266970!2sWATEC%20(OSMOTEC%20%2COsmose%20inverse%20Maroc%2C%20Traitement%20d&#39;eau%20maroc%2C%20Pompage%20et%20g%C3%A9nie%20hydraulique%20maroc%20%2C%20%C3%A9puration%20maroc%20%2C%20piscines%20maroc%2Caquaparc%20maroc%20%2Cunit%C3%A9%20de%20dessalement%20maroc%2Cunit%C3%A9%20de%20d%C3%A9min%C3%A9ralisation%20maroc%2C...%20)!5e0!3m2!1sfr!2sma!4v1686308582901!5m2!1sfr!2sma"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-section">
                    <div class="contact-wrap">
                        <div class="sec-title mb-60">
                            <h2 class="title title4 ser-style4">Contactez-nous</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="{{ route('contact.send') }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-30">
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="nom et prénom" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <input class="from-control" type="tel" id="phone" name="phone"
                                            placeholder="téléphone" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <input class="from-control" type="email" id="email" name="email"
                                            placeholder="e-mail" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <input class="from-control" type="text" name="subject" placeholder="sujet"
                                            required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message" placeholder="votre message ici" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon more submit sub-con" type="submit" value="Envoyer">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact-project"></div>
        </div>
        <!-- Contact Icons Section End -->
        <div class="rs-contact pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/images/contact/style1/icons/1.webp') }}"
                                    alt="address image icon | OSMOTEC">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Adresse de bureau</a></h4>
                                <p class="services-txt">{{ $site_address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-30">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/images/contact/style1/icons/2.webp') }}"
                                    alt="email image icon | OSMOTEC">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Envoyez-nous un email</a></h4>
                                <span><a href="mailto:support@Osmotec.net">{{ $site_email }}</a></span><br>
                                <span><a href="mailto:info@codesless.com">{{ $site_email2 }}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/images/contact/style1/icons/3.webp') }}"
                                    alt="phone image icon | OSMOTEC">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Appelez-nous</a></h4>
                                <span><a href="tel:{{ $site_phone }}">{{ $site_phone }}</a></span><br>
                                <span> <a href="tel:{{ $site_phone2 }}">{{ $site_phone2 }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Icons Section End -->
    </div>
    <!-- Contact Section End -->
@endsection
