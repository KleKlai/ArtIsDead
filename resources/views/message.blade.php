<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voices of the People</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css"
        integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="container">
        <header class="header-wrapper">
            <div class="section section--paddingless-y">
                <div class="container">
                    <div class="columns is-mobile is-multiline is-vcentered">
                        <div class="header-logo column is-12-touch is-4-desktop">
                            <a href="">
                                <h1 class="white">VOICES OF THE PEOPLE</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="section section--message">
            <div class="container">
                <div class="custom-flex-container container--form">
                    <div class="custom-block-wrapper">
                        <div class="custom-block main-block">
                            <div class="circle-container">
                                <div class="circle circle--theme">
                                    <div class="circle__top">
                                        {{--  <div class="circle-cat-fig">
                                            <img src="{{ asset('asset/logo.png') }}" alt="logo">
                                        </div>  --}}
                                    </div>
                                    <form id="message-form" action="{{ route('message') }}" method="post">
                                        @csrf

                                        <div class="circle__middle">
                                            <div class="js-form-message">

                                                <div class="sticker-lity">
                                                    <div class="sticker-lity__button js-sticker-button">
                                                        <span
                                                            class="is-hidden sticker-lity__close js-sticker-close">x</span>
                                                        <a href="#sticker-0" data-lity="">
                                                            <img src="/wp-content/themes/appreciation-board/assets/images/add-sticker.svg"
                                                                class="" alt="">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="input-wrapper input-wrapper-msg">
                                                    <textarea type="text" class="input-message is-theme-input js-msg-thank"
                                                        placeholder="Write your thoughts or opinions."
                                                        contenteditable="true" maxlength="140" name="body" rows="14" cols="30"  wrap="soft"></textarea>
                                                    <div class="circle-counter has-text-right js-msg-length">140</div>
                                                </div>
                                                <div class="input-wrapper input-wrapper-name">
                                                    <input type="text" name="name" class="input-name is-theme-input js-msg-name"
                                                        placeholder="Enter Name (optional)" contenteditable="true"
                                                        data-maxlength="23"></input>
                                                    <div class="circle-counter has-text-right js-name-length">23</div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="circle__bottom has-text-centered">
                                        <div class="circle-hashtag">#MASADATAYO</div>
                                    </div>
                                </div>
                            </div>

                            <div class="control-container">
                                <div class="custom-block left-block">
                                    <div class="link-wrapper">
                                        <a href="/"
                                            class="link-grey-dark has-icon-bottom icon-left-arrow">
                                            <div class="has-text-secondary has-text-right">back</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-captcha">
                                    <!-- <div id="grecaptcha" class="g-recaptcha"
                                        data-sitekey="6LelTL0ZAAAAAIf4JzOEtY9y2BnZRSWx-Kl4vWqR">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LelTL0ZAAAAAIf4JzOEtY9y2BnZRSWx-Kl4vWqR&amp;co=aHR0cHM6Ly93d3cuc2d1bml0ZWQtYXBwcmVjaWF0ZS5nb3Yuc2c6NDQz&amp;hl=en&amp;v=539Evs44yecoSf-lkJBQzKKj&amp;size=normal&amp;cb=b3roh8m5ykw4"
                                                    width="304" height="78" role="presentation" name="a-a9wfnc3e2yvi"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div> -->
                                </div>
                                <div class="custom-block right-block">
                                    <div class="link-wrapper">
                                        <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('message-form').submit();" class="link-red has-icon-bottom icon-right-arrow js-form-btn">
                                            <div class="has-text-primary has-text-left">submit</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <footer class="section section-footer">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item footer-copyright"> © 2022 VOICES OF THE PEOPLE</div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <h3 class="white">An initiative of Masada.app</h3>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>
