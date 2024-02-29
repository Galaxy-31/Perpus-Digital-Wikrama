@extends('components.master')

@section('title', 'Anggota')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 style="color:black" align="center">Daftar Anggota</h2>
                </div>
            </div>
        </div>
        <table class="table table-bordered, mt-9">
            <tr class align="center">
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th width="190px">Action</th>
            </tr>
            @foreach ($users as $user)
                <tr class align="center"> 
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class align="center">
                            {{-- <a class="btn btn-info" href="{{ route('users.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a> --}}
                            {{-- <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a> --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin mau menghapus {{ $user->name }}?')"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $users->links() !!}
    </div>

@endsection
