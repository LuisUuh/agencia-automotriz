<div class="container row p-0 m-auto bg-white">
    
    <section class="row col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-10 p-0">
            <h3 class=" text-center text-uppercase">Contáctanos</h3>
            <img class="m-0 p-0" src="{{asset('img/Get in touch-pana.png')}}" alt="Get in touch-pana" width="400">
        </div>
    </section>

    <section class=" col-sm-12 col-md-12 col-lg-6 p-3 pt-5">
        <a href="#" id="link-form-contact"></a>
        <div class="well well-sm">
            <form class="form-horizontal" method="post" action="{{ route('sendForm') }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <input id="fname" name="name" type="text" placeholder="Nombre(s)" class="form-control" maxlength="100" 
                        value="{{ old('name') }}">
                        <span class=" text-danger">*
                            @error('name')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input id="lname" name="lastName" type="text" placeholder="Apellido(s)" class="form-control" maxlength="100" value="{{ old('lastName') }}">
                        <span class=" text-danger">*
                            @error('lastName')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <input id="email" name="email" type="text" placeholder="Correo" class="form-control" maxlength="100" value="{{ old('email') }}">
                        <span class=" text-danger">*
                            @error('email')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control" maxlength="12" value="{{ old('phone') }}">
                        <span class=" text-danger">*
                            @error('phone')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" placeholder="Ingrese aquí su mensaje para nosotros. Nos comunicaremos con usted lo más pronto posible" rows="7" maxlength="500">{{ old('message') }}</textarea >
                        <span class=" text-danger">*
                            @error('message')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>
                    
                    <div class="custom-control custom-checkbox mb-5 mt-5">
                        <input class=" custom-control-input" type="checkbox" name="politics" id="politics">
                        <label class=" custom-control-label" for="politics">Acepto la política de privacidad</label>
                        <div class=" text-danger">
                            @error('politics')
                                * {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn format-btn text-white btn-lg btn-block">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
</div>