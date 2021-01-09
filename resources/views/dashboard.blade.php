<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Total click in system: {{ $count_click }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="card mt-3 mb-3">
                        <div class="card-header">
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Total user used: {{ $count_ip }}</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="width:20%;">IP</th>
                                        <th style="width:20%;">Code Link</th>
                                        <th style="width:40%;">URL</th>
                                        <th class="text-center" style="width:10%;">Total click</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($shorten_links as $shorten_link)
                                    <tr>
                                        <td>{{ $shorten_link->owner_ip }}</td>
                                        <td>{{ $shorten_link->code }}</td>
                                        <td>{{ $shorten_link->link }}</td>
                                        <td class="text-center">{{ $shorten_link->count_log }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
