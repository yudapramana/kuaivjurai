<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-graph :data="$chart_data" />
                    <x-table :columns="['Date', 'Visitors']">
                        @forelse ($visitors as $day)
                        <x-table-row :row="[date('d.m.Y', strtotime($day->date)), $day->total]" />
                        @empty
                        <x-table-row :row="['-', 'No data available']" />
                        @endforelse
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
