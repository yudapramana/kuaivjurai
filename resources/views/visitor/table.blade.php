@props(['columns'])

<table class="min-w-max w-full table-auto">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            @foreach ($columns as $name)
            <th class="py-3 px-6 text-center">
                {{$name}}
            </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
        {{$slot}}
    </tbody>
</table>
