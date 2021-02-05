<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Fitxa recollida de dades per conveni nou')</title>
        <style>
        </style>
    </head>
    <body>
        <h1>Fitxa recollida de dades per conveni nou</h1>
        <h2>Empresa</h2>
        <form method="get" action="{{route('formulario')}}">
            @csrf
            <!--{{ $errors }}<br>
            {{ var_dump($errors->any())}}<br>
            @if($errors->any())
            <p> Mostrar errores </p><br>
            @endif-->
            <input name="name" placeholder="Nombre... " value="{{ old('name') }}" required><br>
            {!! $errors->first('name', '<small> :message </small><br>') !!}
            <input name="cif" placeholder="CIF... " value="{{ old('cif') }}" required><br>
            {!! $errors->first('cif', '<small> :message </small><br>') !!}
            <input name="address" placeholder="Dirección... " value="{{ old('address') }}"><br>
            {!! $errors->first('address', '<small> :message </small><br>') !!}
            <input name="city" placeholder="Ciudad... " value="{{ old('city') }}"><br>
            {!! $errors->first('city', '<small> :message </small><br>') !!}
            <input type="tel" name="telephone1" placeholder="Telefono primero... " value="{{ old('telephone1') }}"><br>
            {!! $errors->first('telephone1', '<small> :message </small><br>') !!}
            <input type="tel" name="telephone2" placeholder="Telefono segundo... " value="{{ old('telephone2') }}"><br>
            {!! $errors->first('telephone2', '<small> :message </small><br>') !!}
            <input type='email' type="email" name="email" placeholder="email" value="{{ old('email') }}"  required><br>
            {!! $errors->first('email', '<small> :message </small><br>') !!}
            <input name="sector" placeholder="Sector... " value="{{ old('sector') }}"><br>
            {!! $errors->first('sector', '<small> :message </small><br>') !!}
            <input name="activity" placeholder="Actividad productiva... " value="{{ old('activity') }}"><br>
            {!! $errors->first('activity', '<small> :message </small><br>') !!}
            
            <p>Titularidad</p><br>
            <input type="radio" id="private" name="owner" value="private">
            <label for="private">Private</label><br>
            <input type="radio" id="public" name="owner" value="public">
            <label for="public">Public</label><br>
            {!! $errors->first('owner', '<small> :message </small><br>') !!}
            
            <h1> Representant de l'empresa </h1>
            <input name="nameRepresentative" placeholder="Nombre del Representante... " value="{{ old('nameRepresentative') }}" required><br>
            {!! $errors->first('nameRepresentative', '<small> :message </small><br>') !!}
            <input name="nif" placeholder="NIF... " value="{{ old('nif') }}" required><br>
            
            <h1> Centres de Treball </h1>
            {!! $errors->first('nif', '<small> :message </small><br>') !!}
            <input name="centername" placeholder="Nombre del Centro... " value="{{ old('centername') }}"><br>
            {!! $errors->first('centername', '<small> :message </small><br>') !!}
            <input name="centeradress" placeholder="Dirección del Centro... " value="{{ old('centeradress') }}"><br>
            {!! $errors->first('centeradress', '<small> :message </small><br>') !!}
            <input name="poblation" placeholder="Población... " value="{{ old('poblation') }}"><br>
            {!! $errors->first('poblation', '<small> :message </small><br>') !!}
            <input name="cp" placeholder="Codigo Postal... " value="{{ old('cp') }}"><br>
            {!! $errors->first('cp', '<small> :message </small><br>') !!}
            <input name="activity" placeholder="Actividad... " value="{{ old('activity') }}"><br>
            {!! $errors->first('activity', '<small> :message </small><br>') !!}
            <input type="number" name="workersnumber" placeholder="Numero de Trabajadores... " value="{{ old('workersnumber') }}"><br>
            {!! $errors->first('workersnumber', '<small> :message </small><br>') !!}
            <input type="email" name="emailcenter" placeholder="Correo del Centro... " value="{{ old('emailcenter') }}" required><br>
            {!! $errors->first('emailcenter', '<small> :message </small><br>') !!}
            <input type="tel" name="telephonecenter1" placeholder="Telefono 1... " value="{{ old('telephonecenter1') }}"><br>
            {!! $errors->first('telephonecenter1', '<small> :message </small><br>') !!}
            <input type="tel" name="telephonecenter2" placeholder="Telefono 2... " value="{{ old('telephonecenter2') }}"><br>
            {!! $errors->first('telephonecenter2', '<small> :message </small><br>') !!}
            
            <p>Tipo de jornada: </p><br>
            <input type="radio" id="continuada" name="workingtime" value="continuada">
            <label for="private">Continuada</label><br>
            <input type="radio" id="partida" name="workingtime" value="partida">
            <label for="public">Partida</label><br>
            <input name="schedule" placeholder="Horario... " value="{{ old('schedule') }}"><br>
            {!! $errors->first('schedule', '<small> :message </small><br>') !!}
            <input name="namecoordinatorfct" placeholder="Coordinador de las FCT... " value="{{ old('namecoordinatorfct') }}" required><br>
            {!! $errors->first('namecoordinatorfct', '<small> :message </small><br>') !!}
            <input name="coordinatorfctnif" placeholder="NIF coordinador de las FCT... " value="{{ old('coordinatorfctnif') }}" required><br>
            {!! $errors->first('coordinatorfctnif', '<small> :message </small><br>') !!}
            <input name="nametutor" placeholder="Nombre del tutor de empresa... " value="{{ old('nametutor') }}" required><br>
            {!! $errors->first('nametutor', '<small> :message </small><br>') !!}
            <input name="niftutor" placeholder="NIF del tutor de empresa... " value="{{ old('niftutor') }}" required><br>
            {!! $errors->first('niftutor', '<small> :message </small><br>') !!}
            <input name="workplace" placeholder="Lugar de trabajo... " value="{{ old('workplace') }}"><br>
            {!! $errors->first('workplace', '<small> :message </small><br>') !!}
            
            <button>Enviar</button>
        </form>
    </body>
</html>