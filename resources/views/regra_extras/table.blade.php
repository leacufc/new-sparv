<table class="table table-responsive table-hover" id="regraExtras-table">
    <thead>
    <th>#</th>
    <th>Início</th>
    <th>Fim</th>
    <th>Critério</th>
    <th>Pontos</th>
    <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($regraExtras as $regraExtra)
        <tr>
            <td>{!! $regraExtra->id !!}</td>
            <td>{!! $regraExtra->inicio !!}</td>
            <td>{!! $regraExtra->fim !!}</td>
            <td>{!! $regraExtra->criterio !!}</td>
            <td>{!! $regraExtra->pontos !!}</td>
            <td>
                {!! Form::open(['route' => ['regraExtras.destroy', $regraExtra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('regraExtras.show', [$regraExtra->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('regraExtras.edit', [$regraExtra->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center bg-warning text-warning">Nenhuma <b>Regra Extra</b> cadastrada.</td>
        </tr>
    @endforelse
    </tbody>
</table>
