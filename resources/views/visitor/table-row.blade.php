@props(['row', 'actions'])

<tr class="border-b border-gray-200 hover:bg-gray-100">
    @foreach ($row as $var)
    <td class="py-3 px-6 whitespace-nowrap text-center">{!!$var!!}</td>
    @endforeach
    @if (!empty($actions))
    <td class="py-3 px-6 whitespace-nowrap text-center">
        @foreach($actions as $action)
        @if ($action == 'delete')
        <a href="{{'/' . request()->path() . '/' . $row[0]}}" onclick="event.preventDefault(); document.getElementById('form-{{$row[0]}}').submit();"><i class="ri-delete-bin-2-line text-red-500"></i></a>
        <form method="POST" action="{{'/' . request()->path() . '/' . $row[0]}}" style="display: none" id="form-{{$row[0]}}">
            @csrf
            @method('delete')
        </form>
        @elseif ($action == 'edit')
        <a href="{{'/' . request()->path() . '/' . $row[0] . '/edit'}}"><i class="ri-edit-2-line text-blue-500"></i></a>
        @endif
        @endforeach
    </td>
    @endif
    {{$slot}}
</tr>
