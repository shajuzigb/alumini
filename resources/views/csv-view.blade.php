<table>
    <thead>
        <tr>
            @foreach ($csv->getHeader() as $header)
                <th>{{ $header }}</th>
                
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $row)
            <tr>
                
                    <td>{{ $row['id'] }}</td>
                    <td><input type="text" name="name" id="name" value="{{ $row['Dc,'] }}"></td>
                    <td>{{ $row['amount1'] }}</td>
                    <td>{{ $row['Amount 2'] }}</td>
                    <td>{{ $row['amount3'] }}</td>
               
            </tr>
        @endforeach
    </tbody>
</table>
