<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @include('page.landing') <!-- Memasukkan landing page -->
        @include('page.service')
        @include('components.preload') <!-- Memasukkan services page -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#view-services-link').click(function(event) {
                event.preventDefault();
                $('#landing').hide();
                $('#services').show();
                $('html, body').animate({
                    scrollTop: $('#services').offset().top
                }, 800);
            });

            $('#back-to-landing').click(function() {
                $('#services').hide();
                $('#landing').show();
                $('html, body').animate({
                    scrollTop: $('#landing').offset().top
                }, 800);
            });
        });
    </script>

<script>
    document.getElementById('scrollButton').addEventListener('click', function() {
        const target = document.getElementById('scrollTarget');
        target.scrollIntoView({ behavior: 'smooth' });
    });
</script>

</body>
</html>
    