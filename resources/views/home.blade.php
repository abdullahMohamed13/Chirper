<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1 class="text-3xl font-bold">{{ $chirp['name'] }}</h1>
                        <p class="mt-4 text-base-content/60">
                            {{$chirp['msg']}}
                        </p>
                        <span class="mt-4 text-xs">
                            {{$chirp['time']}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>