<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>

     <link rel="stylesheet" href={{ asset('css/app.css')  }}>
  </head>
  <body>
    <div>
        <section class="hero is-primary is-fullheight header-image">
            <!-- Hero header: will stick at the top -->
            <div class="hero-head">
                <header class="navbar">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="http://bulma.io">
                            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                        </a>

                        <div class="navbar-burger" v-on:click="showNav = !showNav" v-bind:class="{ 'is-active' : showNav }">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="navbar-menu" v-bind:class="{ 'is-active' : showNav }">
                        <!-- navbar start, navbar end -->
                        <div class="navbar-end">
                            <a class="navbar-item" href="/about">About</a>
                            <a class="navbar-item" href="/path">Path</a>
                            <a class="navbar-item" href="/blog">Blog</a>
                        </div>
                    </div>
                </header>
            </div>


            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        Title
                    </h1>
                    <h2 class="subtitle">
                        Subtitle
                    </h2>
                </div>
            </div>
            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
                <nav class="tabs is-boxed is-fullwidth">
                    <div class="container">
                        <ul>
                            <li class="is-active"><a>Overview</a></li>
                            <li><a>Modifiers</a></li>
                            <li><a>Grid</a></li>
                            <li><a>Elements</a></li>
                            <li><a>Components</a></li>
                            <li><a>Layout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </div>
  </body>
</html>
