<div class="text-center">

    <h1>{{$data['source']}} -------------------> {{$data['destination']}}</h1>

    <h3>Price Summary</h3>
    <hr class="bg-danger w-50">

    <table class="text-light w-100">
        <tr>
            <td class="text-center">
                Cruise Fare
            </td>
            <td>
                {{$data['price']}}
            </td>
        </tr>
        <tr>
            <td class="text-center">
                GST
            </td>
            <td>
                {{$data['tax']}}

            </td>
        </tr>
        <tr>
            <td class="text-center">
                Insurance
            </td>
            <td>
               {{$data['insurance']}}

            </td>
        </tr>
        <tr>
            <td class="text-center">
                Total
            </td>
            <td class="text-warning">
                {{$data['total']}}

            </td>
        </tr>

    </table>
    <hr class="bg-primary w-50">
</div>
