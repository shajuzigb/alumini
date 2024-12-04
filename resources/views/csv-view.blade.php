<div class="banner">
    <img src="{{ asset('images/exlogo.svg') }}" alt="Banner" style="width: 100%; max-height: 100px;">
</div>

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
                    <td><input type="text" name="amt1" id="amt1" value="{{ $row['amount1']}}"></td>
                    <td><input type="text" name="amt2" id="amt2" value="{{ $row['Amount 2']}}"></td>
                    <td><input type="text" name="amt3" id="amt3" value="{{ $row['amount3']}}"></td>
                   
               
            </tr>
        @endforeach
    </tbody>
</table>

<style>
.banner {
    margin-bottom: 20px;
    max-width: 100%;
    overflow: hidden;
    height: 100px;
}

.banner img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: contain;
}
</style>
