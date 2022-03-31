<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NacionaChino</title>
  <link rel="stylesheet" media="all" href="style.css" />
</head>
<body>
<div class="container">
	<div class="row">
			<h1>Encuentra tu nacionalidad por medio de tu nombre</h1>
	</div>
	<form action="/index2" method="POST" >
        @csrf
        <div class="api">
          <div class="col-sm-12">
            <fieldset>
              <input name="name" type="text" id="name" placeholder="Nombre" required="">
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <button type="submit" id="submit" class="main-button">Calcular Nacionalidad</button>
            </fieldset>
          </div>
        </div>
        @foreach ($resultado as $result)
        {{$result['id']}}
        {{$result['probabilidad']}}<br>
        @endforeach
      </form>
</div>
</body>
</html>
