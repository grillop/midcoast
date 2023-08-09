@extends('layouts.default')

@section('content')
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


    <div style="line-height: 1" class="mt-3 pb-4 has-text-centered is-italic is-size-4-mobile is-size-2">
        Enjoy a stress-free arrival <br />on your next getaway.
    </div>

    <div class="card">
        <figure class="image">
            <img src="img/maine.jpg" />
        </figure>

    </div>
    <section>
        <div class="columns">
            <div class="column is-2">
            </div>
            <div class="column is-8">
                <article class="media">

                    <div class="media-content is-size-5-mobile is-size-4-tablet px-5" style="line-height: 1.2">

                        <p class=" p-2 has-text-centered is-size-3 is-size-4-mobile is-italic">Let us shop, stock, and store for you!</p>
                        <p class="p-2">Imagine arriving at your vacation rental with the kitchen fully stocked and
                            all of your preselected provisions are already stowed away.</p>
                        <p class="p-2">Beverages are chilled, snacks are grab ready and ingredients for your next
                            meal in the fridge awaiting your preparation.</p>
                        <p class="p-2">No need to rush off to the market upon arrival or hassle with putting
                            everything away.</p>
                        <p class="p-2">You can just settle in and let your vacation begin! Ahhh…</p>
                    </div>
                </article>
            </div>
            <div class="column is-2">
            </div>
        </div>
    </section>
@endsection

</html>
