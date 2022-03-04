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

    @livewireStyles

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
                        <div class="header-text-wrapper header-wrapper--without-link column is-12-touch is-8-desktop">
                            <div class="header-title">#VOICESOFTHEPEOPLE Freedom Wall</div>
                            <div class="header-desc">
                                You are free to express your thoughts below. Tell us why.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="section section--home">
            <div class="container">
                <div class="message-circle-wrapper">
                    <div class="columns is-mobile is-multiline">

                        <!-- Start of create button -->
                        <div class="column is-half-mobile is-4-tablet is-3-desktop">
                            <a href="/category" class="circle-link">
                                <div class="circle circle--write">
                                    <div class="write-text">Write your message here</div>
                                </div>
                            </a>
                        </div>
                        <!-- End of create button -->

                        <!-- You can loop this messages from database -->

                        @foreach ($messages  as $message)
                        <div class="column is-half-mobile is-4-tablet is-3-desktop">
                            <a href="{{ route('summary', $message) }}" class="circle-link">
                                <div class="circle circle--theme">
                                    <div class="circle__top">
                                        {{--  <div class="circle-cat-fig">
                                            <img src="{{ asset('asset/logo.png') }}" alt="logo">
                                        </div>  --}}
                                    </div>
                                    <div class="circle__middle">
                                        <div class="circle-thank-msg">
                                            <div class="lines-3 js-circle-msg see-more">
                                                {{ $message->body }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="circle-name">{{ $message->name }}</div>
                                        </div>
                                    </div>
                                    <div class="circle__bottom has-text-centered">
                                        <div class="circle-hashtag">
                                            #{{ $message->sector }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <!-- End of loop -->

                    </div>
                </div>

                {{--  <div class="center-button-wrapper has-text-centered">
                    <a class="btn-view-more-msg button is-primary is-rounded" href="/gallery">View More Messages</a>
                </div>  --}}
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
                            <h3 class="white">An initiative of <a href="https://masada.app" target="_blank">Masada</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    @livewireScripts

    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>
