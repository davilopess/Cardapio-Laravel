<table class="table table-striped table-hover">
        @foreach ($pratos as $p)
        <tr  class="{{$p->quantidade<=1 ? 'danger' : '' }}">
            <td>{{$p->nome}}</td>

            <td>
                <a href="">
                    <span class="material-icons">search</span>
                </a>
            </td>
            <td>
                <a href="">
                    <span class="material-icons">delete</span>
                </a>
            </td>
        </tr>

        @endforeach
    </table>