<!-- This file renders a table via the data that is passed in. -->
@include('vendor.pingpong.admin.partials.script')
<div class="container">
    <h1>Test content from table partial</h1>
    <button class="btn btn-success" id="newItem">Add Item</button>
    <table class="table" id="myTable">
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
    function addActionButtons()
    {
        return '<td><button class="btn btn-success"> Save </button> | <button class="btn btn-danger">Delete</button></td>';
    }
 jQuery('document').ready(
         function(){
             var $ = jQuery;
             $('#myTable').DataTable();
             var counter = $('#myTable tr').length;

             $('#newItem').on('click', function(){
                 var theTable = $('#myTable').DataTable();
                 theTable.row.add(
                         [
                             '',
                             '',
                             '',
                             '',
                             '',
                             '',
                             '',
                             '',
                             '',
                             addActionButtons()
                         ]
                 )
                         .draw()
                         .node();
             });
         }
 )
</script>
