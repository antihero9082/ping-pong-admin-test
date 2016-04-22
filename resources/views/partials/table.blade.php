<!-- This file renders a table via the data that is passed in. -->
@include('vendor.pingpong.admin.partials.script')
@include('vendor.pingpong.admin.partials.style')
<?php
function tdHelper($config)
{
    $td = '<td';
    if(isset($config['position'])) {
        $td .= ' align="' . $config['position'].'"';
    }
    if (isset($config['editable']) && $config['editable']) {
        $td .= ' contenteditable';
    }

    // More config options to come
    return $td .= '>';
}
function thHelper($config)
{
    $th = '<th';
    if (isset($config['width'])) {
        $th .= ' width=' . $config['width'];
    }
    return $th .= '>';
}
?>

<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css"/>
<div class="container">
    <h1>Test content from table partial</h1>
    <button class="btn btn-success" id="newItem">Add Item</button>
    <table class="display compact" id="myTable" cellspacing="0" width="100%" style="table-layout:fixed;word-wrap:break-word">
        <thead>
            @foreach($keys as $key => $config)
                <?=thHelper($config); ?> {{$config['display']}} </th>
            @endforeach

        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                @foreach($keys as $key => $config)
                    @if($key != 'actions')
                        <?=tdHelper($config)?> {{$item[$key]}} </td>
                    @else
                        <td id="action"><button class="btn btn-success"> Save </button> | <button class="btn btn-danger">Delete</button></td>
                    @endif
                @endforeach

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
        "dom": '<"wrapper"flipt>',
        "columnDefs" : [
            {"width" : "5%", "targets" : 0}
        ],
        "autoWidth" : true
    });
    $('document').ready(function(){
        $('.btn-danger').on('click', function(){
            var html = '<div id="danger-delete" class="alert alert-danger"><strong>Danger!</strong> Deleting is dangerous, yo.</div>';
            $('#newItem').after(html);
            setTimeout(function(){
                $('#danger-delete').remove();
            }, 2000);
        });
        $('.btn-success').on('click', function(){
            var html = '<div id="success-delete" class="alert alert-success"><strong>Success!</strong> Saving things is rad, yo!</div>';
            $('#newItem').after(html);
            setTimeout(function(){
                $('#success-delete').remove();
            }, 2000);
        })
    })
</script>
