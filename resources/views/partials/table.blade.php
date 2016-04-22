<!-- This file renders a table via the data that is passed in. -->
@include('vendor.pingpong.admin.partials.script')
@include('vendor.pingpong.admin.partials.style')
<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css"/>
<div class="container">
    <h1>Test content from table partial</h1>
    <button class="btn btn-success" id="newItem">Add Item</button>
    <table class="display compact" id="myTable" cellspacing="0" width="100%">
        <thead>
            @foreach($keys as $key)
                <th>{{$key}}</th>
            @endforeach
                <th>Actions</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                @foreach($keys as $key)
                    @if($key != 'id')
                    <td contenteditable>{{$item[$key]}}</td>
                    @else
                    <td>{{$item[$key]}}</td>
                    @endif
                @endforeach
                    <td id="action"><button class="btn btn-success"> Save </button> | <button class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
    /**
     * For info on dom initialization and manipulation, check out the documentation
     * https://datatables.net/examples/basic_init/dom.html
     */
     $('#myTable').DataTable({
        "dom": '<"wrapper"flipt>'
     });
</script>
