@extends('layouts.app.app')

@section('title', 'Excecutive Committee | Tmarc')

@section('contents')

<div class="breadcrumb-wrapper bg-medium">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h1 class="breadcrumb-page-title">T-MARC Executive Committee</h1>
			</div> <!-- .col-md-6 --><!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div>


<section class="site-content">
	<div class="container">


		<div class="row">
			<div class="col-md-12">


				<div class="row margin-bottom-40">

                    <div class="col-md-3 col-sm-6">
                        <div class="content-box box-img bg-light text-center box-clickable">
                          <img class="img-responsive" src="{{ asset('shared/img/news/profile/t2.jpg') }}" alt="MR. TUMAINI R. M. KIMASA">
                          <div class="box-body">
                            <h4><a href="TUMAINI-KIMASA.html">TUMAINI R. M. KIMASA</a></h4>
                               
         <strong>                         <p>  
                                   Managing Director</p></strong>
                                  
                               
                            </div> <!-- .box-body -->
                        </div> <!-- .box-img -->
                    </div> <!-- .col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="content-box box-img bg-light text-center box-clickable">
                            <img class="img-responsive" src="{{ asset('shared/img/HALIMA-MWINYI.jpg') }}" alt="HALIMA MWINYI">
                            <div class="box-body no-side-spacing">
                                <h4 class="padding-right-40 padding-left-40"><a href="HALIMA-MWINYI.html">HALIMA MWINYI</a></h4>
                                <p><strong>Director of Programs</strong></p>
                            </div> <!-- .box-body -->
                        </div> <!-- .box-img -->
                    </div> <!-- .col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="content-box box-img bg-light text-center box-clickable">
                            <img class="img-responsive" src="{{ asset('shared/img/news/Riziki-Nahum.jpg') }}" alt="Riziki Nahu">
                            <div class="box-body">
                                <h4 class="padding-right-20 padding-left-20"><a href="RIZIKI-NAHUM.html">RIZIKI NAHUM</a></h4>
                                <p><strong>Finance and Operations Director</strong> </p>
                            </div> <!-- .box-body -->
                        </div> <!-- .box-img -->
                    </div> <!-- .col-md-3 -->
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="content-box box-img bg-light text-center box-clickable">
                            <img class="img-responsive" src="{{ asset('shared/img/news/profile/t4.jpg') }}" alt="FLAVIAN NGOLE">
                            <div class="box-body">
                                <h4 class="padding-right-20 padding-left-20"><a href="FLAVIAN-NGOLE.html">FLAVIAN NGOLE</a></h4>
                                <p><strong>Social Enterprise Director</strong> </p>
                            </div> <!-- .box-body -->
                        </div> <!-- .box-img -->
                    </div> <!-- .col-md-3 -->


			</div> <!-- .col-md-12 -->
		</div>
		</div>
		{{-- the quick menu section --}}
			{{-- @include('app.inc.quick') --}}

		{{-- the page content  --}}


	</div>
</section>



@endsection