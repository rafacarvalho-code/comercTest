    @extends('layouts.master')

    @section('content')
        <!-- Services Section -->
        <section id="services">
            <div class="container">
                @foreach ($feeds['items'] as $item)
                    <!-- COL-LG-06 PARA DISPOSITIVOS COM MAIOR DIMENSAO -->
                    <div class="col-lg-6" >
                        <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
                        {!!html_entity_decode($item->get_description())!!}
                        <p><small>Postado em: {{ $item->get_date('j F Y | g:i a') }}</small></p>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection