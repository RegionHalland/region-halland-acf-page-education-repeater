{{--

    Template Name: Utbildningslista

--}}

@extends('layouts.app')

@section('content')
    <div class="mx-auto center" style="max-width: 1440px;">
        <main id="main" class="">

            @if(function_exists('get_region_halland_acf_page_education_repeater_items'))
                <ul class="rh-education-list">
                    @php($myItems = get_region_halland_acf_page_education_repeater_items())

                    @if($myItems['barn_fritid'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Barn och fritid</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['barn_fritid'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['bygg_anlaggning'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Bygg och anläggning</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['bygg_anlaggning'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['el_energi'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">El och energi</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['el_energi'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['fordon_transport'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Fordon och transport</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['fordon_transport'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif





                    @if($myItems['handel_administration'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Handel och administration</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['handel_administration'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif



                    @if($myItems['hantverk'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Hantverk</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['hantverk'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['industriteknik'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Industriteknik</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['industriteknik'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['naturbruk'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Naturbruk</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['naturbruk'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['restaurang_livsmedel'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Restaurang och livsmedel</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['restaurang_livsmedel'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['vard_omsorg'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Vård och omsorg</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['vard_omsorg'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['vvs_fastighet'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">VVS och fastighet</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['vvs_fastighet'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                    @if($myItems['ovrigt'])
                        <li class="pt3 pb2 rh-xpad-B rh-education-list__item">
                            <h2 class="pb2" style="width:100%; text-align:center;">Övrigt</h2>
                            <ul class="mb4 mx-auto" style="max-width:50em;">
                                @foreach($myItems['ovrigt'] as $item)
                                    <li class="clearfix pt2 pb1" style="border-bottom: 1px solid #D1D1D1;">
                                        <div class="col col-12 md-col-6">
                                            <strong>
                                                {{ $item['page']->education_name }}
                                            </strong>
                                        </div>
                                        <div class="col col-12 md-col-6">
                                            <ul aria-label="Utbildningsorter för {{ $item['page']->education_name }}">
                                                @foreach ($item['page']->metadata as $metadata)
                                                    <li style="display:inline;">
                                                        <a class="rh-labels" style="text-decoration:none;background: #E99579;" href="{{ $metadata['link_url'] }}">
                                                            {{ $metadata['kommun_name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif




                </ul>
            @endif

        </main>
    </div>

@endsection