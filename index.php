<?php
  phpinfo();
?>

<!DOCTYPE html>

<html>
  <head>
    <title>AmbiLamp</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="jscolor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
  </head>
  <body>
  <!--header-->
    <header>
      <ul>
        <li><img src="https://www.viesso.com/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/l/i/lightbox-base-3.jpg"></li>
        <li><a href="index.html">AmbiLamp</a></li>
        <li><a href="details.html">Details</a></li>
      </ul>
    </header>
    <input type="button" class="jscolor" id="picker" value="EFFFC9">

    <form>
      <input type="text" id="color">
      <input type="submit" value="Set as Default" id="set_default">
    </form>

    <div id="charts-container"> 
      <canvas id="temp-chart" class="chart" width="550"  height="350"></canvas>
      <canvas id="sound-chart" class="chart" width="550" height="350"></canvas>
    </div>
    <div id ="About">
      <h1>About</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut pellentesque dui. Donec a condimentum sem. Ut risus sapien, auctor et pellentesque in, sollicitudin elementum libero. Ut vel ex cursus erat pellentesque bibendum mattis eget mauris. In hac habitasse platea dictumst. Phasellus in luctus nisi. Vivamus placerat, erat et maximus accumsan, lacus tellus efficitur felis, tempus condimentum ligula orci vel lectus. In hac habitasse platea dictumst. Aenean faucibus vel neque vitae ultrices. Nullam at velit nibh. In hac habitasse platea dictumst. Sed dictum massa velit, nec semper urna condimentum non. Cras sit amet aliquam turpis. Sed lobortis hendrerit hendrerit. Sed molestie neque lobortis nibh accumsan vestibulum. Donec placerat sapien in diam convallis tincidunt.</p>

      <p>Proin porta nibh at lectus tincidunt, a pharetra nisl finibus. Nullam pretium non augue vel mollis. Nulla nec enim in purus viverra faucibus sed a massa. Phasellus sodales eget justo sed porta. Vestibulum id placerat sapien. Fusce eu ornare lacus. Pellentesque efficitur faucibus placerat. Proin aliquet neque a est dictum interdum. Etiam justo mi, rutrum eu ex varius, pharetra vestibulum mi. Ut ultrices ligula sem, vel pretium odio hendrerit tincidunt.</p>

      <p>Nunc sed maximus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi eu dui convallis, aliquam leo sit amet, lobortis nulla. Morbi id ante eu lacus pretium blandit at sit amet nunc. Mauris rhoncus risus et libero auctor, at fermentum nunc imperdiet. Aenean placerat sapien ipsum, sed rutrum mi euismod non. Integer imperdiet dictum urna, et malesuada justo auctor eget. Integer ut tincidunt mi, a fringilla tellus. Morbi dignissim venenatis felis vel iaculis.</p>

      <p>In id odio lacinia, posuere erat non, blandit nisi. Sed volutpat lectus a metus semper pretium. Etiam lobortis ex vel risus scelerisque semper. Cras quis accumsan ex. Maecenas eu purus malesuada leo pretium tincidunt sed in tellus. Suspendisse a eros risus. Maecenas scelerisque ante vitae ligula blandit, id tincidunt nisl fringilla. Pellentesque nec ipsum vel mi scelerisque rutrum. Donec at porta dolor, eget maximus ex. Etiam rhoncus et est nec volutpat. Donec eu ipsum vel dui tempor consequat. In quis eros at orci pretium tempus in id nisl. Praesent finibus molestie lorem id viverra. Cras viverra quis enim at lobortis. Nullam porta nulla non diam bibendum euismod. Mauris finibus diam in risus consequat dapibus.</p>

      <p>Pellentesque nisi leo, rhoncus accumsan molestie ut, dapibus non dui. Pellentesque rhoncus orci non dignissim accumsan. Vestibulum sed pretium sem. Maecenas eget nunc at quam interdum rhoncus. Nullam vitae sem sit amet orci interdum pellentesque ut eget ante. Praesent posuere in ante non rhoncus. Ut sit amet est et magna aliquam tristique.</p>
    </div>

    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
