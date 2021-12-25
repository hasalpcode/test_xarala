<head>
    <meta charset="utf-8">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Custom styles for this template-->
     <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<title>
    @section('title')
        My contact
    @show
</title>

<div class="container">


    <div class="row">
        
            <section class="col-md-12">
            <article class="col-lg-12">
            @yield('contenu')
            </article>
        </section>
    </div>


    
        
            
           

        
    
</div>  