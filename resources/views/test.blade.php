<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>

<body>

    <nav class="navbar is-sea has-shadow">
        <!-- logo / brand -->
        <div class="navbar-brand text-bold">
            <div class="ml-2">
                <span class="is-size-2 is-italic" style="line-height: 1.2;font-weight: bold"> Midcoast Provisions </span>
            </div>

            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="navbar-menu is-danger" id="nav-links">
            <!-- right links -->
            <div class="navbar-end">
                <a class="navbar-item has-text-weight-bold">Home</a>
                <a class="navbar-item has-text-weight-bold">About Us</a>
                <a class="navbar-item has-text-weight-bold">Offerings</a>
                <a class="navbar-item has-text-weight-bold">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <section class="section">
        <div class="card">
            <figure class="image">
                <img src="img/maine.jpg" />
            </figure>

            <div class="is-hidden-mobile is-overlay">
                <div class="columns">
                    <div class=" column is-full is-center mt-6 pt-6">
                        <div style="line-height: 1"
                            class="mt-6 pt-6 has-text-centered has-text-white has-text-outlined is-italic is-size-4-mobile is-size-2">
                            Enjoy a stress-free arrivals <br />on your next getaway.
                        </div>

                        <div
                            class="has-text-centered has-text-white has-text-outlined is-italic is-size-6-mobile is-size-4">
                            Let us shop, stock, and store for you!
                        </div>
                    </div>
                </div>
            </div>


            <div class="is-hidden-tablet is-overlay">
                <div class="columns">
                    <div class="column is-full is-center mt-6  ">
                        <div style="line-height: 1"
                            class=" has-text-centered has-text-white has-text-outlined is-italic is-size-4-mobile is-size-2">
                            Enjoy a stress-free arrival <br /> on your next getaway.
                        </div>
                        <div
                            class=" has-text-centered has-text-white has-text-outlined is-italic is-size-6-mobile is-size-4">
                            Let us shop, stock, and store for you!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="/js/index.js"></script>
</body>

</html>
