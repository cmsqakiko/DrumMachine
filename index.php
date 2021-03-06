<!doctype html>
<html>
  <head>
    <title>Drum machine</title>
    <meta name = "viewport" content = "width = device-width">

    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/3ac768d8-7a5c-4fd8-b377-f61d7f1760fa.css"/>
    <link type="text/css" rel="stylesheet" href="resources/main.css" />
  </head>

  <body>
    <h1>Drum machine</h1>
    <div class="links">
      <a href="/docs/drum-machine.html">Annotated Source Code</a>&nbsp;
      <a href="https://glitch.com/edit/#!/drum-machine">Live Code</a>
    </div>
    <hr/>

    <p>
      How to write a simple drum machine that runs in the browser.
    </p>

    <h2>Demo</h2>

    <div id="mobile-demo" style="display: none;">
      <p>
        Below is just a screenshot of the drum machine.  The code
        doesn't work in mobile browsers.  To play with the demo, visit
        this site on a deskop or laptop computer.
      </p>

      <img src="/DrumMachine/screenshot.gif" width="100%">
    </div>

    <div id="desktop-demo">
      <p>
        Click the buttons to turn the beats on or off.
      </p>

      <!-- Canvas element where the drum machine is drawn -->
      <canvas id="screen" width="637px" height="286px"></canvas>

      <!-- Load the code that runs the drum machine -->
      <script src="drum-machine.js"></script>
    </div>

    <h2>Annotated source code</h2>

    <p>
      The <a href="/docs/drum-machine.html">heavily annotated source code</a> is 114 lines long.
    </p>

    <h2>Get the code</h2>

    <p>
      <a href="https://glitch.com/edit/#!/remix/drum-machine"><img src="https://cdn.glitch.com/2703baf2-b643-4da7-ab91-7ee2a2d00b5b%2Fremix-button.svg" alt="Remix on Glitch" /></a>
    </p>

    <h2>Licence</h2>

    <p>
      The <a href='http://github.com/maryrosecook/drum-machine'>code</a> is open source, under the <a href='http://en.wikipedia.org/wiki/MIT_License'>MIT licence</a>.
    </p>

    <hr/>
    <div class="footer">
      <a href="http://maryrosecook.com">Mary Rose Cook</a>
    </div>
   </body>
</html>
