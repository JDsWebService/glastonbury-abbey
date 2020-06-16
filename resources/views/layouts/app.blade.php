<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.app.head')
</head>

<body>
    
    @include('partials.app.socialmedia')

    @include('partials.app.navbar')

    @include('partials.app.hero')

    <main id="main">

        @include('partials.app.about')

        @include('partials.app.cta')

        @include('partials.app.programs')

        @include('partials.app.life')

        @include('partials.app.faq')

        @include('partials.app.contact')

    </main><!-- End #main -->

    @include('partials.app.footer')

    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    @include('partials.app.scripts')

</body>

</html>