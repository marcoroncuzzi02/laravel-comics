@extends("layouts.master");

@php

    $comics=config("comics");

@endphp

@section("contenuto");

<div class=" bg-dark text-light container ">

    <div class=" row row-cols-4 text-center ">

        @foreach($comics as $comic)

            <div class="col ">

                <x-card>

                    <!-- <x-slot:description>
                        
                        {{ $comic['description'] }}
                        
                    </x-slot:description> -->

                    <x-slot:thumb>
                        
                        <img class="comic-image" src="{{ $comic['thumb'] }}" alt="">

                    </x-slot:thumb>

                    <x-slot:title>
                        
                        <span class="fw-bold fs-5 text-uppercase text-light text-decoration-none">{{ $comic['title'] }}</span>
                        
                    </x-slot:title>

                    <!-- <x-slot:price>
                        
                        {{ $comic['price'] }}
                        
                    </x-slot:price> -->

                    <!-- <x-slot:series>
                        
                        {{ $comic['series'] }}
                        
                    </x-slot:series> -->

                    <!-- <x-slot:sale_date>
                        
                        {{ $comic['sale_date'] }}
                        
                    </x-slot:sale_date> -->

                    <!-- <x-slot:type>
                        
                        {{ $comic['type'] }}
                        
                    </x-slot:type> -->

                    <!-- <x-slot:artists>
                        
                        {{ implode(', ', $comic['artists'] ) }}
                        
                    </x-slot:artists> -->
                
                </x-card>

            </div>

        @endforeach

    </div>

</div>

@endsection