{{Form::open()}}
<table border="1">
    <tbody>
        <tr>
            <th>{{Form::label('nom', 'Nom')}}</th>
            <td>{{Form::text('nom', $gemme->nom, ['placeholder'=>'Nom'])}}</td>
        </tr>
        <tr>
            <th>{{Form::label('description', 'Description')}}</th>
            <td>{{Form::textarea('description', $gemme->description, ['placeholder'=>'Description'])}}</td>
        </tr>
        <tr>
            <th>{{Form::label('Symbolisme', 'Symbolisme')}}</th>
            <td>{{Form::textarea('symbolisme', $gemme->symbolisme, ['placeholder'=>'Symbolisme'])}}</td>
        </tr>
        <tr>
            <th colspan="2">{{Form::submit('Envoyer')}}</th>
        </tr>
    </tbody>
</table>
{{Form::close()}}