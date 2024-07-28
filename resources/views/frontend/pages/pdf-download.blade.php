<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shetab</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/uploads/favicon.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend') }}/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    
    <div class="mb-4 col-lg-4 col-sm-6">
        <!-- Portfolio item with PDF and Download button-->
        <div class="portfolio-item">
            <!-- Embedded PDF File -->
            <embed src="{{ asset('frontend/assets/files/Pitch_deck.pdf') }}" type="application/pdf" width="100%" height="400px" />
            <!-- Download Button -->
            <a href="{{ asset('frontend/assets/files/Pitch_deck.pdf') }}" download="PitchDeck.pdf" class="btn btn-primary mt-2">
                Download PDF
            </a>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend') }}/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
