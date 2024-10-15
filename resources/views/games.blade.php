<x-layout title="games">
    @foreach($games as $game)
        <tr>
            <td>{{$game->name}}</td>
            <td>{{$game->description}}</td>
            <td>{{$game->image}}</td>
            <td>{{$game->link}}</td>
            <td>{{$game->user_id}}</td>
            <td>{{$game->genre_id}}</td>
{{--            <td>--}}
{{--                <a href="detail.php?id={{$game->id}}">--}}
{{--                    details--}}
{{--                </a>--}}
{{--            </td>--}}
        </tr>
    @endforeach
</x-layout>
