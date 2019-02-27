
@extends('layouts.app')

@section('title', $title)
@section('meta_description', $description)

@section('content')
  <div class="container">
    <div class="home">
      <div class="section_1">
        <div class="row">
          <div class="col-6">
            <h1>Diventa sviluppatore web</h1>
            <p>6 mesi di corso intensivo online in diretta per imparare da zero il
               mestiere di web developer e trovare un nuovo lavoro nelle aziende
               top del settore</p>
               <a class="btn btn-primary"href="#">Scopri il corso</a>
          </div>
          <div class="col-6">
            <img src="https://www.boolean.careers/images/common/mac2x.png" alt="">
          </div>
        </div>

      </div>
    </div>
    <div class="pre_footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="">
          </div>
          <div class="col-3">
            <ul>
              <li>
                <a href="#">ciao@boolean.careers</a>
              </li>
              <li>
                <a href="#">02-40031288</a>
              </li>
              <li>
                <a href="#">+39 327-9578239</a>
              </li>
            </ul>
          </div>
          <div class="col-3">
            <ul>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Lavora con noi!</a>
              </li>
            </ul>
          </div>
          <div class="col-3">
            <ul>
              <li>
                <a href="#">O</a>
              </li>
              <li>
                <a href="#">O</a>
              </li>
              <li>
                <a href="#">O</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-4">
          Boolean** (my_new_job > my_old_job) // returns true
        </div>
        <div class="col-8">
          Boolean SRLS - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967
        </div>
      </div>
    </div>
  </footer>
@endsection
