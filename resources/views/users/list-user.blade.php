<x-admin-layout>
    <table class="table">
        <thead>
        <tr>
            <th>Adı Soyadı</th>
            <th>E-posta</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    {{$users->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
</x-admin-layout>
