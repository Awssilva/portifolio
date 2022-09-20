<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <title>Alexandre Silva | Tree</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" />
    <link rel="icon" href="{{ asset('/imagens/Template.png') }}" type="image/x-icon" />
    <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
  </head>

  <body>
    <i onclick="mostrar(this)" class="fa fa-moon-o fa-2x night_mode"></i>

    <img id="userPhoto" src="{{ asset('/imagens/alexandre.jpeg') }}" alt="User Photo" />

    <spam id="userName">Alexandre Silva | Software Engineer</spam>

    <div id="links">
      <a
        class="link"
        href="#"
        target="_blank"
        style="border-radius: 25px"
        ><i class="fa fa-globe" aria-hidden="true"></i> Meu site</a
      >
      <a
        class="link"
        href="https://github.com/awssilva"
        target="_blank"
        style="border-radius: 25px"
        ><i class="fa fa-github"></i> Github</a
      >
      <a
        class="link"
        href="#"
        target="_blank"
        style="border-radius: 25px"
      >
        <i class="fa fa-file-code-o"></i>
        Aplicativos</a
      >
      <a
        class="link"
        href="#"
        target="_blank"
        style="border-radius: 25px"
      >
        <i class="fa fa-clock-o"></i> Pomodoro Clock</a
      >
    </div>

    <div class="footer">
      <a href="#" target="_blank">
        <i
          style="line-height: 38px"
          class="fa fa-instagram circulo"
          aria-hidden="true"
        ></i>
      </a>
      <a
        href="https://www.linkedin.com/in/awssilva"
        target="_blank"
      >
        <i
          style="line-height: 38px"
          class="fa fa-linkedin circulo"
          aria-hidden="true"
        ></i>
      </a>
    </div>

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="index.js"></script>
  </body>

</html>
