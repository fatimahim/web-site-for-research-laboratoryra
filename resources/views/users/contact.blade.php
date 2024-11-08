<!-- .page-banner -->
</div>
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Contactez-nous</h1>

      <form action="{{ route('contact.store') }}" method="post" class="main-form">
      @csrf
      @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control"  name="name" id="name" placeholder="Nom">
            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="N° de télephone">
            @error('phone')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" name="subject" placeholder="Sujet">
            @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message"
            rows="4"  class="form-control" rows="6" placeholder="Entrez votre message.."></textarea>
            @error('message')
                        <span class="text-danger"> {{ $message }} </span>
            @enderror
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Envoyer</button>
      </form>
    </div>
  </div>