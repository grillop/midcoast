<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}"></head>

<body>

    <nav class="navbar is-sea has-shadow">
        <!-- logo / brand -->
        <div class="navbar-brand text-bold">
            <div class="ml-2">
            <span class="is-size-2 is-italic" style="line-height: 1.2;font-weight: bold" > Midcoast Provisions </span>
            </div>

            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="navbar-menu" id="nav-links">
            <!-- right links -->
            <div class="navbar-end">
                <a class="navbar-item">Home</a>
                <a class="navbar-item">About Us</a>
                <a class="navbar-item">Offerings</a>
                <a class="navbar-item">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <section class="section">
        <div class="card">
            <div class="card-image">
                <figure class="image">
                    <img src="img/maine.jpg" />
                </figure>
            </div>

            <div class=" is-overlay ">
                <section class="section">
                    <div class="mt-6 pt-6">
                        <div style="line-height: 1" class=" columns has-text-centered has-text-white has-text-outlined is-italic is-size-4 pl-5">
                             Experience a stress-free arrival <br/> your next getaway.
                        </div>
                    </div>
                        <div class="mt-5 ml-4">
                    <div class="columns has-text-outlined has-text-centered has-text-white is-italic is-size-6  ">
                        Let us shop, stock, and store for you!
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script src="/js/index.js"></script>
</body>

</html>
