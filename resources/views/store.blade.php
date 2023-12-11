@extends('layouts.app')

@section('content')
<section>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Book Name</td>
            <td>Category Name</td>
            <td>Author Name</td>
            <td>Rating</td>
            <td>Voter</td>
        </tr>

        @foreach ($datas as $data)
            <tr>
                <td></td>
                <td><p>{{ $data->book_name }}</p></td>
                <td><p>{{ $data->book_category }}</p></td>
                <td><p>{{ $data->author }}</p></td>
                <td><p>{{ $data->rating }}</p></td>
                <td></td>
            </tr> 
        @endforeach
        
    </table>
</section>    
@endsection