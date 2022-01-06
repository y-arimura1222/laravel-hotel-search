<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Search Result
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="get" action="{{ route('hotel.search') }}">
                        <div class="lg:flex lg:justify-around">
                            <div class="lg:flex items-center">
                                <div class="flex space-x-2 items-center">
                                    <x-search.select :areas="$areas" />
                                    <div><button type="submit" class="ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">検索する</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if($hotels !== null)
                        <x-search.container>
                            @foreach($hotels as $hotel)
                                @foreach($hotel as $val)
                                    <div class="p-4 md:w-1/4 sm:mb-0 mb-6">
                                        <div class="rounded-lg h-48 overflow-hidden">
                                            <img alt="content" class="object-cover object-center h-full w-full" src="{{ $val[0]["hotelBasicInfo"]["hotelThumbnailUrl"] }}">
                                        </div>
                                        <p class="text-base leading-relaxed mt-2">{{ $val[0]["hotelBasicInfo"]["hotelName"] }}</p>
                                        <a href="{{ $val[0]["hotelBasicInfo"]["planListUrl"] }}" class="text-indigo-500 inline-flex items-center mt-3">Learn More</a>
                                    </div>
                                @endforeach
                            @endforeach
                        </x-search.container>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
