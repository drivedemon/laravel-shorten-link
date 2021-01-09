<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Click link
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="card mt-3 mb-3">
                        <div class="card-header">
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Total click in system: 0</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="width:50%;">Short Link</th>
                                        <th style="width:50%;">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
