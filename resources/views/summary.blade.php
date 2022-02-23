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
</head>

<body>
    <div class="container">
        <header class="header-wrapper">
            <div class="section section--paddingless-y">
                <div class="container">
                    <div class="columns is-mobile is-multiline is-vcentered">
                        <div class="header-logo column is-12-touch is-4-desktop">
                            <a href="https://www.sgunited-appreciate.gov.sg"><img
                                    src="/wp-content/uploads/2020/04/cropped-logo_sgunited.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="section section--message">

            <div class="end-screen animated slideInUp" style="display: block;">
                <div class="custom-flex-container container--end">
                    <div class="custom-block-wrapper">
                        <div class="custom-block main-block">
                            <div class="main-block-end">
                                <div class="end-title has-text-centered">
                                    Your appreciation note<br>has been added!</div>
                                <div class="end-circle-wrapper">
                                    <div class="circle-container">
                                        <div class="circle circle--theme">
                                            <div class="circle__top">
                                                {{--  <div class="circle-cat-fig">
                                                    <img src="{{ asset('asset/logo.png') }}" alt="logo">
                                                </div>  --}}
                                            </div>
                                            <div class="circle__middle">
                                                <div class="circle-thank-msg js-msg-thank-end">{!! $messages->body !!}</div>
                                                <div class="circle-name">{!! $messages->name ?? '' !!}</div>
                                            </div>
                                            <div class="circle__bottom has-text-centered">
                                                <div class="circle-hashtag">#MASADATAYO</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-block left-block has-gradient-right">
                            <div class="link-wrapper">
                                <a href="/" class="has-text-centered">
                                    <div class="link-title">view<br>message gallery</div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-block right-block has-gradient-left">
                            <div class="link-wrapper">
                                <a href="/message">
                                    <div class="link-title">send<br>another one</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="find-out-sgunited">
                    <span>Visit us at</span><a href="http://thebauhaus.min-art.org" target="_blank"
                        class="button is-primary is-rounded">thebauhaus.min-art.org</a>
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
                        <h3 class="white">An initiative of TheBauHaus</h3>
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
