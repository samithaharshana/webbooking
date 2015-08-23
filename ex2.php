<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HTML Document</title>
</head>
<body>

  <!--
  Here is our main header that is used accross
  all the pages of our website
  -->
  <header>
    header

    <!--
    Even is it's not mandatory, it's common
    practice to put the main navigation menu
    within the main header
    -->
    <nav>
      <ul>
        <li><a href="#">Navigation</a></li>
        <li><a href="#">Who we are</a></li>
        <li><a href="#">What we do</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <!--
      Search form is another non-linear way
      to navigate through a website.
      -->
      <form>
        <input type="search" name="q" placeholder="Search query">
        <input type="submit" value="Go!">
      </form>
    </nav>
  </header>

  <!--
  Here is our page main content
  -->
  <main>

    <!--
    It contains an article
    -->
    <article>
      <h1>heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue
      ligula as quam viverra nec consectetur ant hendrerit. Donec et
      mollis dolor. Praesent et diam eget libero egestas mattis sit
      amet vitae augue. Nam tincidunt congue enim, ut porta lorem
      lacinia consectetur.</p>

      <h2>subsection</h2>
      <p>Donec ut librero sed accu vehicula ultricies a non tortor.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean
      ut gravida lorem. Ut turpis felis, pulvinar a semper sed,
      adipiscing id dolor.</p>

      <p>Pelientesque auctor nisi id magna consequat sagittis.
      Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat
      nist imperdiet. Ut convallis libero in urna ultrices accumsan.
      Donec sed odio eros.</p>

      <h2>Another subsection</h2>
      <p>Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus.
      Cum soclis natoque penatibus et manis dis parturient montes,
      nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris
      vitae nisi at sem facilisis semper ac in est.</p>

      <p>Vivamus fermentum semper porta. Nunc diam velit, adipscing ut
      tristique vitae sagittis vel odio. Maecenas convallis ullamcorper
      ultricied. Curabitur ornare, ligula semper consectetur sagittis,
      nisi diam iaculis velit, is fringille sem nunc vet mi.</p>
    </article>

    <!--
    the aside content can also be nested
    within the main content
    -->
    <aside>
      <p>Be sure to check out our sponsors too!</p>
      <ul>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
      </ul>
    </aside>
  </main>

  <!--
  And here is our main footer that is used
  across all the pages of our website
  Note: This is, obviously, a false copyright
  statement, but take care of the real ones.
  -->
  <footer>
    ©Copyright 2050 by example.com. All rights reserved.
  </footer>
</body>
</html>